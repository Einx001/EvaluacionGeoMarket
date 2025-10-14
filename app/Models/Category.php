<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function publication(){
        return $this->hasMany('App\Models\publication');
    }
}
