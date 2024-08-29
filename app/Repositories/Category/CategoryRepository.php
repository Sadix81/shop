<?php

namespace App\Repositories\Category;

use App\Models\Category\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function index(){
        $req = [
            'search' => request()->has('search') ? request('search') : null,
            'limit' => request()->has('limit') ? request('limit') : 10
        ];

        $category = Category::where(function($query) use($req){
            $query->where('title' , 'like' , '%'.$req['search'].'%');
        })->latest()->paginate($req['limit']);
        
        return $category;
    }

    public function store($request){
        try {
            Category::create([
                'title' => $request->title
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update($category , $request){
        try {
            $category->update([
                'title' => $request->title
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($category){
        try {
            $category->delete();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
