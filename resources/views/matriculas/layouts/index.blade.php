@extends('matriculas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Matriculas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('matriculas.create') }}">Crear Nueva Matricula</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
             {{--  buscador:  --}}
             {!! Form::open(['route' => 'matriculas.layouts.index', 'method'=> 'GET', 'class'=> 'navbar-form pull-right']) !!}
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="id_matricula" placeholder="Buscar...">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit"> {{--  <button class="btn btn-default" type="submit">  --}}
                                        <i class="fa fa-search"></i> <!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"-->
                                    </button>
                                </span>
                        </div>
            {!! Form::close() !!}
            {{--  fin del buscador  --}}
        </div>
    </div>
    {{--  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif  --}}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Matricula Descarga</th>  
                        <th>Sesion</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th>Usuario</th>
                        <th class="text-center" width="230px">Action</th>
                    </tr>
                </thead>
                <tbody class="buscar">
                    @foreach ($matriculas as $matricula)
                        <tr>
                            <td class="text-center" >{{ ++$i }}</td>
                            @isset($matricula->matriculadescargas)
                                <td>{{ $matricula->matriculadescargas}}</td>
                            @else
                                <td>-- Sin Matriculas Descargadas --</td>
                            @endisset

                            @isset($matricula->sesiones->sesionfechainicio)
                                <td>{{ $matricula->sesiones->sesionfechainicio}} -- {{ $matricula->sesiones->sesionfechafinal}}</td>
                            @else
                                <td>-- Sin Sesion asociado --</td>
                            @endisset

                            @isset($matricula->rol->rolnombre)
                                <td>{{ $matricula->rol->rolnombre}}</td>
                            @else
                                <td>-- Sin Rol asociada --</td>
                            @endisset

                            @isset($matricula->estados->estadonombre)
                                <td>{{ $matricula->estados->estadonombre}}</td>
                            @else
                                <td>-- Sin Estado asociada --</td>
                            @endisset

                            @isset($matricula->usuarios->name)
                                <td>{{ $matricula->usuarios->name}}</td>
                            @else
                                <td>-- Sin Estado asociada --</td>
                            @endisset
                            <td class="td-actions text-right">
                                <a class="btn btn-info" rel="tooltip" title="Ver Detalles" href="{{ route('matriculas.show',$matricula->id) }}">Ver Detalles</a>
                                <a class="btn btn-primary" rel="tooltip" title="Editar" href="{{ route('matriculas.edit',$matricula->id) }}">Editar</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['matriculas.destroy', $matricula->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'rel' => 'tooltip', 'title' => 'Eliminar']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $matriculas->links() !!}
        </div>
    </div>
@endsection
