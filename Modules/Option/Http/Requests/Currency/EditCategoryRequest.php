<?php

namespace Modules\Option\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class EditCategoryRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['name'] = [
            'required',
            'max:255',
        ];

        $rules['exchange_rate'] = [
            'required',
            'numeric',
            'max:255',
        ];
        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
