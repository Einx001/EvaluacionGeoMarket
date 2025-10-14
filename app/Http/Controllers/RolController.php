<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;
class RolController extends Controller
{
    public function create()
    {
        return view('frmRol');
    }

    // Guardar nueva categoría
    public function store(Request $request)
    {
        $result = new Rol();

        $result->permisionsRol = $request->permisionsRol;
        $result->nameRol = $request->nameRol;

        $result->Save();

        return view('frmRol');
    }
}
