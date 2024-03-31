<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdcutAddRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pro_name' => 'bail|required|unique:products|max:255|min:5',
            'pro_price'=>'required|max:8|min:2',
            'category_id' => 'required',
            'pro_brand' => 'required|max:255|min:3',     
            'pro_description' => 'required',
            'image' => 'required|image',
            'img_childent' => 'array|size:5',
            'img_childent.*' => 'image',
        ];
    }
    public function messages()
    {
        return [
            'pro_name.required' => 'Name cannot be blank',
            'pro_name.unique' => 'Names cannot be duplicated',
            'pro_name.max' => 'Name cannot exceed 255 characters',
            'pro_name.min' => 'Name must be greater than 5 characters',
            'pro_price.required' => 'Price must be greater than 0',
            'pro_price.min'=>'Minimum price to enter is 2.0$',
            'pro_price.max'=>'The highest price to enter is 1.000.000.000$',
            'category_id.required' => 'Category cannot be blank',
            'pro_brand.required' => 'Brand cannot be blank',
            'pro_brand.max' => 'Brand cannot exceed 255 characters',
            'pro_brand.min' => 'Brand must be greater than 3 characters',
            'pro_description.required' => 'Content cannot be blank',
            'image.required' => 'Image cannot be blank',
            'image.image' => 'The file must be an image',
            'img_childent.array' => 'Must import file array',
            'img_childent.size' => 'There must be 5 images',
            'img_childent.*.image' => 'Each file in the array must be an image',
        ];
    }
}
