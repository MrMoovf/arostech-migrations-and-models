<?php

namespace Arostech\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'company', 'review', 'date'];
    
}
