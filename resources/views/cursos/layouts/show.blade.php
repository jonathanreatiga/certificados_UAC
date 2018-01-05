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
        @foreach ($sesiones as $sesion)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id de la tabla Sesiones:</strong>
                {{$sesion->id}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FechaInicio Secion:</strong>
                {{ $sesion->sesionfechainicio}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FechaFinal Secion:</strong>
                {{ $sesion->sesionfechafinal}}
            </div>
        </div>
        @endforeach
        {{--  Fin  --}}

    </div>
@endsection