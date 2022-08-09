<?php

namespace Modules\Status\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AccountStatment extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'date',
        'explanation_and_statement',
        'debtor',
        'creditor',
        'balance',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
