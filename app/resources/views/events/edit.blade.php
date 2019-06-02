@extends('layouts.admin')
@section('title',"Agregar evento")
@section('content')
    <div class="banner">
        <h3>Editar el evento</h3>
        <a href="{{asset('admin/eventos')}}" class="btn btn-dark">Regresar</a>
    </div>
    <div class="row top-md">
        <div class="col-lg-9 col-md-12">
            <form action="{{asset('admin/eventos/'.$event->id)}}" method="post">
                @csrf
                {{method_field('put')}}
                @include('events.form',['button'=>'Editar'])
            </form>
        </div>
        <div class="col-lg-3 col-md-12">
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
                <div class="card-header text-center border-bottom">
                    <h6 class="m-0">Agregar portada</h6>
                </div>
                <div class='card-body p-0'>
                    <ul class="list-group list-group-flush">
                        <img src="{{asset('logo/logo.png')}}" style="width:100%; height:10%; padding:40px;" alt="">
                        <li class="list-group-item d-flex px-3">
                            
                            <button class="btn btn-sm btn-accent ml-auto">
                            <i class="material-icons">file_copy</i> Actualizar</button>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    
@stop