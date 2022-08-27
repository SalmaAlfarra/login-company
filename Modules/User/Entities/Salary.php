<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salary extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'bank_account_number',
        'salary',
        'branch_id',
    ];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}
