@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de archivos</h3>
                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Tamaño</th>
                            <th>Extensión</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($files as $file)
                        <tr>
                            <td>{{ $file->id }}</td>
                            <td>{{ $file->name }}</td>
                            <td>{{ $file->sizeInKb }} KB</td>
                            <td>{{ $file->extension }}</td>
                            <td>
                                <a href="{{ $file->public_url }}" target="_blank">
                                    Enlace público
                                </a>
                                <a href="{{ route('files.download', $file) }}">
                                    Descargar
                                </a>
                                <form action="{{ route('files.destroy', $file) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data" class="container">
    @csrf
    <input type="file" name="file" required>    
    <button type="submit">Agregar nuevo archivo</button>
</form>

@stop