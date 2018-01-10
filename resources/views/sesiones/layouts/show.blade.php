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
                <strong>Inicio de Sesion:</strong>
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
        {{--  codigo nuevo para mostar las matriculas que tiene cada sesion  --}}
        <h4>Informacion de Sesion asociada a la tabla Matriculas:</h4>
        @foreach ($matriculas as $matricula)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id de la tabla Matriculas:</strong>
                    {{$matricula->id}}
                </div>
            </div>
        @endforeach
        {{--  Fin  --}}
        {{--  codigo nuevo para mostar el curso de la sesion  --}}
        <h4>Informacion de Sesion asociado a la tabla Curso:</h4>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id en la tabla curso:</strong>
                    @isset($sesiones->curso_id)
                    <td>{{ $sesiones->curso_id}}</td>
                    @else
                    <td>-- Sin Curso asociado --</td>
                    @endisset
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre del Curso:</strong>
                    @isset($sesiones->curso->cursonombre)
                    <td>{{ $sesiones->curso->cursonombre}}</td>
                    @else
                    <td>-- Sin Curso asociado --</td>
                    @endisset
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripcion del Curso:</strong>
                    @isset($sesiones->curso->cursodescripcion)
                    <td>{{ $sesiones->curso->cursodescripcion}}</td>
                    @else
                    <td>-- Sin Curso asociado --</td>
                    @endisset
                </div>
            </div>
        {{--  Fin  --}}
        {{--  codigo nuevo para mostar la plantilla de la sesion  --}}
        <h4>Informacion de Sesion asociado a la tabla Plantilla:</h4>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id en la tabla plantilla:</strong>
                @isset($sesiones->plantilla_id)
                <td>{{ $sesiones->plantilla_id}}</td>
                @else
                <td>-- Sin Plantilla asociada --</td>
                @endisset
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre de la Plantilla:</strong>
                @isset($sesiones->plantilla->plantillanombre)
                <td>{{ $sesiones->plantilla->plantillanombre}}</td>
                @else
                <td>-- Sin Plantilla asociada --</td>
                @endisset
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion de la Plantilla:</strong>
                @isset($sesiones->plantilla->plantilladescripcion)
                <td>{{ $sesiones->plantilla->plantilladescripcion}}</td>
                @else
                <td>-- Sin Plantilla asociada --</td>
                @endisset
            </div>
        </div>
    {{--  Fin  --}}
    </div>
@endsection