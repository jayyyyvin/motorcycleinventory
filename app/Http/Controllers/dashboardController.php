<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motorcycle;
use App\Models\User;



class dashboardController extends Controller
{
    public function showDashboard()
    {
        $motorcycleCount = Motorcycle::count();
        $usersCount = User::count();
  
        
        $motorcycle = Motorcycle::all();
   
        return view('dashboard', compact('motorcycleCount','motorcycle','usersCount'));
        
        
    }

}