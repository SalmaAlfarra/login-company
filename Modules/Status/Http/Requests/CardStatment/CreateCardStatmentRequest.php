<?php

namespace Modules\Status\Http\Requests\CardStatment;

use Illuminate\Foundation\Http\FormRequest;

class CreateCardStatmentRequest extends FormRequest
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
            'numeric',
        ];

        $rules['movement_number'] = [
            'required',
            'numeric',
        ];

        $rules['total_amount_collected'] = [
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
