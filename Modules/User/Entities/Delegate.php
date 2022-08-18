<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delegate extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'phone',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function phone()
    {
        return $this->hasMany(Phone::class);
    }
}
