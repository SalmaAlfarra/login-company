<?php

namespace Modules\Attachment\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Status\Entities\Card_Statment;
use Modules\User\Entities\Customer;

class CreditCard extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'card_number',
        'type',
        'expire_date',
        'card_pin',
        'status'
    ];

    public function card_statment()
    {
        return $this->hasOne(Card_Statment::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
