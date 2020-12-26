<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use PDF;

class ScheduleController extends Controller
{
    public function __invoke(){
    	$schedules = Cache::remember('schedules', 60, function () {
            return Schedule::all();
        });
        return view('schedule')
            ->with('schedules', $schedules);
    }

    public function index(){
		$schedules = Schedule::all();
		return view('manage-schedule',['schedules' => $schedules]);
	}

	public function add(){
		return view('add-schedule');
	}

	public function create(Request $request){
		Schedule::create([
			'materi' => $request->materi,
			'pemateri' => $request->pemateri,
            'lama_pertemuan' => $request->lama_pertemuan,
            'waktu' => $request->waktu
		]);
		return redirect('/manage-schedule');
	}

	public function edit($id){
		$schedules = Schedule::find($id);
		return view('edit-schedule',['schedules'=>$schedules]);
	}

	public function update($id, Request $request){
		$schedules = Classroom::find($id);
		$schedules->materi = $request->materi;
        $schedules->pemateri = $request->pemateri;
        $schedules->lama_pertemuan = $request->lama_pertemuan;
        $schedules->waktu = $request->waktu;
		
		$schedules->save();
		return redirect('/manage-schedule');
	}

	public function delete($id){
		$schedules = Schedule::find($id);
		$schedules->delete();
		return redirect('/manage-schedule');
	}

	// public function __construct(){
	// 	//$this->middleware('auth');
	// 	$this->middleware(function($request, $next){
	// 		if(Gate::allows('manage-articles')) return $next($request);
	// 		abort(403, 'Anda tidak memiliki cukup hak akses');
	// 	});
	// }

	public function print_pdf(){
		$schedules = Schedule::all();
		$pdf = PDF::loadview('schedules_pdf',['schedules'=>$schedules]);
		return $pdf->stream();
	}
}
