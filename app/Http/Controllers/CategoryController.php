<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('frmCategory');
    }

    // Guardar nueva categoría
    public function store(Request $request)
    {
        $nameCategory = $request->nameCategory;

        $result = new Category();

        $result->nameCategory=$request->nameCategory;

        $result->Save();

        echo "La categoria ingresada es: $nameCategory y ha quedado guardada <br>";

        return view('frmCategory');
    }
}
