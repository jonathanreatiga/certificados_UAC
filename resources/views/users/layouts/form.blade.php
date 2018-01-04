
<div class="row">

    <div class="row">
        <div class="col-sm-5">
                <strong>Nombre de Usuario:</strong>
                <div class="form-group label-floating">
                    <label class="control-label">Nombre de Usuario:</label>
                    {!! Form::text('name', null, array('placeholder' => '','class' => 'form-control')) !!}
                </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5">
                <strong>Apellido de Usuario:</strong>
                <div class="form-group label-floating">
                    <label class="control-label">Apellido de Usuario:</label>
                    {!! Form::text('usuarioapellido', null, array('placeholder' => '','class' => 'form-control')) !!}
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
                <strong>Tipo de Documento:</strong>
                <div class="form-group label-floating">
                    <label class="control-label">Tipo de Documento:</label>
                    {!! Form::text('usuariotipodocumento', null, array('placeholder' => '','class' => 'form-control')) !!}
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
                <strong>Numero de Documento:</strong>
                <div class="form-group label-floating">
                    <label class="control-label">Numero de Documento:</label>
                    {!! Form::text('usuarionumerodocumento', null, array('placeholder' => '','class' => 'form-control')) !!}
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
                <strong>Contraseña:</strong>
                <div class="form-group label-floating">
                    <label class="control-label">Contraseña:</label>
                    {{--  {!! Form::text('password', null, array('placeholder' => '','class' => 'form-control')) !!}  --}}
                    {{ Form::password('password', array('class' => 'form-control')) }}
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
                <strong>Confirmacion de Contraseña:</strong>
                <div class="form-group label-floating">
                    <label class="control-label">Confirmacion de Contraseña:</label>
                    {{--  {!! Form::text('password_confirmation', null, array('placeholder' => '','class' => 'form-control')) !!}  --}}
                    {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                </div>
        </div>
    </div>
    
    <div class="row">
    <div class="col-sm-5 text-center">
            {{--  <button type="submit" class="btn btn-primary" href="{{ route('articles.show') }}">Enviar</button>  --}}
            <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
</div>