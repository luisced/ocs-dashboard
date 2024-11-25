<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    // Get all users
    public function index()
    {
        $users = DB::table('users')->get();
        return response()->json($users, 200);
    }
}
