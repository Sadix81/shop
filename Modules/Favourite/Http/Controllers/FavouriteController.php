<?php

namespace Modules\Favourite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Favourite\Entities\Favourite;
use Modules\Product\Entities\Product;

class FavouriteController extends Controller
{
    public function index()
    {

        $favourites = Favourite::with(['favouriteable'])->latest()->get();

        $products = $favourites->map(function ($favorite){
            return $favorite->favouriteable;
        });
        return view('site::site.favourite' , compact('products'));
    }


    public function store(Request $request , $id)
    {
        $user = Auth::guard('customer')->user();

        $product = Product::findOrFail($id);  //find product that we want to store

        $favorite = new Favourite();  //create new ob of favourite
        $favorite->user_id = $user->id;  //get user who is login

        $product->favouriteable()->save($favorite);  //using the relation between the favourite and the product to save

//        return redirect()->back();
        return redirect()->route('site.');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
