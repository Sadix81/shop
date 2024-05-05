<?php

namespace Modules\Gallery\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
{

    public function rules()
    {
        return [
            'file_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }


    public function messages()
    {
        return [
            'file_path.required' => ' وارد کردن عکس الزامیست',
            'file_path.image' => ' فایل وارد شده باید بصورت عکس باشد',
            'file_path.mimes' => ' فقط فایل های(jpeg,png,jpg,gif)را ساپورت میکند',
            'file_path.max:' => ' حجم عکس زیاد است',
        ];
    }
}
