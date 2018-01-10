@extends('matriculas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-7 margin-tb"> {{-- col-lg-12 --}}
            <div class="pull-left">
                <h2> Ver Matriculas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('matriculas.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descargas:</strong>
                {{ $matriculas->matriculadescargas}}
            </div>
        </div>
        {{--  codigo nuevo para mostar el curso de la sesion  --}}
        <h4>Informacion de Sesiones:</h4>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id en la tabla Sesiones:</strong>
                    @isset($matriculas->sesiones_id)
                    <td>{{ $matriculas->sesiones_id}}</td>
                    @else
                    <td>-- Sin Sesion asociado --</td>
                    @endisset
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha inicio:</strong>
                    @isset($matriculas->sesiones->sesionfechainicio)
                    <td>{{ $matriculas->sesiones->sesionfechainicio}}</td>
                    @else
                    <td>-- Sin Sesion asociado --</td>
                    @endisset
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>fecha fin:</strong>
                    @isset($matriculas->sesiones->sesionfechafinal)
                    <td>{{ $matriculas->sesiones->sesionfechafinal}}</td>
                    @else
                    <td>-- Sin Sesion asociado --</td>
                    @endisset
                </div>
            </div>
        {{--  Fin  --}}
        {{--  codigo nuevo para mostar la plantilla de la sesion  --}}
        <h4>Informacion de Rol:</h4>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id en la tabla Rol:</strong>
                @isset($matriculas->rol_id)
                <td>{{ $matriculas->rol_id}}</td>
                @else
                <td>-- Sin Rol asociada --</td>
                @endisset
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del Rol:</strong>
                @isset($matriculas->rol->rolnombre)
                <td>{{ $matriculas->rol->rolnombre}}</td>
                @else
                <td>-- Sin Rol asociada --</td>
                @endisset
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cargo del Rol:</strong>
                @isset($matriculas->rol->rolcargo)
                <td>{{ $matriculas->rol->rolcargo}}</td>
                @else
                <td>-- Sin Rol asociada --</td>
                @endisset
            </div>
        </div>
    {{--  Fin  --}}
     {{--  codigo nuevo para mostar la plantilla de la sesion  --}}
     <h4>Informacion de Estados:</h4>
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
             <strong>Id en la tabla Estado:</strong>
             @isset($matriculas->estados_id)
             <td>{{ $matriculas->estados_id}}</td>
             @else
             <td>-- Sin Estado asociada --</td>
             @endisset
         </div>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
             <strong>Nombre del Estado:</strong>
             @isset($matriculas->estados->estadonombre)
             <td>{{ $matriculas->estados->estadonombre}}</td>
             @else
             <td>-- Sin Estado asociada --</td>
             @endisset
         </div>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
             <strong>Descripcion Estado:</strong>
             @isset($matriculas->estados->estadodescripcion)
             <td>{{ $matriculas->estados->estadodescripcion}}</td>
             @else
             <td>-- Sin Estado asociada --</td>
             @endisset
         </div>
     </div>
 {{--  Fin  --}}
    </div>
@endsection