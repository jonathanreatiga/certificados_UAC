@extends('sesiones.layout')
@section('content')
    <div class="row">
        <div class="col-lg-7 margin-tb"> {{-- col-lg-12 --}}
            <div class="pull-left">
                <h2>Editar Sesion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sesiones.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
    {{--  @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  --}}
    {!! Form::model($sesiones, ['method' => 'PATCH','route' => ['sesiones.update', $sesiones->id]]) !!}
        @include('sesiones.layouts.form')
    {!! Form::close() !!}
@endsection
