<?php

namespace Modules\Places\Http\Requests\Branch;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateBranchRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['name'] = [
            'required',
            'max:255',
        ];

        $rules['phone'] = [
            'nullable',
            'numeric',
            'digits_between:7,15',
            Rule::unique('branches', 'phone')->withoutTrashed()
        ];

        $rules['address'] = [
            'required',
            'max:255',
        ];

        $rules['email'] = [
            'required',
            'email',
            'max:64',
            Rule::unique('branches', 'email')->withoutTrashed()
        ];

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
