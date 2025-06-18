<?php

namespace App\Http\Controllers;
use App\Models\Room;  
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
{
    $rooms = Room::latest()->take(6)->get(); // Fetch 3 latest rooms
    return view('pages.home', compact('rooms'));
}

    public function contact()
    {
        return view('pages.contact');
    }
      public function about()
    {
        return view('pages.about');
    }
       public function room()
    {
        $rooms = Room::where('status', 'available')->get();
    return view('pages.rooms', compact('rooms'));
    }
    public function booking()
    {
        return view('pages.booking');
    }
     public function terms()
    {
        return view('pages.terms');
    }
     public function privacy()
    {
        return view('pages.privacy');
    }
}
