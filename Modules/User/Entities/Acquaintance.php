<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Acquaintance extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'first_name',
        'father_name',
        'grandfather_name',
        'family_name',
        'identification_number',
        'relationship',
        'address',
        'phone'
    ];

    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
