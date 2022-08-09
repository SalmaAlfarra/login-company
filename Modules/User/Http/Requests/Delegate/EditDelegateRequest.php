<?php

namespace Modules\User\Http\Requests\Delegate;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditDelegateRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['first_name'] = [
            'required',
            'max:255',
        ];

        $rules['father_name'] = [
            'required',
            'max:255',
        ];

        $rules['grandfather_name'] = [
            'required',
            'max:255',
        ];

        $rules['family_name'] = [
            'required',
            'max:255',
        ];

        $rules['identification_number'] = [
            'required',
            'numeric',
        ];

        $rules['phone'] = [
            'nullable',
            'numeric',
            'digits_between:7,15',
            Rule::unique('delegates', 'phone')->withoutTrashed()
        ];

        $rules['image'] = [
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
