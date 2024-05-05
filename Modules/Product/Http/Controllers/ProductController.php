<?php

namespace Modules\Product\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\Category\Entities\Category;
use Modules\Gallery\Entities\Gallery;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->get();
        return view('product::layouts.index' , compact('products'));
    }


    public function create()
    {
        $categories = Category::latest()->get();
        return view('product::layouts.create' , compact('categories'));
    }


    public function uploadImage($image ,  $path = 'images')
    {
        $image_name = time(). '-' .$image->getClientOriginalName();
        $file = Storage::putFileAs($path , $image , $image_name);
        return $file;
    }


    public function store(ProductRequest $request)
    {

        $product = Product::create([
            'name' => $request->input('name'),
            'status' => $request->input('status'),
            'count' => $request->input('count'),
            'price' => $request->input('price'),
            'is_sale' => $request->input('is_sale'),
            'category_id' => $request->input('category_id'),
            'image' => $request->image,
        ]);

        if (count($request->items)) {
            foreach ($request->items as $index => $item) {

                Gallery::create([
                    'file_path' => $item['file_path'],
                    'product_id' => $product->id,
                ]);
            }
        }

        return redirect()->route('product.index');

    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::latest()->get();
        return view('product::layouts.edit' , compact('product' , 'categories'));
    }


    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->status = $request->status;
        $product->count = $request->count;
        $product->price = $request->price;
        $product->is_sale = $request->is_sale;
        $product->category_id = $request->category_id;
        $product->image = $request->image != null ? $request->image : $product->image;
        $product->save();

//        if (count($request->items)) {
//            foreach ($request->items as $index => $item) {
//
//                Gallery::updateOrCreate([
//                    'file_path' => $item['file_path'],
//                    'product_id' => $product->id,
//                ]);
//            }
//        }
        return redirect()->route('product.index');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');

    }
}
