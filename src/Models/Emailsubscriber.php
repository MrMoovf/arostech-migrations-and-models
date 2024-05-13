<?php

namespace Arostech\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emailsubscriber extends Model
{
    use HasFactory;
    protected $fillable = ['email','consent'];
}
