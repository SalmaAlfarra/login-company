<?php

namespace Modules\Attachment\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Folder extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name'
    ];

    public function archives()
    {
        return $this->belongsToMany(Archives::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
