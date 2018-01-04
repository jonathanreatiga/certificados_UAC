@extends('users.layout')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Usuarios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}">Crear Nuevo Usuario</a>
            </div>
            {{--  buscador:  --}}
            
            {{--  fin del buscador  --}}
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            
             {{--  buscador:  --}}
             {!! Form::open(['route' => 'users.layouts.index', 'method'=> 'GET', 'class'=> 'navbar-form pull-right']) !!}
             
                         {{--  <div class="input-group">
                             {!! Form::text('pagina', null, ['class'=>'form-control', 'placelhoder'=>'paginas...', 'aria-describedby'=>'search'] ) !!}
                             <span class="input-group-addon" id="search">
                                 <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                             </span>
                         </div>  --}}
             
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="name" placeholder="Buscar...">
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
                                <th>Nombre del Usuario</th>
                                <th>Apellido</th>
                                <th>N° de Documento</th>
                                <th class="text-center" width="230px">Action</th>
                            </tr>
                        </thead>
                        <tbody class="buscar">
                            @foreach ($users as $user)
                            <tr>
                                <td class="text-center" >{{ ++$i }}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->usuarioapellido}}</td>
                                <td>{{ $user->usuarionumerodocumento}}</td>
                                <td class="td-actions text-right">
                                    <a class="btn btn-info" rel="tooltip" title="Ver Detalles" href="{{ route('users.show',$user->id) }}">Ver Detalles</a>
                                    <a class="btn btn-primary" rel="tooltip" title="Editar" href="{{ route('users.edit',$user->id) }}">Editar</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'rel' => 'tooltip', 'title' => 'Eliminar']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            {!! $users->links() !!}

        </div>
    </div>
@endsection
