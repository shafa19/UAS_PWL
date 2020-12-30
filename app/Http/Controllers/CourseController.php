<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use PDF;

class CourseController extends Controller
{
    public function __invoke($id){
    	$courses = Course::find($id);
    	$courses = json_decode(json_encode($courses));
    	return view('course', ['id'=> $id])->with(compact('courses'));
	}
	
	public function index(){
	 	$courses = Course::all();
	 	return view('manage-course',['courses' => $courses]);
	 }

	 public function add(){
		return view('add-course');
	}

	public function create(Request $request){
		if($request->file('course_pic')){
			$course_pic = $request->file('course_pic')->store('images','public');
		}
		Course::create([
			'nama_course' => $request->nama_course,
			'short_desc' => $request->short_desc,
			'long_desc' => $request->long_desc,
			'harga' => $request->harga,
			'course_pic' => $course_pic
		]);
		return redirect('/manage-course');
	}

	public function edit($id){
		$courses = Course::find($id);
		return view('edit-course',['courses'=>$courses]);
	}

	public function update($id, Request $request){
		$courses = Course::find($id);
		$courses->nama_course = $request->nama_course;
		$courses->short_desc = $request->short_desc;
		$courses->long_desc = $request->long_desc;
		$courses->harga = $request->harga;

		if($courses->course_pic && file_exists(storage_path('app/public/'.$courses->course_pic))){
			\Storage::delete('public/'.$courses->course_pic);
		}
		$course_pic = $request->file('course_pic')->store('images','public');
		$courses->course_pic = $course_pic;

		$courses->save();
		return redirect('/manage-course');
	}

	public function delete($id){
		$courses = Course::find($id);
		$courses->delete();
		return redirect('/manage-course');
	}

	

	public function print_pdf(){
		$courses = Course::all();
		$pdf = PDF::loadview('courses_pdf',['courses'=>$courses]);
		return $pdf->stream();
	}
}
