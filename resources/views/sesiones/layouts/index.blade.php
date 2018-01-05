@extends('sesiones.layout')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sesiones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sesiones.create') }}">Crear Nueva Sesion</a>
            </div>
  
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            
             {{--  buscador:  --}}
             {!! Form::open(['route' => 'sesiones.layouts.index', 'method'=> 'GET', 'class'=> 'navbar-form pull-right']) !!}
             
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="sesionfecha" placeholder="Buscar...">
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
                                <th>Inicio de Sesion</th>
                                <th>Fin de Sesion</th>
                                <th class="text-center" width="230px">Action</th>
                            </tr>
                        </thead>
                        <tbody class="buscar">
                            @foreach ($sesiones as $sesion)
                            <tr>
                                <td class="text-center" >{{ ++$i }}</td>
                                <td>{{ $sesion->sesionfechainicio}}</td>
                                <td>{{ $sesion->sesionfechafinal}}</td>
                                <td class="td-actions text-right">
                                    <a class="btn btn-info" rel="tooltip" title="Ver Detalles" href="{{ route('sesiones.show',$sesion->id) }}">Ver Detalles</a>
                                    <a class="btn btn-primary" rel="tooltip" title="Editar" href="{{ route('sesiones.edit',$sesion->id) }}">Editar</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['sesiones.destroy', $sesion->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'rel' => 'tooltip', 'title' => 'Eliminar']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            {!! $sesiones->links() !!}

        </div>
    </div>
@endsection
