<?php

namespace Modules\Option\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\Customer;

class Order extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'type',
        'description'
    ];

    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }
}
