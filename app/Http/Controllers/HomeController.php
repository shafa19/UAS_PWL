<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __invoke(){
    	return view('home');
    }

    public function __construct(){
        $this->middleware('auth');
    }
}
