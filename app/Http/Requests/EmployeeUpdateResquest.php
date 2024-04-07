<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeUpdateResquest extends FormRequest
{

    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        $id = $this->route('id');
        return [
            'us_name' => [
                 'string', 'max:255', 'min:10'
            ],
            'email' => [
                 'regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
                Rule::unique('users', 'email')->ignore($id)
            ],
            'us_phone' => [
                 'regex:/^((\+84|84|0|0084)(3|5|7|8|9))[0-9]{8}$/i'
            ],
            'us_birthday' => [
                 'date'
            ],
            'role_id' => 'required|array|min:1',
            'role_id.*' => [
                'exists:roles,rol_id' 
            ],
        ];
    }

    public function messages()
    {
        return [
            'us_name.required' => 'Name cannot be blank',
            'us_name.min' => 'Name must be greater than 5 characters',
            'us_name.max' => 'Name cannot exceed 255 characters',
            'email.required' => 'Email cannot be blank',
            'email.regex' => 'Invalid email format',
            'us_phone.required' => 'Phone number cannot be blank',
            'us_phone.regex' => 'Invalid phone number format',
            'us_birthday.required' => 'Birthday cannot be blank',
            'us_birthday.date' => 'Invalid date format',
            'role_id.*.exists' => 'Invalid role',
            'role_id.required' => 'Role cannot be blank',
            'role_id.min' => 'Role cannot be blank',
            'role_id.array' => 'Array of role ids that must be imported'
        ];
    }
}
