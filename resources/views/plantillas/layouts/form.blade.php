
<div class="row">

    <div class="row">
        <div class="col-sm-5">
                <strong>Nombre de la Plantilla:</strong>
                <div class="form-group label-floating">
                    <label class="control-label">Nombre del la Plantilla:</label>
                    {!! Form::text('plantillanombre', null, array('placeholder' => '','class' => 'form-control')) !!}
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
                <strong>Codigo Html plantilla:</strong>
                {!! Form::textarea('plantillahtml', null, array('placeholder' => 'Codigo de plantilla html','class' => 'form-control')) !!}
            </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-5">
            <div class="form-group">
                <strong>Codigo Css plantilla:</strong>
                {!! Form::textarea('plantillacss', null, array('placeholder' => 'Codigo de plantilla Css','class' => 'form-control')) !!}
            </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-5">
            <div class="form-group">
                <strong>Plantilla Descripción:</strong>
                {!! Form::textarea('plantilladescripcion', null, array('placeholder' => 'Descripción de la Plantilla','class' => 'form-control')) !!}
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
            <strong>Orientación de la Plantilla:</strong>
            <div class="form-group label-floating">
                <label class="control-label">Orientación de la Plantilla:</label>
                {!! Form::text('plantillaorientacion', null, array('placeholder' => '','class' => 'form-control')) !!}
            </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-5">
            <strong>Formato de Plantilla:</strong>
            <div class="form-group label-floating">
                <label class="control-label">Formato Plantilla:</label>
                {!! Form::text('plantillaformato', null, array('placeholder' => '','class' => 'form-control')) !!}
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