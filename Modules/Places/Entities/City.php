<?php

namespace Modules\Places\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\Acquaintance;
use Modules\User\Entities\Patron;

class City extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable =
    [
        'name'
    ];

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }

    public function patron()
    {
        return $this->hasMany(Patron::class);
    }

    public function acquaintance()
    {
        return $this->hasMany(Acquaintance::class);
    }
}
