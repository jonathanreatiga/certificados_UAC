@extends('estados.layout')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Estados</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('estados.create') }}">Crear Nuevo Estado</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            
             {{--  buscador:  --}}
             {!! Form::open(['route' => 'estados.layouts.index', 'method'=> 'GET', 'class'=> 'navbar-form pull-right']) !!}
             
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="estadonombre" placeholder="Buscar...">
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
                                <th>Nombre del Estado</th>
                                <th>Descripcion del Estado</th>
                                <th class="text-center" width="230px">Action</th>
                            </tr>
                        </thead>
                        <tbody class="buscar">
                            @foreach ($estados as $estado)
                            <tr>
                                <td class="text-center" >{{ ++$i }}</td>
                                <td>{{ $estado->estadonombre}}</td>
                                <td>{{ $estado->estadodescripcion}}</td>
                                <td class="td-actions text-right">
                                    <a class="btn btn-info" rel="tooltip" title="Ver Detalles" href="{{ route('estados.show',$estado->id) }}">Ver Detalles</a>
                                    <a class="btn btn-primary" rel="tooltip" title="Editar" href="{{ route('estados.edit',$estado->id) }}">Editar</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['estados.destroy', $estado->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'rel' => 'tooltip', 'title' => 'Eliminar']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            {!! $estados->links() !!}

        </div>
    </div>
@endsection
