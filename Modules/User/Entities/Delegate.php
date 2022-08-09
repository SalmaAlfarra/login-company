<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delegate extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'first_name',
        'father_name',
        'grandfather_name',
        'family_name',
        'phone',
        'profile_image'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
