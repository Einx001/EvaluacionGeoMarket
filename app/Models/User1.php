<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    public function rol()
    {
        return $this->belongsTo('App\Models\rol');
    }

    public function sellers(){
        return $this->hasMany('App\Models\seller');
    }

    public function chatSupport(){
        return $this->hasMany('App\Models\chatsupport');
    }

    public function images(){
        return $this->hasMany('App\Models\images');
    }

    public function complaints(){
        return $this->hasMany('App\Models\complaint');
    }
    public function comments(){
        return $this->hasMany('App\Models\comments');
    }

    public function publications(){
        return $this->belongsToMany('App\Models\publications');
    }
}
