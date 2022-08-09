<?php

namespace Modules\User\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;

class ChangePasswordRequest extends FormRequest
{

    public function rules()
    {
        $rules = [];
        $rules['current_password'] = [
            // 'required',
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


        return $rules;
    }

    public function attributes()
    {
        return [
            'password' => 'password',
            'password_confirmation' => 'password_confirmation',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
