<?php

namespace Modules\Status\Http\Requests\AccountStatment;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountStatmentRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['date'] = [
            'required',
        ];

        $rules['collected_amount'] = [
            'required',
            'max:255',
        ];

        $rules['debtor'] = [
            'required',
            'numeric',
        ];

        $rules['creditor'] = [
            'required',
            'numeric',
        ];

        $rules['balance'] = [
            'required',
            'numeric',
        ];

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
