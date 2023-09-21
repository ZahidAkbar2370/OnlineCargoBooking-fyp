<?php

namespace App\Http\Controllers;

use App\Models\Contact_messages;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function messages(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $messages = new Contact_messages;
        $messages->name = $request->name;
        $messages->email = $request->email;
        $messages->phone = $request->phone;
        $messages->message = $request->message;
        $messages->save();
        session()->flash('success', 'Message sent');


        return  redirect()->back();
    }
}
