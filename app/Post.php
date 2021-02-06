<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
       // File: ./app/Post.php
       public function user()
       {
           return $this->belongsTo(User::class);
       }
}
