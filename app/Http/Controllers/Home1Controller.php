<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home1Controller extends Controller
{
    public function home(){
        return view ('home1');
    }
}
