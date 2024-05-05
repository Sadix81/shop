<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required',
            'status' => 'required',
            'count' => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => ' وارد کردن نام محصول الزامیست',
            'status.required' => ' وارد کردن وضعیت محصول الزامیست',
            'count.required' => ' وارد کردن تعداد موجود محصول الزامیست',
            'count.numeric' => ' تعداد موجود به عدد وارد شود',
            'price.required' => ' وارد کردن قیمت محصول الزامیست',
            'price.numeric' => ' قیمت به عدد وارد شود',
            'category_id.required' => ' مشخص کردن دسته بندی محصول الزامیست',
        ];
    }
}
