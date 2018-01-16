@extends('cursos.layout')
@section('content')
    <div class="row">
        <div class="col-lg-7 margin-tb"> {{-- col-lg-12 --}}
            <div class="pull-left">
                <h2> Ver Curso</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del Curso:</strong>
                {{ $curso->cursonombre}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion del Curso:</strong>
                {{ $curso->cursodescripcion}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>N° de Horas:</strong>
                {{ $curso->cursonumerohoras}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creado:</strong>
                {{ $curso->created_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ultima Modificacion:</strong>
                {{ $curso->updated_at}}
            </div>
        </div>
        {{--  codigo nuevo para mostar las sesiones que tiene cada curso  --}}
        <h4>Informacion de Curso asociada a la tabla Sesiones:</h4>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <table class="table">
                        <thead>
                            <tr> 
                                <th>Id de la tabla Sesiones</th>
                                <th>FechaInicio Secion</th>
                                <th>FechaFinal Secion</th>
                            </tr>
                        </thead>
                        <tbody class="buscar">
                            @foreach ($sesiones as $sesion)
                                <tr>
                                    <td>{{$sesion->id}}</td>
                                    <td>{{ $sesion->sesionfechainicio}}</td>
                                    <td>{{ $sesion->sesionfechafinal}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
        {{--  Fin  --}}
    </div>
@endsection