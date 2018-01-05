@extends('sesiones.layout')

@section('content')
    <div class="row">
        <div class="col-lg-7 margin-tb"> {{-- col-lg-12 --}}
            <div class="pull-left">
                <h2> Ver Sesiones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sesiones.index') }}"> Regresar</a>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nicio de Sesion:</strong>
                {{ $sesiones->sesionfechainicio}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fin de Sesion:</strong>
                {{ $sesiones->sesionfechafinal}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creado:</strong>
                {{ $sesiones->created_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ultima Modificacion:</strong>
                {{ $sesiones->updated_at}}
            </div>
        </div>

        {{--  codigo nuevo para mostar el curso de la sesion  --}}
        <h4>Informacion de Sesion asociado a la tabla Curso:</h4>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id en la tabla curso:</strong>
                    {{ $sesiones->curso_id}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre del Curso:</strong>
                    {{ $sesiones->curso->cursonombre}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripcion del Curso:</strong>
                    {{ $sesiones->curso->cursodescripcion}}
                </div>
            </div>
        {{--  Fin  --}}

    </div>
@endsection