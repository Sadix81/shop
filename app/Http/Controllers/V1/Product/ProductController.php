<?php

namespace App\Http\Controllers\V1\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product\Product;
use App\Repositories\Product\ProductRepository;
use Illuminate\Support\Facades\Auth as FacadesAuth;



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
        $error = $this->productRepo->store($request);
        if ($error === null){
            return response()->json(['message' => __('product.create,success')] , 201);
        }
        return response()->json(['message' => __('product.create,failed')] , 500);
    }

    public function show(Product $product){
        $show_product = Product::find($product);
        if(! $show_product){
            return 'موردی یافت نشد';
        }
        return $show_product;
    }

    public function update(Product $product , UpdateProductRequest $request){
        $user = FacadesAuth::user();
        if(! $user){
            return 'عدم دسترسی';
        }

        $error = $this->productRepo->update($product , $request);
        if ($error === null){
            return response()->json(['message' => __('product.update,success')] , 200);
        }
        return response()->json(['message' => __('product.update,failed')] , 500);
    }

    public function destroy(Product $product){
        $error = $this->productRepo->delete($product);
        if ($error === null){
            return response()->json(['message' => __('product.delete,success')] , 200);
        }
        return response()->json(['message' => __('product.delete,failed')] , 500);
    }
}
