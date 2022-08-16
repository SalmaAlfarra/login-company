<?php

namespace Modules\User\Entities;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Attachment\Entities\Appointment;
use Modules\Attachment\Entities\Plan;
use Modules\Option\Entities\Product;

class User extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'user_name',
        'first_name',
        'father_name',
        'grandfather_name',
        'family_name',
        // 'city',
        'address',
        'phone',
        'email',
        // 'email_verified_at',
        'profile_image'
    ];

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function plan()
    {
        return $this->hasMany(Plan::class);
    }

    public function phone()
    {
        return $this->hasMany(Phone::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $guarded = [];

    protected $attributes = [];

    protected $appends = [];

    protected static function newFactory()
    {
        return new UserFactory();
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
