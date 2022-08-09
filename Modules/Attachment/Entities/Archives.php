<?php

namespace Modules\Attachment\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\Customer;

class Archives extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function folder()
    {
        return $this->belongsToMany(Folder::class);
    }
}
