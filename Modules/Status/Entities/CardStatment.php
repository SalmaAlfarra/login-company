<?php

namespace Modules\Status\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Attachment\Entities\Credit_Card;

class CardStatment extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'date',
        'explanation_and_statement',
        'collected_amount',
        'remaining_amount',
        'agreed_nstallment'
    ];

    public function credit_card()
    {
        return $this->belongsTo(Credit_Card::class);
    }
}
