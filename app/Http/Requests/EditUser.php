<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUser extends FormRequest
{

    public function rules()
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'firstname.required'  => 'Imię jest wymagane',
            'lastname.required'  => 'Nazwisko jest wymagane'
        ];
    }
}
