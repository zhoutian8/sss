<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'book_id', 'content'];

    // 关联到用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 关联到书籍
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
