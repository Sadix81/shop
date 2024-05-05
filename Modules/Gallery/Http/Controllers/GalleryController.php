<?php

namespace Modules\Gallery\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\Gallery\Entities\Gallery;
use Modules\Gallery\Http\Requests\GalleryRequest;

class GalleryController extends Controller
{
//مثل مدرسه با کمک گرفتن از مدل گالری در کنترل پروداکت عکس ها رو ذخیره میکنیم
//فقط در table گالری یک فیلد product_id اصافه کنیم تا ایدی اون ها با عکس های مرتبط مشخص بشه
    public function index()
    {
        $gallery = Gallery::get();
        return view('product::layouts.index' , compact('gallery'));
    }


    public function uploadImage($image , $path='images')
    {
        try {

            $image_name = time() . '-' . $image->getClientOriginalName();
            $file = Storage::putFileAs($path, $image, $image_name);
            return ['path' => $file];
        } catch (\Exception $e) {
            return null;
        }
    }


    public function store(GalleryRequest $request)
    {
        $gallery = Gallery::create([]);

        foreach ($request->images as $image) {
            $imagePath = $this->uploadImage($image)['path'];
            $gallery->images()->create([
                'file_path' => $imagePath,
            ]);
        }
        return redirect()->route('product.index')->with('message' , 'gallery created');
    }



    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery::layouts.edit' , compact('gallery'));
    }




    public function update(GalleryRequest $request, $id)
    {
        $gallery = Gallery::FindOrFail($id);
        $gallery->file_path = $request->file('file_path') != null ? $this->uploadImage($request->file('file_path')) : $gallery->file_path;
        $gallery->save();
        return redirect()->route('product.index');
    }


    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->route('product.index')->with('message' , 'gallery deleted');
    }
}
