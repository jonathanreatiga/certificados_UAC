
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

                    <div class="row">
                            <div class="col-lg-12">
                                
                                 {{--  buscador:  --}}
                                 {!! Form::open(['route' => 'pdf-index2', 'method'=> 'GET', 'class'=> 'navbar-form']) !!}
                                 
                                             {{--  <div class="input-group">
                                                 {!! Form::text('pagina', null, ['class'=>'form-control', 'placelhoder'=>'paginas...', 'aria-describedby'=>'search'] ) !!}
                                                 <span class="input-group-addon" id="search">
                                                     <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                                 </span>
                                             </div>  --}}
                                 
                                            <div class="input-group custom-search-form">
                                                <input type="text" class="form-control" name="usuarionumerodocumento" placeholder="Buscar...">
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




<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <title>Title of the document</title>
        <style>
        </style>
    </head>
    <body style="margin: 0 auto;width: 1058px;">
        <div style="margin: 0 auto;background-image: url('http://localhost/certificados_UAC/public/img/fondo.png');background-repeat: no-repeat;width: 1058px;">
            <div>
                <img src="http://localhost/certificados_UAC/public/img/logos2.png" style="float: right;margin-right: 10px;" /> 
            </div>
            <div style="text-align: center; margin: 0 auto;">
                <img src="http://localhost/certificados_UAC/public/img/logos1.png" style="margin-left: 122px;"/>
            </div>
            <div>
                <h1 style="text-align: center; font-size: 40px;color: #231F20;margin-top: 0px;">Universidad Autónoma del Caribe</h1>
                <h2 style="text-align: center;color: #231F20;">La Facultad de Ciencias Administrativas, Económicas y Contables,<br/>
                    la Escuela de Posgrados y el Instituto Colombiano de Derecho Tributario
                </h2>
            </div>
            <div>
                <h2 style="text-align: center;margin-top: 30px;color: #231F20;"><strong>Certifican que:</strong></h2>
                <h1 style="text-align: center; color: #231F20;">nombre_usuario</h1> 
            </div>
            <div>
                <hr style="width: 70%; border-bottom-color: #767474;"/>
                <h2 style="text-align: center;margin-top: 30px; color: #231F20;margin-bottom: 0px;"><strong>Asistió al Seminario</strong></h2>
                <h1 style="text-align: center; font-size: 40px; color: #3E3E3F;margin-top: 0px;">curso_nombre</h1>
                <h4 style="text-align: center; color: #3E3E3F; font-weight: bold;">Seminario que aborda todos los temas previstos en la Ley 1819 de 2016 y sus decretos reglamentarios.</h4>
                <h4 style="text-align: center; color: #231F20; font-weight: bold;">Realizado los días fecha_inicio hasta fecha_final de ano_sesion. Con una duración de numero_horas horas.<br/> Dado en Barranquilla, Colombia</h4>
            </div>
            <div>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="http://localhost/certificados_UAC/public/img/firma1.png" style="margin: 0 auto;display: block;position: relative;top: 55px;" />
                            <hr style="width: 70%; border-bottom-color: #767474;"/>
                            <h4 style="text-align: center;margin-bottom: 0px;">rol_nombre</h4>
                            <h5 style="text-align: center;margin-top: 0px;">Secretario General</h5>
                        </td>
                        <td style="padding-top: 74px;">
                            <img src="http://localhost/certificados_UAC/public/img/firma2.png" style="margin: 0 auto;display: block;position: relative;top: 14px;" />
                            <hr style="width: 70%; border-bottom-color: #767474;"/>
                            <h4 style="text-align: center;margin-bottom: 0px;">MARÍA DEL PILAR GARCÍA LARA</h4>
                            <h5 style="text-align: center;margin-top: 0px;">Secretaria Ejecutiva ICDT</h5>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>

    <div style="margin: 0 auto;background-image: url('http://localhost/certificados_UAC/public/img/fondo.png');background-repeat: no-repeat;width: 1058px;">
            <div>
                <img src="http://localhost/certificados_UAC/public/img/logos2.png" style="float: right;margin-right: 10px;" />
            </div>
            <div style="text-align: center; margin: 0 auto;">
                <img src="http://localhost/certificados_UAC/public/img/logos1.png" style="margin-left: 122px;"/>
            </div>
            <div>
                <h1 style="text-align: center; font-size: 40px;color: #231F20;margin-top: 0px;">Universidad Autónoma del Caribe</h1>
                <h2 style="text-align: center;color: #231F20;">La Facultad de Ciencias Administrativas, Económicas y Contables,<br/>
                    la Escuela de Posgrados y el Instituto Colombiano de Derecho Tributario
                </h2>
            </div>
            <div>
                <h2 style="text-align: center;margin-top: 30px;color: #231F20;"><strong>Certifican que:</strong></h2>
                <h1 style="text-align: center; color: #231F20;">Geovanny Reales</h1>
            </div>
            <div>
                <hr style="width: 70%; border-bottom-color: #767474;"/>
                <h2 style="text-align: center;margin-top: 30px; color: #231F20;margin-bottom: 0px;"><strong>Asistió al Seminario</strong></h2>
                <h1 style="text-align: center; font-size: 40px; color: #3E3E3F;margin-top: 0px;">Reforma Tributaria Estructural</h1>
                <h4 style="text-align: center; color: #3E3E3F; font-weight: bold;">Seminario que aborda todos los temas previstos en la Ley 1819 de 2016 y sus decretos reglamentarios.</h4>
                <h4 style="text-align: center; color: #231F20; font-weight: bold;">Realizado los días 8 y 9 de febrero de 2017. Con una duración de 14 horas.<br/>
                    Dado en Barranquilla, Colombia</h4>
            </div>
            <div>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="http://localhost/certificados_UAC/public/img/firma1.png" style="margin: 0 auto;display: block;position: relative;top: 55px;" />
                            <hr style="width: 70%; border-bottom-color: #767474;"/>
                            <h4 style="text-align: center;margin-bottom: 0px;">JESÚS DAVID PANTOJA MERCADO</h4>
                            <h5 style="text-align: center;margin-top: 0px;">Secretario General</h5>
                        </td>
                        <td style="padding-top: 74px;">
                            <img src="http://localhost/certificados_UAC/public/img/firma2.png" style="margin: 0 auto;display: block;position: relative;top: 14px;" />
                            <hr style="width: 70%; border-bottom-color: #767474;"/>
                            <h4 style="text-align: center;margin-bottom: 0px;">MARÍA DEL PILAR GARCÍA LARA</h4>
                            <h5 style="text-align: center;margin-top: 0px;">Secretaria Ejecutiva ICDT</h5>
                        </td>
                    </tr>
                </table>
            </div>
        </div>