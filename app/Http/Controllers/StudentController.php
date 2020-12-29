<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use Illuminate\Support\Str;
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
        if($request->file('bukti_bayar')){
			$bukti_bayar = $request->file('bukti_bayar')->store('images','public');
		}
		Student::create([
			'nama_siswa' => $request->nama_siswa,
			'jk' => $request->jk,
			'usia' => $request->usia,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'bukti_bayar' => $bukti_bayar
		]);
		return redirect('/course');
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

		if($students->bukti_bayar && file_exists(storage_path('app/public/'.$students->bukti_bayar))){
			\Storage::delete('public/'.$students->bukti_bayar);
		}
		$students = $request->file('bukti_bayar')->store('images','public');
		$students->bukti_bayar = $cbukti_bayar;

		$students->save();
		return redirect('/manage-student');
	}

	public function delete($id){
		$students = Student::find($id);
		$students->delete();
		return redirect('/manage-student');
	}

	// public function __construct(){
	// 	//$this->middleware('auth');
	// 	$this->middleware(function($request, $next){
	// 		if(Gate::allows('manage-articles')) return $next($request);
	// 		abort(403, 'Anda tidak memiliki cukup hak akses');
	// 	});
	// }

	public function print_pdf(){
		$students = Student::all();
		$pdf = PDF::loadview('students_pdf',['students'=>$students]);
		return $pdf->stream();
	}
}
