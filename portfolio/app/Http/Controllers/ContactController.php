<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageReceived;

class ContactController extends Controller
{
    // Display the contact form
    public function index()
    {
        return view('contact'); // Ensure this view exists
    }

    // Handle the form submission
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send an email with the message details
        Mail::to('hiranmoyeedehingia@gmail.com')->send(new ContactMessageReceived($request->all()));

        // Flash success message to session
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}

?>
