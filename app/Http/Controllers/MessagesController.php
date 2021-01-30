<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'message' => 'required',
            ]);
            
        $messages= new Messages();
        $messages->name= $request['name'];
        $messages->message= $request['message'];
        // add other fields
        $messages->save();

        return redirect('/');
        // dd($validated);
    }
    
        
    //     public function withValidator($validator)
        //     {
        //         $validator->after(function ($validator) {
        //             if ($this->somethingElseIsInvalid()) {
        //                 $validator->errors()->add('field', 'Something is wrong with this field!');
        //             }
        //         });
        //     }
}
