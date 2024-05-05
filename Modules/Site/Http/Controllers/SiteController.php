<?php

namespace Modules\Site\Http\Controllers;


use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Modules\Product\Entities\Product;

class SiteController extends Controller
{


    public function index()
    {
        $procs = Product::latest()->get();
        $categories = Category::get();

        foreach ($procs as $product) {
            if (isset($product->is_sale)) {
                $off = $product->price * $product->is_sale / 100;
                $product->off = $product->price - $off;
            }
        }

        $mens = Product::whereHas('category', function ($query) {
            $query->where('title', 'mens');
        })->get();

        $women = Product::whereHas('category', function ($query) {
            $query->where('title', 'womens');
        })->get();

        $kids = Product::whereHas('category', function ($query) {
            $query->where('title', 'kids');
        })->get();

        $explores = Product::whereHas('category', function ($query) {
            $query->where('title', 'explore');
        })->get();

        return view('site::site.index', compact('procs', 'categories', 'mens', 'women', 'kids', 'explores'));
    }

    public function show($id)
    {
        $products = Product::find($id);
        return view('site::site.single-product', compact('products'));
    }

    public function products($id = null)
    {
        if ($id !== null) {
            $products = Product::where('category_id', $id)->latest()->get();
        } else {
            $products = Product::latest()->get();
        }
        return view('site::site.product', compact('products'));

    }


}
