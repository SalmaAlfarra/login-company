<?php

namespace Modules\Status\Http\Requests\Bill;

use Illuminate\Foundation\Http\FormRequest;

class CreateBillRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['quntity'] = [
            'required',
            'numeric',
        ];

        $rules['selling_price_per_unit'] = [
            'required',
            'numeric',
        ];

        $rules['total'] = [
            'required',
            'numeric',
        ];

        $rules['first_batch'] = [
            'required',
            'numeric',
        ];

        $rules['remaining_amount'] = [
            'required',
            'numeric',
        ];

        $rules['Payment_period'] = [
            'required',
            'numeric',
        ];

        $rules['monthly_installment'] = [
            'required',
            'numeric',
        ];

        $rules['monthly_discount_amount'] = [
            'required',
            'numeric',
        ];

        $rules['Payment_due_date'] = [
            'required',
        ];

        $rules['address'] = [
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
