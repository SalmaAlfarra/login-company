<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Places\Entities\City;

class Acquaintance extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'identification_number',
        'relationship',
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
