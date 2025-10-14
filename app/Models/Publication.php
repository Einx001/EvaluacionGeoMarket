<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public function seller()
    {
        return $this->belongsTo('App\Models\seller');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\category');
    }
    public function complaints(){
        return $this->hasMany('App\Models\complaint');
    }
    public function comments(){
        return $this->hasMany('App\Models\comments');
    }

    public function user1s()
    {
        return $this->belongsToMany('App\Models\user1');
    }
}
