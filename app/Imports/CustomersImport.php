<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Modules\User\Entities\Customer;

class CustomersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Customer([
            //
            'file_number' => $row[0],
            'name' => $row[1],
            'address' => $row[2],
            'identification_number' => $row[3],
            'government_service_portal_password' => $row[4],
            'employer' => $row[5],
            'job_title' => $row[6],
            'partner_name' => $row[7],
            'partner_family_address' => $row[8],
            'partner_identification_number' => $row[9],
            'partner_employer' => $row[10],
            'bank_account_number' => $row[11],
            'salary' => $row[12],

        ]);
    }
}
