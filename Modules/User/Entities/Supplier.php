<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Option\Entities\Product;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'first_name',
        'father_name',
        'grandfather_name',
        'family_name',
        'address',
        'phone',
        'email',
        'profile_image'
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function delegate()
    {
        return $this->hasMany(Delegate::class);
    }
}
