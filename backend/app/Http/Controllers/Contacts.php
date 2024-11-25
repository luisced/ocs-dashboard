<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class Contacts extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'RFC' => "required|integer",
            'Name' => "required|email|max:100",
            'Email' => "required|string|max:100",
            'Phone_Number' => 'nullable|string|max:15',
            'Address' => 'nullable|string|max:150',
            'dTimeStamp' => "required|date",

        ]);
        $contact = Contact::create($validated);

        return response()->json($contact, 200);
    }
}
