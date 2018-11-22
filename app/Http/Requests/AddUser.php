<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUser extends FormRequest
{

    public function rules()
    {
        return [
            'login' => 'required|unique:users|min:3|max:20',
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required|min:3|max:30',
            'password_confirm' => 'same:password'
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'Login jest wymagany',
            'login.unique' => 'Podany login już istnieje',
            'login.min' => 'Login musi mieć minimum 3 znaki',
            'login.max' => 'Login musi mieć maksymalnie 20 znaki',
            'firstname.required'  => 'Imię jest wymagane',
            'lastname.required'  => 'Nazwisko jest wymagane',
            'password.required'  => 'Hasło jest wymagane',
            'password.min' => 'Hasło musi mieć minimum 3 znaki',
            'password.max' => 'Hasło musi mieć maksymalnie 30 znaki',
            'password_confirm.same'  => 'Hasła się nie zgadzają',
        ];
    }
}
