<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ord_user_name'=>'required|min:2|max:255',
            'ord_phone_no' => ['required', 'regex:/^((\+84|84|0|0084)(3|5|7|8|9))[0-9]{8}$/i'],
            'address'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'cate_name.required' => 'Name cannot be blank',
            'cate_name.max' => 'Name cannot exceed 255 characters',
            'cate_name.min' => 'Name must be greater than 2 characters',
            'ord_phone_no.required' => 'Phone number cannot be blank',
            'ord_phone_no.regex' => 'Incorrect telephone number',
            'address.required' => 'Address cannot be blank',
        ];
    }
}
