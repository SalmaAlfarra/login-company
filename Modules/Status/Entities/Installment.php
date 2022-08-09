<?php

namespace Modules\Status\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Installment extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'total_indebtedness',
        'Payment_date',
        'Installment_amount',
        'remaining_amount'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
