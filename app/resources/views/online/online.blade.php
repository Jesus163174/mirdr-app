@extends('layouts.admin')
@section('title',"Eventos")
@section('content')
<div class="row top-md justify-content-center">
    @if(count($transmision) != 0)
    <div class="col-md-9 ">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h4 class="m-0">{{$transmision->title}} | {{$date}}</h4>
            </div>
            <div class="card-body">
                {!!$transmision->url_video!!}
            </div>
            <div class="card-footer">
                <form action="{{asset('envivo/detener')}}" method="post">
                    @csrf
                    {{method_field('delete')}}
                    <button type="submit" class="btn btn-danger">
                        Detener Transmisión
                    </button>
                </form>
            </div>
        </div>
    </div>
    @else
    <div class="col-md-12">
        <div class="banner">
            <h3> <i class="material-icons">camera_enhance</i> NO HAY TRANSMISIÓN ENVIVO</h3>
            <a data-toggle="modal" style="color:white;" data-target=".bd-example-modal-lg" class="btn btn-dark">AGREGAR</a>
            <form action="{{asset('envivo')}}" method="post">
                @csrf
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="m-0">Agregar una nueva transmisión</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Url del video de facebook</label>
                                    <input type="text" name="url_video" class="form-control form-control-lg" placeholder="Ingresa el url del video" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Titulo de la transmisión</label>
                                    <input type="text" name="title" class="form-control form-control-lg" placeholder="Ingresa el titulo de la transmisión" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif
</div>
@stop