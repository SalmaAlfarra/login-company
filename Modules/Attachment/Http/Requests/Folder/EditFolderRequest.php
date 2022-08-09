<?php

namespace Modules\Attachment\Http\Requests\Folder;

use Illuminate\Foundation\Http\FormRequest;

class EditFolderRequest extends FormRequest
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
