<?php

namespace Arostech\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'author',
        'title',
        'subtitle',
        'summary',
        'content',
        'alt_field1',
        'metadata',
        'view_count',
        'featured_image_id',
        'slug',
        'published_at'
    ];

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class);
    }

    public function featuredImage():HasOne{
        return $this->hasOne(Image::class,'id');
    }
}
