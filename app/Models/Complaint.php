<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    public function user1()
    {
        return $this->belongsTo('App\Models\user1');
    }
    public function publication()
    {
        return $this->belongsTo('App\Models\publication');
    }
}
