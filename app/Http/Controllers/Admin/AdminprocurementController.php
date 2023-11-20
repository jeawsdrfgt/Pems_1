<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminProcurements;
use Illuminate\Http\Request;

class AdminprocurementController extends Controller
{
    public function index()
    {
 
     return view('admin.procurements');
 
    }
 
    public function store()
     {
         
         $adminprocurements = new AdminProcurements();
 
         $adminprocurements->name = request('name');
         $adminprocurements->department_name = request('dept_name');
         $adminprocurements->item_name = request('item_name');
         $adminprocurements->quantity = request('quantity');
         $adminprocurements->budget = request('budget');
         $adminprocurements->description = request('description');
 
         $adminprocurements->save();
 
         error_log($adminprocurements);
 
         
         return redirect('admin.dashboard');
     }
 
}
