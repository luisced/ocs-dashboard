<?php

namespace App\Http\Controllers;

use App\Models\SocialNetwork as ModelsSocialNetwork;
use Illuminate\Http\Request;

class SocialNetwork extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            "User" => "required|string|max:100",
            "Social_Network" => "required|string|max:30"
        ]);
        $socialN = ModelsSocialNetwork::create($validated);
        return response()->json(["id" => $socialN->id, "data" => $socialN], 200);
    }
}
