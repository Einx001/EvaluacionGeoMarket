<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public function user1()
    {
        return $this->belongsTo('App\Models\user1');
    }

    public function publication(){
        return $this->hasMany('App\Models\publication');
    }
}
