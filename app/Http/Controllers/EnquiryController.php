<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function showForm()
    {
        return view('enquiry');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // You can send an email, save to DB, etc. Here we just return back with success.
        return back()->with('success', 'Enquiry submitted successfully!');
    }
}