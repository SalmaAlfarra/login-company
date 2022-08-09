<?php

namespace Modules\Places\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Court extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'phone',
        'address'
    ];

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
