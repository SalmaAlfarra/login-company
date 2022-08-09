<?php

namespace Modules\Attachment\Http\Requests\Archives;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateCreditCardRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];
        $rules['card_number'] = [
            'required',
            'max:255',
            'numeric',
            'digits_between:16,18',
            Rule::unique('credit_cards', 'card_number')->withoutTrashed()
        ];

        $rules['type'] = [
            'required',
            'max:255',
        ];

        $rules['expire_date'] = [
            'required',
            'max:255',
        ];

        $rules['release_date'] = [
            'required',
            'max:255',
        ];

        $rules['card_pin'] = [
            'required',
            'numeric',
            'max:64'
        ];

        $rules['descreption'] = [
            'required',
            'max:255',
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
