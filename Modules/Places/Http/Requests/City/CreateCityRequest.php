<?php

namespace Modules\Places\Http\Requests\City;

use Illuminate\Foundation\Http\FormRequest;

class CreateCityRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['name'] = [
            'required',
            'max:255',
        ];

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
