<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class MainCourseController extends Controller
{
    public function __invoke(){
    	$courses = Cache::remember('courses', 60, function () {
            return Course::all();
        });
        return view('main-course')
            ->with('courses', $courses);
    }
}
