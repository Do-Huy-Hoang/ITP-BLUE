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
            'us_phone' => ['nullable', 'string', 'max:20', 'regex:/(84|0[3|5|7|8|9])([0-9]{8,9})\b/'],
            'address' => ['nullable', 'string', 'min:15', 'max:40'],
            'us_name' => ['nullable', 'string', 'min:5'],
        ];
    }


    public function messages()
    {
        return [
            'us_phone.regex' => 'Invalid phone number, must enter Vietnamese format phone number',
            'address.min' => 'The address must be at least :min characters.',
            'address.max' => 'The address may not be greater than :max characters.',
            'us_name.min' => 'The name must be at least :min characters.',
        ];
    }
}
