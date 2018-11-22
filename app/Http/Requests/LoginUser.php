<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUser extends FormRequest
{

    public function rules()
    {
        return [
            'login' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'Login jest wymagany',
            'password.required'  => 'Hasło jest wymagane',
        ];
    }
}
