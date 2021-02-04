<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{
    public function index()
    {
        return view('messages.index', [
            'messages' => \App\Models\Message::latest()->paginate(7)]);
    }

    public function show(Message $message)
    {
        return view('messages.show', ['message' => $message]);
    }

    public function store(Request $request)
    {
        Message::create(request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|max:255',
            'newsletter' => 'sometimes',
            ]));
        
        return redirect()->back();
    }

    public function destroy(Message $message)
    {
        if (empty($message)) {
            abort(404);
        }

        $message->delete();

        return redirect()->back();
    }
}
