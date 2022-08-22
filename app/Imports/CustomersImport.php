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
            'name' => $row[0],
            'file_number' => $row[1],
        ]);
    }
}
