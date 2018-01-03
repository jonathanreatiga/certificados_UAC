@extends('plantillas.layout')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Plantillas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('plantillas.create') }}">Crear Nueva Plantilla</a>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            
             {{--  buscador:  --}}
             {!! Form::open(['route' => 'plantillas.layouts.index', 'method'=> 'GET', 'class'=> 'navbar-form pull-right']) !!}
             
                         {{--  <div class="input-group">
                             {!! Form::text('pagina', null, ['class'=>'form-control', 'placelhoder'=>'paginas...', 'aria-describedby'=>'search'] ) !!}
                             <span class="input-group-addon" id="search">
                                 <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                             </span>
                         </div>  --}}
             
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="plantillanombre" placeholder="Buscar...">
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
                                <th>Nombre de la Plantilla</th>
                                <th>Descripcion de la Plantilla</th>
                                <th>Orientacion de Plantilla</th>
                                <th>Formato de Plantilla</th>
                                <th class="text-center" width="230px">Action</th>
                            </tr>
                        </thead>
                        <tbody class="buscar">
                            @foreach ($plantillas as $plantilla)
                            <tr>
                                <td class="text-center" >{{ ++$i }}</td>
                                <td>{{ $plantilla->plantillanombre}}</td>
                                <td>{{ $plantilla->plantilladescripcion}}</td>
                                <td>{{ $plantilla->plantillaorientacion}}</td>
                                <td>{{ $plantilla->plantillaformato}}</td>
                                <td class="td-actions text-right">
                                    <a class="btn btn-info" rel="tooltip" title="Ver Detalles" href="{{ route('plantillas.show',$plantilla->id) }}">Ver Detalles</a>
                                    <a class="btn btn-primary" rel="tooltip" title="Editar" href="{{ route('plantillas.edit',$plantilla->id) }}">Editar</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['plantillas.destroy', $plantilla->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'rel' => 'tooltip', 'title' => 'Eliminar']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            {!! $plantillas->links() !!}

        </div>
    </div>
@endsection
