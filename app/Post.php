<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // File: ./app/Post.php
    protected $fillable = ['user_id', 'title', 'body', 'image'];
       // File: ./app/Post.php
       public function user()
       {
           return $this->belongsTo(User::class);
       }
}
