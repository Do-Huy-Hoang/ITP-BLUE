<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductUpdateResquest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->route('id');
        return [
            'pro_name' => [
                'bail','required','max:255','min:5',Rule::unique('products')->ignore($id,'pro_id'),
            ],
            'pro_price'=>'required|numeric|max:9999999.99|min:1.00',
            'pro_quantity'=>'required|numeric|max:999999.00|min:0.00',
            'category_id' => 'required',
            'pro_brand' => 'required|max:255|min:2',     
            'pro_description' => 'required',
            'image' => 'image',
            'img_1' => 'image',
            'img_2' => 'image',
            'img_3' => 'image',
            'img_4' => 'image',
            'img_5' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'pro_name.required' => 'Name cannot be blank',
            'pro_name.unique' => 'Names cannot be duplicated',
            'pro_name.max' => 'Name cannot exceed 255 characters',
            'pro_name.min' => 'Name must be greater than 5 characters',
            'pro_price.required' => 'Price cannot be blank',
            'pro_price.min'=>'Minimum price to enter is 1.00$',
            'pro_price.max'=>'The highest price to enter is 9.999.999.99$',
            'pro_quantity.required' => 'Quantity cannot be blank',
            'pro_quantity.min'=>'Minimum quantity to enter is 1',
            'pro_quantity.max'=>'The highest quantity to enter is 999.999',
            'category_id.required' => 'Category cannot be blank',
            'pro_brand.required' => 'Brand cannot be blank',
            'pro_brand.max' => 'Brand cannot exceed 255 characters',
            'pro_brand.min' => 'Brand must be greater than 2 characters',
            'pro_description.required' => 'Content cannot be blank',
            'image.image' => 'The file must be an image',
            'img_1.image' => 'The file must be an image',
            'img_2.image' => 'The file must be an image',
            'img_3.image' => 'The file must be an image',
            'img_4.image' => 'The file must be an image',
            'img_5.image' => 'The file must be an image',
        ];
    }
}
