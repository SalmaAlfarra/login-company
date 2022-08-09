<?php

namespace Modules\User\Http\Requests\Supplier;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateSupplierRequest extends FormRequest
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

        $rules['email'] = [
            'required',
            'email',
            'max:64',
            Rule::unique('branches', 'email')->withoutTrashed()
        ];

        $rules['profile_image'] = [
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
