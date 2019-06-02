<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventController extends Controller{

    public function index(){
        $status = 'active';
        $events = Event::event($status)->paginate(10);
        return view('events.index',compact('events'));
    }
    public function create(){
        $event = new Event();
        return view('events.create',compact('event'));
    }
    public function store(Request $request){
        try{
            
            $event = new Event();
            $event = $event->store($request->all());
            $msj = "El evento ".$event->title." a sido almacenado correctamente";
            return redirect('/admin/eventos')->with('status_success',$msj);
        }catch(Exception $e){
            $msj = "Ups, Ocurrio un error en el servidor, Error: ".$e->getMessage();
            return back()->with('status_danger',$msj);
        }
    }
    public function show($id){
        //
    }
    public function edit($id){
        $event = Event::find($id);
        return view('events.edit',compact('event'));
    }
    public function update(Request $request, $id){
        try{
            $event = Event::find($id);
            $event->edit($event,$request->all());
            $msj = "El evento fue actualizado correctamente";
            return redirect('/admin/eventos')->with('status_success',$msj);
        }catch(Exception $e){
            $msj = "Ups, Ocurrio un error en el servidor, Error: ".$e->getMessage();
            return back()->with('status_danger',$msj);
        }
    }
    public function destroy($id){
        $event = Event::find($id);
        $event->delete();
        return redirect('/admin/eventos');
    }
}
