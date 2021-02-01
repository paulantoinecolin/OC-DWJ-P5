<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        Message::create(request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'message' => 'required',
            'newsletter' => 'sometimes',
            ]));
        
        return redirect('/');
    }
}
