<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = ['title'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
