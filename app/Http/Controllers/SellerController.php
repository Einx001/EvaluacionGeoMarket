<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function create()
    {
        return view('frmSeller');
    }

    // Guardar nueva categoría
    public function store(Request $request)
    {
        $result = new Seller();

        $result->nameSeller = $request->nameSeller;
        $result->descriptionSeller = $request->descriptionSeller;

        $result->Save();

        return view('frmSeller');
    }
}
