<?php

namespace Modules\Option\Http\Requests\PaymentMechanism;

use Illuminate\Foundation\Http\FormRequest;

class EditPaymentMechanismRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['type'] = [
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
