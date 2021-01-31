<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|max:255',
            'message' => 'required',
            'newsletter' => 'sometimes',
            ]);
            
        $message = new Message();
        $message->name = request('name');
        $message->message = request('message');
        $message->newsletter = request('newsletter');
        $message->save();

        return redirect('/');
    }
}
