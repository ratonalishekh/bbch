<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logoController extends Controller
{
    //
    public function create(){
        return view('backend.logo.logo');
    }
}
