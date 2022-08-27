<?php

namespace Modules\Option\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Status\Entities\Bill;
use Modules\User\Entities\Customer;

class PaymentMechanism extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'type'
    ];

    public function bill()
    {
        return $this->belongsToMany(Bill::class);
    }

    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }
}
