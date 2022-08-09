<?php

namespace Modules\Places\Http\Requests\Bank;

use Illuminate\Foundation\Http\FormRequest;

class CreateBankRequest extends FormRequest
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
