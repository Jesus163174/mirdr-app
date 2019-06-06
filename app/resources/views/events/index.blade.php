@extends('layouts.admin')
@section('title',"Eventos")
@section('content')
    <div class="banner">
        <h3><i class="material-icons">event</i> EVENTOS ({{$events->total()}})</h3>
       <a href="{{asset('admin/eventos/create')}}" class="btn btn-dark">AGREGAR EVENTO</a>
    </div>
    <div class="row top-md">
        <div class="col-md-12">
            <form action="" method="get">
                <input type="text" class="form-control form-control-lg mb-3" placeholder="Ingresa el nombre del evento a buscar">
            </form>
        </div>
    </div>
    <div class="row top-md">
        @foreach($events as $event)        
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--1">
                    <div class="card-post__image" style="background-image: url('{{asset('logo/logo.png')}}');">
                        <a href="#" class="card-post__category badge badge-pill badge-dark">{{$event->day}}</a>
                        <div class="card-post__author d-flex">
                            <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('{{asset('logo/logo.png')}}');">Written by Anna Kunis</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a class="text-fiord-blue" href="#">
                                {{$event->title}} 
                                @if($event->type == 'especial')
                                    <i class="material-icons" style="color:black !important;">star</i>
                                @endif
                            </a>
                        </h5>
                        <p class="card-text d-inline-block mb-3">{{$event->litleDescription}}</p>
                        <!--Only special events-->
                        <!--<span class="text-muted">28 February 2019</span>-->
                    </div>
                    <div class="card-footer">
                        <a href="{{asset('/admin/eventos/'.$event->id.'/edit')}}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{asset('/admin/eventos/'.$event->id)}}" class="form-line" method="post">
                            @csrf
                            {{method_field('delete')}}
                            <button class="btn btn-danger color-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{$events->links()}}
@stop