<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Transmicion;
class TransmissionController extends Controller
{
    public function envivo(){
        $date = Carbon::now()->format('d-m-Y');
        $transmision = Transmicion::first();
        return view('online.online',compact('date','transmision'));
    }

    public function store(Request $request){
        try{
            $transmision = new Transmicion();
            $request['date'] = Carbon::now()->format('Y-m-d');
            $transmision->store($request->all());
            $msj = "La transmision fue agregada correctamente";
            return redirect('/envivo')->with('status_danger',$msj);
        }catch(Exception $e){
            return back()->with('status_danger',"Ocorrio un error en el servidor, Error: ".$e->getMessage());
        }
    }

    public function detener(){
        $transmision = Transmicion::first();
        $transmision->delete();
        return back();
    }
}
