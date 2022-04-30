<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotline;


class hotlineController extends Controller
{
    //
    public function create(){

        return view('backend.hotline.hotline');
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
          'hotline' => 'required',
          'datetime' => 'required',
        ]);
 
        $Hotlines = new Hotline;
 
        $Hotlines->hotline = $request->hotline;
        $Hotlines->datetime = $request->datetime;
 
        $Hotlines->save();
 
        return redirect('hotline/create')->with('status', 'Data Created Sucessfully');

    }
}
