
<div class="row">

    <div class="row">
        <div class="col-sm-5">
                <strong>Curso Nombre:</strong>
                <div class="form-group label-floating">
                    <label class="control-label">Nombre del Curso:</label>
                    {!! Form::text('cursonombre', null, array('placeholder' => '','class' => 'form-control')) !!}
                </div>
        </div>
    </div>
    {{--  <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Curso Nombre:</strong>
            {!! Form::text('cursonombre', null, array('placeholder' => 'CursoNombre','class' => 'form-control')) !!}
        </div>
    </div>  --}}

    <div class="row">
    <div class="col-sm-5">
            <div class="form-group">
                <strong>Curso Descripción:</strong>
                {!! Form::textarea('cursodescripcion', null, array('placeholder' => 'Descripción del Curso','class' => 'form-control')) !!}
            </div>
    </div>
</div>
    {{--  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso Descripcion:</strong>
                {!! Form::textarea('cursodescripcion', null, array('placeholder' => 'CursoDescripcion','class' => 'form-control')) !!}
            </div>
    </div>  --}}

    <div class="row">
    <div class="col-sm-5">
            <strong>Numero de horas:</strong>
            <div class="form-group label-floating">
                <label class="control-label">Numero de Horas:</label>
                {!! Form::text('cursonumerohoras', null, array('placeholder' => '','class' => 'form-control')) !!}
            </div>
    </div>
</div>
    {{--  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso N° Horas:</strong>
                {!! Form::text('cursonumerohoras', null, array('placeholder' => 'CursoNumeroHoras','class' => 'form-control')) !!}
            </div>
    </div>  --}}

    {{--  <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Body:</strong>
            {!! Form::textarea('body', null, array('placeholder' => 'Body','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>  --}}
    <div class="row">
    <div class="col-sm-5 text-center">
            {{--  <button type="submit" class="btn btn-primary" href="{{ route('articles.show') }}">Enviar</button>  --}}
            <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
</div>