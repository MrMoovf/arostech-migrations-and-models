<?php

namespace Arostech\Models;

use Arostech\Models\Category;
use Arostech\Models\Content;
use Arostech\Models\Image;
use Arostech\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;


    public function contents():HasMany {
        return $this->hasMany(Content::class);
    }

    public function images():HasMany {
        return $this->hasMany(Image::class);
    }

    public function categories():HasMany {
        return $this->hasMany(Category::class);
    }

    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }
}
