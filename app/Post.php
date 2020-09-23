<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    

    public function trending()
    {
        return $this->belongsTo('App\Trending');
    }

    public function categories()
    {
        return $this->belongsTo('App\PostInCategory');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'author_id');
    }
}
