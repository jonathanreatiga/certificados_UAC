@extends('layouts.material-dashboard')

@section('content')

    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header" data-background-color="green">
                    <h4 class="title">Crear Cursos</h4>
                </div>
                <div class="card-content col-md-12">
                    <h4 class="title">Crear acá Cursos</h4>

                     @include('cursos.layouts.create-curso')

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="green">
                    <h4 class="title">Opciones Cursos</h4>
                </div>
                <div class="card-content">
                    <h4 class="title">Crear acá Cursos</h4>
                </div>
            </div>
        </div>
    </div>


@endsection
