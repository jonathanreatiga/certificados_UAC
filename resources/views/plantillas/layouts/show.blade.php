@extends('plantillas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-7 margin-tb"> {{-- col-lg-12 --}}
            <div class="pull-left">
                <h2> Ver Plantillas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('plantillas.index') }}"> Regresar</a>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre de la Plantilla:</strong>
                {{ $plantilla->plantillanombre}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Plantilla html:</strong>
                {{ $plantilla->plantillahtml}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Plantilla Css:</strong>
                {{ $plantilla->plantillacss}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion de Plantilla:</strong>
                {{ $plantilla->plantilladescripcion}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Orientacion Plantilla:</strong>
                {{ $plantilla->plantillaorientacion}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Formato de Plantilla:</strong>
                {{ $plantilla->plantillaformato}}
            </div>
        </div>

    </div>
@endsection