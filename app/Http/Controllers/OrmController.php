<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\ChatSupport;
use App\Models\Comment;
use App\Models\Complaint;
use App\Models\Image;
use App\Models\Publication;
use App\Models\Rol;
use App\Models\Seller;
use App\Models\User1;

class OrmController extends Controller
{
    public function consulta()
    {
        $user = User1::find(1);
        //$users = User::all();

        return $user->publications;
    }
}
