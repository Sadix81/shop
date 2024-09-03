<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{ 
    public function rules(): array
    {
        return [
            'name' => ['required' , 'string' , 'max:100'],
            'status' => ['required' , 'integer' , 'in:0,1'],
            'price' => ['required' , 'integer' , 'min:0'], 
            'details' =>['nullable' , 'string' , 'max:500'],
            'color' => ['nullable' , 'string'],
            'image' => ['nullable'],
            'is_sale' => ['nullable' , 'integer' , 'min:0' , 'max:1'],
            'discount' => ['nullable' , 'numeric' , 'gt:0'],
            'count' => ['nullable' , 'integer'],
            'category_id' => ['required' , 'exists:categories,id' , 'integer' , 'gt:0'],
            // 'category_id' => ['required' , 'array'],
            // 'category_id.*' => ['required' , 'exists:categories,id' , 'integer'],
        ];
    }
}
