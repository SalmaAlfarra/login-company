<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material_Status extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'marital_status',
        'partner_name',
        'partner_identification_number',
        'partner_employer',
        'partner_family_address',
        'phone_id',
    ];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}
