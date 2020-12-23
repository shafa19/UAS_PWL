<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class ScheduleController extends Controller
{
    public function __invoke(){
    	$schedules = Cache::remember('schedules', 60, function () {
            return Schedule::all();
        });
        return view('schedule')
            ->with('schedules', $schedules);
    }
}
