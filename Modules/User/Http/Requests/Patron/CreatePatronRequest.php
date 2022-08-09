<?php

namespace Modules\User\Http\Requests\Patron;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreatePatronRequest extends FormRequest
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

        $rules['government_service_portal_password'] = [
            'required',
            'max:255',
        ];

        $rules['job_title'] = [
            'required',
            'max:255',
        ];

        $rules['job_type'] = [
            'required',
            'max:255',
        ];

        $rules['employer'] = [
            'required',
            'max:255',
        ];

        $rules['bank_account_number'] = [
            'required',
            'max:255',
            'numeric',
        ];

        $rules['salary'] = [
            'required',
            'max:255',
            'numeric',
        ];

        $rules['address'] = [
            'required',
            'max:255',
        ];

        $rules['phone'] = [
            'nullable',
            'numeric',
            'digits_between:7,15',
            Rule::unique('acquaintances', 'phone')->withoutTrashed()
        ];

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
