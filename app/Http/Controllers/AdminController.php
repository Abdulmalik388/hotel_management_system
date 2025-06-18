<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
    use App\Models\Room;


class AdminController extends Controller
{
    // View all bookings (only accessible when admin is logged in)
  public function viewBookings()
{
    $bookings = \App\Models\Booking::all();
    return view('admin.bookings.index', compact('bookings'));
}

public function confirmBooking($id)
{
    $booking = \App\Models\Booking::findOrFail($id);
    $booking->status = 'confirmed';
    $booking->save();
    return back()->with('success', 'Booking confirmed.');
}

public function cancelBooking($id)
{
    $booking = \App\Models\Booking::findOrFail($id);
    $booking->status = 'cancelled';
    $booking->save();
    return back()->with('success', 'Booking cancelled.');
}

public function deleteBooking($id)
{
    $booking = \App\Models\Booking::findOrFail($id);
    $booking->delete();
    return back()->with('success', 'Booking deleted.');
}

public function confirmedBookings()
{
    $bookings = \App\Models\Booking::where('status', 'confirmed')->latest()->get();
    return view('admin.bookings.confirmed', compact('bookings'));
}

public function cancelledBookings()
{
    $bookings = \App\Models\Booking::where('status', 'cancelled')->latest()->get();
    return view('admin.bookings.cancelled', compact('bookings'));
}
public function logout()
    {
        Session::forget('admin_id');
        return redirect(route('pages.welcome'))->with('success', 'Logged out successfully.');
    }

public function addRoomForm()
{
    return view('admin.rooms.create');
}

public function storeRoom(Request $request)
{
    $request->validate([
        'room_number' => 'required|string|max:20',
        'room_type' => 'required|string|max:50',
        'status' => 'required|in:available,booked',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $data = $request->only(['room_number', 'room_type', 'status', 'price']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('rooms', 'public');
    }

    Room::create($data);

    return redirect()->route('admin.rooms')->with('success', 'Room added successfully!');
}

public function rooms()
{
    $rooms = Room::all(); // Fetch all rooms
    return view('admin.rooms.index', compact('rooms'));
}

public function editRoom($id) {
    $room = Room::findOrFail($id);
    return view('admin.rooms.edit', compact('room'));
}

public function updateRoom(Request $request, $id) {
    $room = Room::findOrFail($id);
    
    $validated = $request->validate([
        'room_number' => 'required|unique:rooms,room_number,' . $id,
        'room_type' => 'required',
        'status' => 'required',
        'price' => 'required|numeric',
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('rooms', 'public');
        $room->image = $path;
    }

    $room->update([
        'room_number' => $validated['room_number'],
        'room_type' => $validated['room_type'],
        'status' => $validated['status'],
        'price' => $validated['price'],
    ]);

    $room->save();

    return redirect()->route('admin.rooms')->with('success', 'Room updated successfully.');
}

public function deleteRoom($id) {
    $room = Room::findOrFail($id);
    $room->delete();

    return back()->with('success', 'Room deleted successfully.');
}
}
