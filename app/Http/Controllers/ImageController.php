<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class ImageController extends Controller
{
    public function create()
    {
        return view('frmImage');
    }

    // Guardar nueva categoría
    public function store(Request $request)
    {
        $result = new Image();

        $result->urlImage = $request->urlImage;

        $result->Save();

        return view('frmImage');
    }
}
