@extends('roles.layout')

@section('content')
    <div class="row">
        <div class="col-lg-7 margin-tb"> {{-- col-lg-12 --}}
            <div class="pull-left">
                <h2> Ver Roles</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Regresar</a>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del Rol:</strong>
                {{ $roles->cursonombre}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion del Cargo:</strong>
                {{ $roles->rolcargo}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creado:</strong>
                {{ $roles->created_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ultima Modificacion:</strong>
                {{ $roles->updated_at}}
            </div>
        </div>
        {{--  codigo nuevo para mostar las matriculas que tiene cada role  --}}
        <h4>Informacion de Rol asociada a la tabla Matriculas:</h4>
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <table class="table">
                            <thead>
                                <tr> 
                                    <th>Id de la tabla Matricula</th>
                                </tr>
                            </thead>
                            <tbody class="buscar">
                                @foreach ($matriculas as $matricula)
                                    <tr>
                                        <td>{{$matricula->id}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        {{--  Fin  --}}
    </div>
@endsection