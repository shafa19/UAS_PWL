<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class Home2Controller extends Controller
{
    public function home(){
        return view ('home2');
    }

    public function manage(){
        return view ('manage-dashboard');
    }

    public function daftarsukses(){
        return view ('daftar');
    }
}
