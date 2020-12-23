<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function __invoke($id){
    	$courses = Course::find($id);
    	$courses = json_decode(json_encode($courses));
    	return view('course', ['id'=> $id])->with(compact('courses'));
	}
	
	// public function index(){
	// 	$courses = Course::all();
	// 	return view('manage',['courses' => $courses]);
	// }
}
