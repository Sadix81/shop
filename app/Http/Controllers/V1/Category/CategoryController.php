<?php

namespace App\Http\Controllers\V1\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category\Category;
use App\Repositories\Category\CategoryRepository;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    private $categoryrepo;

    public function __construct(CategoryRepository $categoryrepository)
    {
        $this->categoryrepo = $categoryrepository;
    }

    public function index(){
        return $this->categoryrepo->index();
    }

    public function store(CreateCategoryRequest $request){
        $user = Auth::user();
        if(! $user){
            return 'عدم دسترسی';
        }
        
        $error = $this->categoryrepo->store($request);
        if ($error === null){
            return response()->json(['message' => __('category.create,success')] , 201);
        }
        return response()->json(['message' => __('category.create,failed')] , 500);
    }

    public function show(Category $category){
        $show_category = Category::find($category);
        if(! $show_category){
            return 'موردی یافت نشد';
        }
        return $show_category;
    }

    public function update(Category $category , UpdateCategoryRequest $request){
        $user = Auth::user();
        if(! $user){
            return 'عدم دسترسی';
        }

        $error = $this->categoryrepo->update($category , $request);
        if ($error === null){
            return response()->json(['message' => __('category.update,success')] , 200);
        }
        return response()->json(['message' => __('category.update,failed')] , 500);
    }

    public function destroy(Category $category){
        $user = Auth::user();
        if(! $user){
            return 'عدم دسترسی';
        }
        
        $error = $this->categoryrepo->delete($category);
        if ($error === null){
            return response()->json(['message' => __('category.delete,success')] , 200);
        }
        return response()->json(['message' => __('category.delete,failed')] , 500);
    }
}
