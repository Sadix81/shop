<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminVerify extends FormRequest
{

    public function rules()
    {
        return [
            'mobile' => 'required|digits:11',
            'code' => 'required',
        ];
    }

}
