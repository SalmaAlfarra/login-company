<?php

namespace Modules\Option\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'description',
        'category_image'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
