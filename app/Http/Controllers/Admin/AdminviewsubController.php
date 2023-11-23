<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminViewsub;
use DB;

class AdminviewsubController extends Controller
{
    public function index()
    {
        

        $admin_procurements = DB::table('admin_procurements')->get();

        return view('admin.viewsubmission', ['admin_procurements' => $admin_procurements]);
    }
}
