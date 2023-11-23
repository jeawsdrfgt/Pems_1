<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSubmissionController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
