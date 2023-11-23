<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Viewsub;
use DB;





class viewsubcontroller extends Controller
{
    public function index()
    {
        //return view('viewsubmission');
        $procurements = DB::table('procurements')->get();

        return view('viewsubmission', ['procurements' => $procurements]);
    }

    public function show()
    {
        //$procurements = 'procurements';

        //return view('viewsubmission', compact('viewsubmission'));

        //$procurements = DB::table('procurements')->get();

        //return view('viewsubmission');
    }
}
