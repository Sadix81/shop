<?php

namespace App\Repositories\Product;

use App\Models\Product\Product;

class ProductRepository
{
    public function index(){
        // filter(paginate , search as name , search as above price)
        return Product::all();
    }
    
    public function store($request){
        try {
            Product::create([
                'name' => $request->name,
                'status' => $request->status,
                'price' => $request->price,
                'details' => $request->details,
                'color' => $request->color,
                'image' => $request->image,
                'is_sale' => $request->is_sale,
                'count' => $request->count,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function update($product , $request){
        try {
            $pro = $product;
            $pro->update([
                'name' => $request->name,
                'status' => $request->status,
                'price' => $request->price,
                'details' => $request->details,
                'color' => $request->color,
                'image' => $request->image ? $request->image : null, //agar ersal shod jadid agar na hamoon ghabli
                'is_sale' => $request->is_sale,
                'count' => $request->count,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($product){
        try {
            $product->delete();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
