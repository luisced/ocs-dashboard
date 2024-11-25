<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class Types extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            "Type_Name" => "required|string|max:50",
        ]);
        $type = Type::create($validated);
        return response()->json(["id" => $type->id, "data" => $type], 200);
    }
}
