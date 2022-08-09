<?php

namespace Modules\Attachment\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\User;

class Plan extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'stage',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
