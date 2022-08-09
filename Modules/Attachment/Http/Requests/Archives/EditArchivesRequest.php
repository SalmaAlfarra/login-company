<?php

namespace Modules\Attachment\Http\Requests\Archives;

use Illuminate\Foundation\Http\FormRequest;

class EditArchivesRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['name'] = [
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
