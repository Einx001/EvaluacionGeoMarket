<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatSupport;

class ChatSupportController extends Controller
{
    public function create()
    {
        return view('frmChatSupport');
    }

    // Guardar nueva categoría
    public function store(Request $request)
    {
        $result = new ChatSupport();

        $result->messageChat = $request->messageChat;

        $result->Save();

        return view('frmChatSupport');
    }
}
