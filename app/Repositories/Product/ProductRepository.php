<?php

namespace App\Repositories\Product;

use App\Models\Product\Product;
use Illuminate\Support\Facades\Auth;

class ProductRepository
//do for restore and Forcedelete
{
    public function index()
    {
        $req = [
            'search' => request()->has('search') ? request('search') : null,
            'mine' => request()->has('mine') ? Auth::id() : false,
            'limit' => request()->has('limit') ? request('limit') : 5,
            'status' => request()->has('status') ? 1 : false,
            'price' => request()->has('price') ? request('price') : null,
        ];
        $product = Product::where(function ($query) use ($req) {
            if ($req['search']) {
                $query->where('name', 'like', '%' . $req['search'] . '%');
            }
            if ($req['price']) {
                $query->where('price', '>=', $req['price']);
            }
            if ($req['mine']) {
                $query->where('owner_id', Auth::id());
            }
            if ($req['status']) {
                $query->where('status', 1);
            }
        })->latest()->paginate($req['limit']);

        return $product;
    }

    public function store($request)
    {
        try {
            $price = $request->is_sale ? ($request->price / $request->discount) : $request->price;
            $final_price = $request->price - $price;

            Product::create([
                'name' => $request->name,
                'status' => $request->status,
                'price' => $final_price,
                'category_id' => $request->category_id,
                'details' => $request->details,
                'color' => $request->color,
                'image' => $request->image,
                'is_sale' => $request->is_sale, // YES OR NO
                'discount' => $request->discount, 
                'count' => $request->count,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update($product, $request)
    {
        try {
            $price = $request->is_sale ? ($request->price - $request->discount) : $request->price;
            $final_price = $request->price - $price;

            $product->update([
                'name' => $request->name,
                'status' => $request->status,
                'price' => $final_price,
                'category_id' => $request->category_id,
                'details' => $request->details,
                'color' => $request->color,
                'image' => $request->image ? $request->image : null, //agar ersal shod jadid agar na hamoon ghabli
                'is_sale' => $request->is_sale,
                'discount' => $request->discount,
                'count' => $request->count,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($product)
    {
        try {
            $product->delete();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
