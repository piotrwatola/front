<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Address extends FormRequest
{
    public function rules()
    {
        return [
            'street' => 'required|min:3|max:50',
            'city' => 'required|min:3|max:30',
            'zipcode' => 'required|min:6|max:6' //@TODO tutaj wyrażenie regularne
        ];
    }

    public function messages()
    {
        return [
            'street.required' => 'Ulica jest wymagana',
            'street.min' => 'Ulica musi mieć minimum 3 znaki',
            'street.max' => 'Ulica musi mieć maksymalnie 50 znaków',
            'city.required' => 'Miasto jest wymagane',
            'city.min' => 'Miasto musi mieć minimum 3 znaki',
            'city.max' => 'Miasto musi mieć maksymalnie 30 znaków',
            'zipcode.required' => 'Kod pocztowy jest wymagany',
            'zipcode.min' => 'Kod pocztowy musi mieć 6 znaków',
            'zipcode.max' => 'Kod pocztowy musi mieć 6 znaków'
        ];
    }
}
