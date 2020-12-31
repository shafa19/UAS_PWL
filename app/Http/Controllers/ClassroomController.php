<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use PDF;

class ClassroomController extends Controller
{
    public function __invoke(){
    	$classrooms = Cache::remember('classrooms', 60, function () {
            return Classroom::all();
        });
        return view('classrooms')
            ->with('classrooms', $classrooms);
    }

    public function index(){
		$classrooms = Classroom::all();
		return view('manage-classroom',['classrooms' => $classrooms]);
	}

	public function add(){
		return view('add-classroom');
	}

	public function create(Request $request){
		if($request->file('ruang_pic')){
			$ruang_pic = $request->file('ruang_pic')->store('images','public');
		}
		Classroom::create([
			'nama_ruang' => $request->nama_ruang,
			'kapasitas' => $request->kapasitas,
			'ruang_pic' => $ruang_pic,
		]);
		return redirect('/manage-classroom');
	}

	public function edit($id){
		$classrooms = Classroom::find($id);
		return view('edit-classroom',['classrooms'=>$classrooms]);
	}

	public function update($id, Request $request){
		$classrooms = Classroom::find($id);
		$classrooms->nama_ruang = $request->nama_ruang;
		$classrooms->kapasitas = $request->kapasitas;
		
		if($classrooms->ruang_pic && file_exists(storage_path('app/public/'.$classrooms->ruang_pic))){
			\Storage::delete('public/'.$classrooms->ruang_pic);
		}
		$ruang_pic = $request->file('ruang_pic')->store('images','public');
		$classrooms->ruang_pic = $ruang_pic;

		$classrooms->save();
		return redirect('/manage-classroom');
	}

	public function delete($id){
		$classrooms = Classroom::find($id);
		$classrooms->delete();
		return redirect('/manage-classroom');
	}


	public function print_pdf(){
		$classrooms = Classroom::all();
		$pdf = PDF::loadview('classrooms_pdf',['classrooms'=>$classrooms]);
		return $pdf->stream();
	}
}
