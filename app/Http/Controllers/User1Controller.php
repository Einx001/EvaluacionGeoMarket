<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User1;

class User1Controller extends Controller
{
    public function create()
    {
        return view('frmUser');
    }

    // Guardar nueva categoría
    public function store(Request $request)
    {
        $result = new User1();

        $result->nameUser = $request->nameUser;
        $result->lastNameUser = $request->lastNameUser;

        $result->Save();

        return view('frmUser');
    }
}
