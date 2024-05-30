<?php

namespace Arostech\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model
{
    use HasFactory, HasRecursiveRelationships;
    protected $fillable = [
        'name',
        'parent_id'
    ];

    public function posts(): BelongsToMany {
        return $this->belongsToMany(Post::class);
    }
}
