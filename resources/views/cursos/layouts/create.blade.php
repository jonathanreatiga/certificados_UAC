@extends('cursos.layout')


@section('content')

    <div class="row">
        <div class="col-lg-7 margin-tb"> {{-- col-lg-12 --}}
            <div class="pull-left">
                <h2>Crear Nuevo Curso</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Regresar</a>
            </div>
        </div>
    </div>


    {{--  @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors-<all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  --}}


    {!! Form::open(array('route' => 'cursos.store','method'=>'POST')) !!}
         @include('cursos.layouts.form')
    {!! Form::close() !!}


@endsection
