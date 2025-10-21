<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Photography_sessions;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function customerCount(){
        $customerCount = Customers::count();
        $sessions = Photography_sessions::with('photographer')->get();
        return view('admin/dashboard/dashboard', compact('customerCount', 'sessions'));
    }
}
