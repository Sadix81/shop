<?php

namespace App\Http\Requests\User\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfileRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'fullname' => ['nullable', 'max:100', 'string'],
            'username' => ['nullable', 'max:100', 'string', 'unique:users,username'],
            'mobile' => ['nullable', 'regex:/[0-9]{10}/', 'digits:11', 'unique:users,mobile'],
            'password' => ['nullable', 'min:8' , 'regex:/[0-9]/', 'regex:/[A-Z]/', 'regex:/[a-z]/'],
            
            'email' => ['nullable' , 'email' , 'unique:users,email'],
            'email_verified_at' => ['nullable'],
            'avatar' => ['nullable', 'string'],

            'twofactor' => ['nullable'],
            'confirm_code' => ['nullable'],
            'confirm_code_expired_at' => ['nullable'],
        ];
    }
}
