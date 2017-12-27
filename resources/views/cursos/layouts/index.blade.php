@extends('cursos.layout')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cursos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cursos.create') }}">Crear Nuevo Curso</a>
            </div>
        </div>
    </div>

    {{--  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif  --}}

    <div class="row">
        <div class="col-lg-12 margin-tb">

            {{--  <div class="input-group">
            <span class="input-group-addon">Buscar</span>
            <input id="filtrar" type="text" class="form-control" placeholder="Ingresa la canción de este Disco que deseas Buscar...">
          </div>  --}}

                <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>  
                                <th>Nombre del Curso</th>
                                <th>Descripcion del Curso</th>
                                <th>N° de Horas</th>
                                <th class="text-center" width="230px">Action</th>
                            </tr>
                        </thead>
                        <tbody class="buscar">
                            @foreach ($cursos as $curso)
                            <tr>
                                <td class="text-center" >{{ ++$i }}</td>
                                <td>{{ $curso->cursonombre}}</td>
                                <td>{{ $curso->cursodescripcion}}</td>
                                <td>{{ $curso->cursonumerohoras}}</td>
                                <td class="td-actions text-right">
                                    <a class="btn btn-info" rel="tooltip" title="Ver Detalles" href="{{ route('cursos.show',$curso->id) }}">Ver Detalles</a>
                                    <a class="btn btn-primary" rel="tooltip" title="Editar" href="{{ route('cursos.edit',$curso->id) }}">Editar</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['cursos.destroy', $curso->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'rel' => 'tooltip', 'title' => 'Eliminar']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            {!! $cursos->links() !!}

        </div>
    </div>
@endsection

{{--  <script type="text/javascript">
    $(document).ready(function () {
        
                    (function ($) {
        
                        $('#filtrar').keyup(function () {
        
                            var rex = new RegExp($(this).val(), 'i');
                            $('.buscar tr').hide();
                            $('.buscar tr').filter(function () {
                                return rex.test($(this).text());
                            }).show();
        
                        })
        
                    }(jQuery));
        
                });
</script>  --}}
