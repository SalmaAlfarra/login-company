<?php

namespace Modules\Option\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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

        $rules['category_image'] = [
            'nullable',
            'image',
        ];

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
