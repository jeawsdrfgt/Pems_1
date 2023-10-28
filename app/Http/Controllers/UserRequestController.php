<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRequestController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('user', compact('user'));
    }
}

