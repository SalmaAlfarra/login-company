<?php

namespace Modules\User\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateCustomerRequest extends FormRequest
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

        $rules['identification_issuance_date'] = [
            'required',
            'max:255',
        ];

        $rules['government_service_portal_password'] = [
            'required',
            'max:255',
        ];

        $rules['date_of_birth'] = [
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
            Rule::unique('customers', 'phone')->withoutTrashed()
        ];

        $rules['profile_image'] = [
            'nullable',
            'image',
        ];

        $rules['status'] = [
            'required',
            Rule::in(['أعزب', 'متزوج', 'مطلق', 'أرمل'])
        ];

        $rules['partner_first_name'] = [
            'nullable',
            'max:255',
        ];

        $rules['partner_father_name'] = [
            'nullable',
            'max:255',
        ];

        $rules['partner_grandfather_name'] = [
            'nullable',
            'max:255',
        ];

        $rules['partner_family_name'] = [
            'nullable',
            'max:255',
        ];

        $rules['partner_identification_number'] = [
            'nullable',
            'numeric',
        ];

        $rules['partner_employer'] = [
            'nullable',
            'max:255',
        ];

        $rules['partner_family_address'] = [
            'nullable',
            'max:255',
        ];

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
