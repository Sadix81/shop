<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'status' => ['required', 'integer', 'in:0,1'],
            'price' => ['required', 'numeric'],
            'owner_id' => ['nullable',  'exists:App\Models\User\User,id', 'numeric'],
            'details' => ['nullable', 'string', 'max:500'],
            'color' => ['nullable', 'string'],
            'image' => ['nullable'],
            'is_sale' => ['nullable', 'integer'],
            'count' => ['nullable', 'integer'],
            'category_id' => ['required' , 'exists:categories,id' , 'integer']
        ];
    }
}
