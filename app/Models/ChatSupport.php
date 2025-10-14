<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatSupport extends Model
{
    public function user1()
    {
        return $this->belongsTo('App\Models\user1');
    }
}
