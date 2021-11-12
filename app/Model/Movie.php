<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'description', 'director'];
}
