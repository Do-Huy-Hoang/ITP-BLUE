<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeCreateRequest extends FormRequest
{

    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'us_name' => [
                'required', 'string', 'max:255', 'min:10'
            ],
            'email' => [
                'required', 'regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/','unique:users,email'
            ],
            'emp_password' => [
                'required', 
                'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/'
            ],
            'us_phone' => [
                'required', 'regex:/^((\+84|84|0|0084)(3|5|7|8|9))[0-9]{8}$/i'
            ],
            'us_birthday' => [
                'required', 'date'
            ],
            'role_id' => 'required|array|min:1',
            'role_id.*' => [
                'required','exists:roles,rol_id' 
            ],
            'image' => [
                'required', 'image' 
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
            'emp_password.required' => 'Password cannot be blank',
            'emp_password.regex' => 'Password must contain at least one uppercase letter, one digit, and one special character',
            'us_phone.required' => 'Phone number cannot be blank',
            'us_phone.regex' => 'Invalid phone number format',
            'us_birthday.required' => 'Birthday cannot be blank',
            'us_birthday.date' => 'Invalid date format',
            'role_id.*.exists' => 'Invalid role',
            'role_id.required' => 'Role cannot be blank',
            'role_id.min' => 'Role cannot be blank',
            'role_id.array' => 'Array of role ids that must be imported',
            'image.required' => 'Image cannot be blank',
            'image.image' => 'The file must be an image',
        ];
    }
}
