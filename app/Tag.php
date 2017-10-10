<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // lesson 30
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    // lesson 31
    public function getRouteKeyName()
    {
    	return 'name';
    }
}
