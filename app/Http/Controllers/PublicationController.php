<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function create()
    {
        return view('frmPublication');
    }

    // Guardar nueva categoría
    public function store(Request $request)
    {
        $result = new Publication();

        $result->titlePublication = $request->titlePublication;

        $result->Save();

        return view('frmPublication');
    }
}
