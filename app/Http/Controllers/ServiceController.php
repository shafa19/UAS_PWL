<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use PDF;

class ServiceController extends Controller
{
    public function __invoke(){
    	$services = Cache::remember('services', 60, function () {
            return Service::all();
        });
        return view('services')
            ->with('services', $services);
    }

    public function index(){
		$services = Service::all();
		return view('manage-service',['services' => $services]);
	}

	public function add(){
		return view('add-service');
	}

	public function create(Request $request){
		if($request->file('service_pic')){
			$course_pic = $request->file('service_pic')->store('images','public');
		}
		Service::create([
			'nama_service' => $request->nama_service,
			'keterangan' => $request->keterangan,
			'service_pic' => $service_pic
		]);
		return redirect('/manage-service');
	}

	public function edit($id){
		$services = Service::find($id);
		return view('edit-service',['services'=>$services]);
	}

	public function update($id, Request $request){
		$services = Service::find($id);
		$services->nama_service = $request->nama_service;
		$services->keterangan = $request->keterangan;

		if($services->service_pic && file_exists(storage_path('app/public/'.$services->service_pic))){
			\Storage::delete('public/'.$services->service_pic);
		}
		$services = $request->file('service_pic')->store('images','public');
		$services->service_pic = $service_pic;

		$services->save();
		return redirect('/manage-service');
	}

	public function delete($id){
		$services = Service::find($id);
		$services->delete();
		return redirect('/manage-service');
	}

	// public function __construct(){
	// 	//$this->middleware('auth');
	// 	$this->middleware(function($request, $next){
	// 		if(Gate::allows('manage-articles')) return $next($request);
	// 		abort(403, 'Anda tidak memiliki cukup hak akses');
	// 	});
	// }

	public function print_pdf(){
		$services = Service::all();
		$pdf = PDF::loadview('services_pdf',['services'=>$services]);
		return $pdf->stream();
	}
}
