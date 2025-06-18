<?php

// app/Http/Controllers/BookingController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'guests' => 'required|integer',
            'rooms' => 'required|integer',
        ]);

        Booking::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'check_in' => $validated['check_in'],
            'check_out' => $validated['check_out'],
            'guests' => $validated['guests'],
            'rooms' => $validated['rooms'],
            'status' => 'pending', // default
        ]);

        return redirect()->back()->with('success', 'Booking submitted successfully!');
    }
}


