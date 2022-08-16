<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'phone'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function acquaintance()
    {
        return $this->belongsTo(Acquaintance::class);
    }

    public function delegate()
    {
        return $this->belongsTo(Delegate::class);
    }

    public function patron()
    {
        return $this->belongsTo(Patron::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
