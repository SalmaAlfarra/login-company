<?php

namespace Modules\Option\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateProductRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['name'] = [
            'required',
            'max:255',
        ];

        $rules['descreption'] = [
            'required',
            'max:255',
        ];

        $rules['wholesale_priceper_unit'] = [
            'required',
            'numeric',
        ];

        $rules['selling_priceper_unit'] = [
            'required',
            'numeric',
        ];

        $rules['quntity'] = [
            'required',
            'numeric',
        ];

        $rules['product_image'] = [
            'nullable',
            'image',
        ];

        $rules['status'] = [
            'required',
            Rule::in(['متوفر في المخزن', 'غير متوفر'])
        ];

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
