<?php

namespace App\Http\Controllers\V1\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product\Product;
use App\Repositories\Product\ProductRepository;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    private $productRepo;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepo = $productRepository;
    }

    public function index(){
        return $this->productRepo->index();
    }

    
    public function store(CreateProductRequest $request){
        $user = Auth::id();

        if($user !== 1){
            return 'عدم دسترسی';
        }
        if(! $request->is_sale && ($request->discount > 0)){
            return '.محصول شامل تخفیف نمیباشد';
        }

        if($request->discount > $request->price){
            return '.مبلغ وارد شده کمتر از تخفیف است';
        }

        $error = $this->productRepo->store($request);
        if ($error === null){
            return response()->json(['message' => __('product.create,success')] , 201);
        }
        return response()->json(['message' => __('product.create,failed')] , 500);
    }


    public function show(Product $product){
        $show_product = Product::find($product);
        if(! $show_product){
            return '.موردی یافت نشد';
        }
        return $show_product;
    }


    public function update(Product $product , UpdateProductRequest $request){
        $user = Auth::id();

        if($user !== 1){
            return 'عدم دسترسی';
        }
        if(! $request->is_sale && ($request->discount > 0)){
            return '.محصول شامل تخفیف نمیباشد';
        }

        if($request->discount > $request->price){
            return '.مبلغ وارد شده کمتر از تخفیف است';
        }

        $error = $this->productRepo->update($product , $request);
        if ($error === null){
            return response()->json(['message' => __('product.update,success')] , 200);
        }
        return response()->json(['message' => __('product.update,failed')] , 500);
    }


    public function destroy(Product $product){
        $user = Auth::id();

        if($user !== 1){
            return 'عدم دسترسی';
        }
        $error = $this->productRepo->delete($product);
        if ($error === null){
            return response()->json(['message' => __('product.delete,success')] , 200);
        }
        return response()->json(['message' => __('product.delete,failed')] , 500);
    }

    public function restore(Product $product){

        $user = Auth::user();
        if (!$user) {
            return response()->json(['message' => 'Access denied.'], 403);
        }

        if (! $product->trashed()) {
            return '.عدم دسترسی';
        } 
        $error = $this->productRepo->restore($product);
        if ($error === null){
            return response()->json(['message' => __('product.restore,success')] , 200);
        }
        return response()->json(['message' => __('product.restore,failed')] , 500);
    }
}
