<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class ServiceController extends Controller
{
    public function __invoke(){
    	$services = Cache::remember('services', 60, function () {
            return Service::all();
        });
        return view('services')
            ->with('services', $services);
    }
}
