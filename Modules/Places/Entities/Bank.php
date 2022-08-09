<?php

namespace Modules\Places\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bank extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable =
    [
        'name'
    ];

    public function branch()
    {
        return $this->hasMany(Branch::class);
    }
}
