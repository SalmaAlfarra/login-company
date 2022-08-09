<?php

namespace Modules\Attachment\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\User;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'description',
        'appointment_day',
        'appointment_date',
        'appointment_time',
        'status'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
