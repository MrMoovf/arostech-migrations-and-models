<?php

namespace Arostech\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'extension',
        'name_extension',
        'filesize',
        'dimensions',
        'title',
        'caption',
        'alt_text',
        'is_deleted',
        'last_updated_by_user'
    ];
}
