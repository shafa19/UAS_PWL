<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use PDF;

class StudentController extends Controller
{
    public function index(){
		$students = Student::all();
		return view('manage-student',['students' => $students]);
	}

	public function add(){
		return view('add-student');
	}

	public function create(Request $request){
		Student::create([
			'nama_siswa' => $request->nama_siswa,
			'jk' => $request->jk,
			'usia' => $request->usia,
            'alamat' => $request->alamat,
            'email' => $request->email,
			'no_telp' => $request->no_telp,
			'pilihankursus' => $request->pilihankursus,
		]);
		return redirect('/success');
	}

	public function edit($id){
		$students = Student::find($id);
		return view('edit-student',['students'=>$students]);
	}

	public function update($id, Request $request){
		$students = Student::find($id);
		$students->nama_siswa = $request->nama_siswa;
		$students->jk = $request->jk;
		$students->usia = $request->usia;
        $students->alamat = $request->alamat;
        $students->email = $request->email;
		$students->no_telp = $request->no_telp;
		$students->pilihankursus = $request->pilihankursus;

		$students->save();
		return redirect('/manage-student');
	}

	public function delete($id){
		$students = Student::find($id);
		$students->delete();
		return redirect('/manage-student');
	}

	

	public function print_pdf(){
		$students = Student::all();
		$pdf = PDF::loadview('students_pdf',['students'=>$students]);
		return $pdf->stream();
	}
}
