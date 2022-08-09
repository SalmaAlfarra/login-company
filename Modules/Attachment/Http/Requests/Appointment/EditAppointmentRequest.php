<?php

namespace Modules\Attachment\Http\Requests\Appointment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditAppointmentRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['title'] = [
            'required',
            'max:255',
        ];

        $rules['descreption'] = [
            'required',
            'max:255',
        ];

        $rules['appointment_date'] = [
            'required',
            'max:255',
        ];

        $rules['appointment_time'] = [
            'required',
            'max:255',
        ];


        $rules['status'] = [
            'required',
            Rule::in(['فعال', 'تم إنجازه', 'تم إلغاؤه', 'تم تأجيله'])
        ];

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}
