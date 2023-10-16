<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procurements;

class procurementController extends Controller
{
    public function index()
   {

    return view('procurements');

   }

   public function store()
    {
        
        $procurements = new Procurements();

        $procurements->email = request('email');
        $procurements->country = request('country');

        $procurements->save();

        error_log($procurements);

        
        return redirect('/');
    }

}
