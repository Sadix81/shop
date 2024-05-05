<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\Category\Entities\Category;
use Modules\Category\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::latest()->get();
        return view('category::layouts.index' , compact('categories'));
    }


    public function create()
    {
        $categories = Category::latest()->get();
        return view('category::layouts.create' , compact('categories'));
    }


    public function uploadImage($image ,  $path = 'images')
    {
        $image_name = time(). '-' .$image->getClientOriginalName();
        $file = Storage::putFileAs($path , $image , $image_name);
        return $file;
    }


    public function store(Request $request)
    {
         Category::create([
             'title' => $request->input('title'),
             'parent_id' => $request->input('parent_id'),
             'image' => $request->image
        ]);

        return redirect()->route('category.index');
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::latest()->get();
        return view('category::layouts.edit' , compact('category','categories'));
    }


    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->parent_id = $request->parent_id != null ? $request->parent_id : $category->parent_id;
        $category->image = $request->image != null ? $request->image : $category->image;
        $category->save();
        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }


}
