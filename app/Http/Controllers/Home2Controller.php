<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    public function home(){
        return view ('home2');
    }

    public function manage(){
        return view ('manage-dashboard');
    }
}
