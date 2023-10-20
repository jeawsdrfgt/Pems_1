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

        $procurements->name = request('name');
        $procurements->department_name = request('dept_name');
        $procurements->item_name = request('item_name');
        $procurements->quantity = request('quantity');
        $procurements->budget = request('budget');
        $procurements->description = request('description');

        $procurements->save();

        error_log($procurements);

        
        return redirect('/');
    }

}
