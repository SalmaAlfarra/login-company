<?php

namespace Modules\Status\Http\Requests\Issue;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateIssueRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['date'] =
            [
                'required',
            ];

        $rules['explanation_and_statement'] =
            [
                'required',
                'max:255',
            ];

        $rules['collected_amount'] =
            [
                'required',
                'max:255',
                'numeric',
            ];

        $rules['remaining_amount'] =
            [
                'required',
                'numeric',
            ];

        $rules['total_amount_collected'] =
            [
                'required',
                'numeric',
            ];

        $rules['agreed_nstallment'] =
            [
                'required',
                'numeric',
            ];

        $rules['status'] =
            [
                'required',
                Rule::in(['فعالة', 'غير فعالة'])
            ];

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
