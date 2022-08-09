<?php

namespace Modules\Attachment\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'image'
    ];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
}
