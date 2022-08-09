<?php

namespace Modules\Attachment\Http\Requests\Plan;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlanRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['title'] = [
            'required',
            'max:255',
        ];

        $rules['stage'] = [
            'required',
            'max:255',
        ];

        $rules['descreption'] = [
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
