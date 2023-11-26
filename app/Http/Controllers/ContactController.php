<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('pages.contactPage');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Your logic to handle the form submission (send email, save to database, etc.) goes here.

        return redirect()->route('contact.form')->with('success', 'Message sent successfully!');
    }
}
