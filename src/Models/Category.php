<?php

namespace Arostech\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id'
    ];

    public function posts(): BelongsToMany {
        return $this->belongsToMany(Post::class);
    }
}