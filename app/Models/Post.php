<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user () {
        return $this->belongsTo(User::class);
    }

    public function tag () {
        return $this->belongsToMany(Tag::class, 'tagpost', 'tag_id');
    }
    public function category () {
        return $this->belongsTo(Category::class);
    }
    public function comment () {
        return $this->belongsTo(Comment::class);
    }
}
