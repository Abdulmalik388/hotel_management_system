<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    
public function index()
{
    $contacts = ContactInfo::latest()->get();
    return view('admin.contact.index', compact('contacts'));
}

public function deleteContact($id)
{
    $contact = ContactInfo::findOrFail($id);
    $contact->delete();

    return redirect()->back()->with('success', 'Message deleted successfully.');
}

}
