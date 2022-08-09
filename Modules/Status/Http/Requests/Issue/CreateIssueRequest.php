<?php

namespace Modules\Status\Http\Requests\Issue;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateIssueRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['issue_number'] = [
            'required',
            'max:255',
            'numeric',
        ];

        $rules['title'] = [
            'required',
        ];

        $rules['descreption'] = [
            'required',
            'max:255',
        ];

        $rules['issue_amount'] = [
            'required',
            'numeric',
        ];

        $rules['issue_cost'] = [
            'required',
            'numeric',
        ];

        $rules['status'] = [
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
