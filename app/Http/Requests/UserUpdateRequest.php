<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'us_phone' => ['required', 'string', 'max:20', 'regex:/(84|0[3|5|7|8|9])([0-9]{8,9})\b/']
        ];
    }

    public function messages()
    {
        return [
            'us_phone.required' => 'Invalid phone number, must enter vietnamese format phone number'
        ];
    }
}