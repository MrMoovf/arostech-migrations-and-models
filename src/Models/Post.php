<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    
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
}
