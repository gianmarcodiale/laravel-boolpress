<?php

namespace App\Http\Controllers;

use App\Mail\AdminContactMessage;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Mail\ContactMessageConfirmation;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function index()
    {
        return view('guest.message-confirmation');
    }



    public function store(Request $request)
    {
        //
        // ddd($request->all());
        // Save data in a variable
        $data = $request->all();
        // Create message instance
        $message = Message::create($data);
        
        // Send email to admin
        Mail::to('admin@example.com')->send(new AdminContactMessage($message));
        // Send email copy to user 
        Mail::to($message->email)->send(new ContactMessageConfirmation($message));
        // Redirect to a GET route
        return redirect()->route('contact.form.index')->with('message', 'Message received');
    }
}
