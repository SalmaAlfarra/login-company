<?php

namespace Modules\Status\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IssueStatment extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'date',
        'collected_amount',
        'movement_number',
        'total_amount_collected'
    ];

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }
}
