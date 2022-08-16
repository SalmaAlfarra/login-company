<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Places\Entities\City;

class Patron extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'first_name',
        'father_name',
        'grandfather_name',
        'family_name',
        'identification_number',
        'government_service_portal_password',
        'salary',
        'bank_account_number',
        'job_type',
        'job_title',
        'address',
        'phone',
        'city_id',
        'customer_id'
    ];

    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function phone()
    {
        return $this->hasMany(Phone::class);
    }
}
