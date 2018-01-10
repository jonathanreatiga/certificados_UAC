@extends('estados.layout')

@section('content')
    <div class="row">
        <div class="col-lg-7 margin-tb"> {{-- col-lg-12 --}}
            <div class="pull-left">
                <h2> Ver Estados</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('estados.index') }}"> Regresar</a>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del Estado:</strong>
                {{ $estado->estadonombre}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion del Estado:</strong>
                {{ $estado->estadodescripcion}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creado:</strong>
                {{ $estado->created_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ultima Modificacion:</strong>
                {{ $estado->updated_at}}
            </div>
        </div>

        {{--  codigo nuevo para mostar las matriculas que tiene cada estado  --}}
        <h4>Informacion de Estado asociada a la tabla Matriculas:</h4>
        @foreach ($matriculas as $matricula)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id de la tabla Matricula:</strong>
                    {{$matricula->id}}
                </div>
            </div>
        @endforeach
        {{--  Fin  --}}

    </div>
@endsection