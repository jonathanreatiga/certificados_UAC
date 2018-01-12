
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hello Nina') }}</title>

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />

    <!--         Core CSS          -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="wrapper">

    {{--  @include('layouts.pieces.sidebar-dashboard')  --}}

    <div class="main-panel">
        {{--  @include('layouts.pieces.topbar-dashboard')  --}}

        <div class="content">
            <div class="container-fluid">

                {{--  @yield('content')  --}}
                <div class="row">
                    <div class="col-lg-12 margin-tb">
            
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
                                                <a class="btn btn-info" rel="tooltip" title="Descargar" href="{{ route('pdfview',['download'=>'pdf']) }}">Descargar Pdf</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
            
                        {!! $cursos->links() !!}
            
                    </div>
                </div>

            </div>
        </div>

        {{--  @include('layouts.pieces.footer-dashboard')  --}}
    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/material.min.js') }}" type="text/javascript"></script>

<!-- Plugin -->

<!-- Material Dashboard javascript methods -->

</html>