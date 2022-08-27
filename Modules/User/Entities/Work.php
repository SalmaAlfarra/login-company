<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'job_title',
        'job_type',
        'employer',
        'job_status',
    ];
    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
