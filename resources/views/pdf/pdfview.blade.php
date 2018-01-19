
<html>
    <head>
        <style>
        </style>
    </head>
    <body style="margin: 0 auto;width: 1058px;">
        
        <h4>{{$id}}</h4>
        <table class="table">
                <thead>
                    <tr> 
                        <th>Id de la tabla Matricula</th>
                        <th>Numero de Descargas</th>
                        <th>Sesiones</th>
                        <th>Plantilla</th>
                        <th>Plantilla->plantilla Html</th>
                        <th>Id de Curso</th>
                        <th>Nombre del Curso</th>
                    </tr>
                </thead>
                <tbody class="buscar">
                    @foreach ($matriculas as $matricula)
                        <tr>
                            <td>{{$matricula->id}}</td>
                            <td>{{ $matricula->matriculadescargas}}</td>
                            <td>{{ $matricula->sesionfechainicio}} -- {{$matricula->sesionfechafinal}}</td>
                            <td>{{ $matricula->plantilla->plantillanombre}}</td>
                            <td>{{ $matricula->plantilla->plantillahtml}}</td>
                            <td>{{ $matricula->plantilla->id}}</td>
                            <td>{{ $matricula->curso->cursonombre}}</td>
                            {{-- <td class="td-actions text-right">
                                <a class="btn btn-info" rel="tooltip" title="Descargar" href="{{ route('pdfview',['download'=>'pdf'] ) }}">Descargar Pdf</a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
        </table>

         {{-- <div style="margin: 0 auto;background-image: url('fondo.png');background-repeat: no-repeat;width: 1058px;">
            <div>
                <img src="logos2.png" style="float: right;margin-right: 10px;" />
            </div>
            <div style="text-align: center; margin: 0 auto;">
                <img src="logos1.png" style="margin-left: 122px;"/>
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
                <h4 style="text-align: center; color: #231F20; font-weight: bold;">Realizado los días fecha_inicio y fecha_final de febrero de 2017. Con una duración de numero_horas horas.<br/>
                    Dado en Barranquilla, Colombia</h4>
            </div>
            <div>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="firma1.png" style="margin: 0 auto;display: block;position: relative;top: 55px;" />
                            <hr style="width: 70%; border-bottom-color: #767474;"/>
                            <h4 style="text-align: center;margin-bottom: 0px;">rol_nombre</h4>
                            <h5 style="text-align: center;margin-top: 0px;">Secretario General</h5>
                        </td>
                        <td style="padding-top: 74px;">
                            <img src="firma2.png" style="margin: 0 auto;display: block;position: relative;top: 14px;" />
                            <hr style="width: 70%; border-bottom-color: #767474;"/>
                            <h4 style="text-align: center;margin-bottom: 0px;">MARÍA DEL PILAR GARCÍA LARA</h4>
                            <h5 style="text-align: center;margin-top: 0px;">Secretaria Ejecutiva ICDT</h5>
                        </td>
                    </tr>
                </table>
            </div>
        </div> --}}
    </body>
</html>