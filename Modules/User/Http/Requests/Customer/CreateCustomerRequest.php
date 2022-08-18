<?php

namespace Modules\User\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateCustomerRequest extends FormRequest
{
   public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
            {
                return [
               'first_name' => 'required|min:3|max:255',
               'father_name' => 'required|min:3|max:255',
               'grandfather_name' => 'required|min:3|max:255',
               'family_name' => 'required|min:3|max:255',
               'identification_number' => 'required|max:255',
               'government_service_portal_password' => 'required|max:255',
               'date_of_birth' => 'required|max:255',
               'job_title' => 'required',
               'job_type' => 'required',
               'employer' => 'required',
               'address' => 'required|min:3|max:255',
               'phone' => 'required|numeric',
               'city_id' => 'required',
               'partner_family_address' => 'required',
               'partner_employer' => 'required',
               'partner_identification_number' => 'required',
               'partner_family_name' => 'required',
               'partner_grandfather_name' => 'required',
               'partner_father_name' => 'required',
               'partner_first_name' => 'required',
               'court_id' => 'required',
               'police_office_id' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                   'first_name' => 'required|min:3|max:255',
                   'father_name' => 'required|min:3|max:255',
                   'grandfather_name' => 'required|min:3|max:255',
                   'family_name' => 'required|min:3|max:255',
                   'identification_number' => 'required|max:255',
                   'government_service_portal_password' => 'required|max:255',
                   'date_of_birth' => 'required|max:255',
                   'job_title' => 'required',
                   'job_type' => 'required',
                   'employer' => 'required',
                   'address' => 'required|min:3|max:255',
                   'phone' => 'required|numeric',
                   'city_id' => 'required',
                   'partner_family_address' => 'required',
                   'partner_employer' => 'required',
                   'partner_identification_number' => 'required',
                   'partner_family_name' => 'required',
                   'partner_grandfather_name' => 'required',
                   'partner_father_name' => 'required',
                   'partner_first_name' => 'required',
                   'court_id' => 'required',
                   'police_office_id' => 'required',
                ];
            }
            default: break;
        }
    }

    // public function all($keys = null)
    // {
    //     return parent::all();
    // }
}
