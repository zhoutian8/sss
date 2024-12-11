<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'excerpt', 'cover_image'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
