<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
   public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        \App\Models\ContactInfo::create($validated);

        return redirect('/')->with('success', 'Your message has been sent successfully!');
    }
}
