<?php

namespace Modules\Status\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warranty extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'type',
        'description',
        'amount'
    ];

    public function bill()
    {
        return $this->belongsToMany(Bill::class);
    }
}
