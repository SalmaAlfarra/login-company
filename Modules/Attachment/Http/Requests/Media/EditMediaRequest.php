<?php

namespace Modules\Attachment\Http\Requests\Media;

use Illuminate\Foundation\Http\FormRequest;

class EditMediaRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['image'] = [
            'nullable',
            'image',
        ];
        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
