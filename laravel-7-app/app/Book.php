<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // fillable properties
    protected $fillable = [
        'title',
        'author',
        'language',
        'year_published',
        'isbn'
    ];
}
