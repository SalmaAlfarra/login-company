<?php

namespace Modules\Status\Http\Requests\Warranty;

use Illuminate\Foundation\Http\FormRequest;

class CreateWarrantyRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['type'] =
            [
                'required',
                'max:255',
            ];

        $rules['descreption'] =
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

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
