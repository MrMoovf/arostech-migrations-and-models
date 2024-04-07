<?php

namespace Arostech\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processedanalytic extends Model
{
    use HasFactory;
    protected $fillable = ['analytics'];
    protected $casts = [
        'analytics' => 'json'
    ];
}
