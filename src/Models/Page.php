<?php

namespace Arostech\Models;

use Arostech\Models\Category;
use Arostech\Models\Content;
use Arostech\Models\Image;
use Arostech\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    public function contents():BelongsToMany {
        return $this->belongsToMany(Content::class);
    }

    public function images():BelongsToMany {
        return $this->belongsToMany(Image::class);
    }

    public function categories():BelongsToMany {
        return $this->belongsToMany(Category::class);
    }

    public function posts(): BelongsToMany {
        return $this->belongsToMany(Post::class);
    }
}
