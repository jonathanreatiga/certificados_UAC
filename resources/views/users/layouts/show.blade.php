@extends('users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-7 margin-tb"> {{-- col-lg-12 --}}
            <div class="pull-left">
                <h2> Ver Usuario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Regresar</a>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del Usuario:</strong>
                {{ $user->name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido del Usuario:</strong>
                {{ $user->usuarioapellido}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Docuemnto:</strong>
                {{ $user->usuariotipodocumento}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero de Documento</strong>
                {{ $user->usuarionumerodocumento}}
            </div>
        </div>
        {{--  codigo nuevo para mostar las sesiones que tiene cada curso  --}}
        <h4>Informacion de Usuario asociada a la tabla Matricula:</h4>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <table class="table">
                        <thead>
                            <tr> 
                                <th>Id de la tabla Matricula</th>
                                <th>Numero de Descargas</th>
                                <th>Sesiones</th>
                            </tr>
                        </thead>
                        <tbody class="buscar">
                            @foreach ($matriculas as $matricula)
                                <tr>
                                    <td>{{$matricula->id}}</td>
                                    <td>{{ $matricula->matriculadescargas}}</td>
                                    <td>{{ $matricula->sesiones->sesionfechainicio}} -- {{$matricula->sesiones->sesionfechafinal}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
        {{--  Fin  --}}
    </div>
@endsection