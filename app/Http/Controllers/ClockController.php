<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClockController extends Controller
{
    //
    public function index(){
    // Use JavaScript to update the time every second

        return view('clock');
    }

}
