<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    //
    public function adminDashboard(){

        return view('backend.admin_dashboard.admin_dashboard');
    }
}
