<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostInCategory extends Model
{
    public function posts()
    {
        return $this->HasMany('App\Post');
    }
}
