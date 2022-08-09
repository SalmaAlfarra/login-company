<?php

namespace Modules\Option\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Status\Entities\Bill;
use Modules\User\Entities\Supplier;
use Modules\User\Entities\User;

class Product extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'description',
        'wholesale_priceper_unit',
        'selling_priceper_unit',
        'quntity',
        'product_image',
        'status'
    ];

    public function bill()
    {
        return $this->belongsToMany(Bill::class);
    }

    public function supplier()
    {
        return $this->belongsToMany(Supplier::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
