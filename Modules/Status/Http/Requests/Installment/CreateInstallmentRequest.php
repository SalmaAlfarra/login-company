<?php

namespace Modules\Status\Http\Requests\Installment;

use Illuminate\Foundation\Http\FormRequest;

class CreateInstallmentRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['total_indebtedness'] = [
            'required',
            'max:255',
            'numeric',
        ];

        $rules['Payment_date'] = [
            'required',
        ];

        $rules['Installment_amount'] = [
            'required',
            'numeric',
        ];

        $rules['remaining_amount'] = [
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
