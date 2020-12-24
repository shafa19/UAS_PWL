<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class ClassroomController extends Controller
{
    public function __invoke(){
    	$classrooms = Cache::remember('classrooms', 60, function () {
            return Classroom::all();
        });
        return view('classrooms')
            ->with('classrooms', $classrooms);
    }
}
