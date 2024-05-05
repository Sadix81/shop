<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    public function rules()
    {
        return [
            'mobile' => 'required|digits:11',
        ];
    }


    public function messages()
    {
        return [
            'username.required' => 'وارد کردن نام الزامیست',
            'username.string' => 'نام باید بصورت حروف وارد شود',
            'username.max' => 'تعدا کارکتر های مجاز 255 کارکتر است',

            'mobile.required' => 'وارد کردن شماره تماس الزامیست',
            'mobile.digits' => 'شماره تماس باید بصورت رقم باشد',
        ];
    }
}
