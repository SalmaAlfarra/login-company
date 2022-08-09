<?php

namespace Modules\User\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;

class CreateUserRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['username'] = [
            'required',
            'max:255',
            Rule::unique('users', 'username')->withoutTrashed()
        ];

        $rules['first_name'] = [
            'required',
            'max:255',
        ];

        $rules['father_name'] = [
            'required',
            'max:255',
        ];

        $rules['grandfather_name'] = [
            'required',
            'max:255',
        ];

        $rules['family_name'] = [
            'required',
            'max:255',
        ];

        $rules['identification_number'] = [
            'required',
            'numeric',
        ];

        $rules['address'] = [
            'required',
            'max:255',
        ];

        $rules['phone'] = [
            'nullable',
            'numeric',
            'digits_between:7,15',
            Rule::unique('delegates', 'phone')->withoutTrashed()
        ];

        $rules['email'] = [
            'required',
            'email',
            'max:64',
            Rule::unique('branches', 'email')->withoutTrashed()
        ];

        $rules['password'] = [
            'required',
            'max:64',
            'between:6,64',
            'confirmed',
            Password::min(6)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()
        ];
        $rules['password_confirmation'] = [
            'required',
            'same:password',
            'max:64',
            'between:6,64',
            Password::min(6)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()
        ];

        $rules['profile_image'] = [
            'nullable',
            'image',
        ];

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
    public function authorize()
    {
        return true;
    }
}
