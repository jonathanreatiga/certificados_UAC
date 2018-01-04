
<div class="row">

    <div class="row">
        <div class="col-sm-5">
                <strong>Nombre del Estado:</strong>
                <div class="form-group label-floating">
                    <label class="control-label">Nombre del Estado:</label>
                    {!! Form::text('estadonombre', null, array('placeholder' => '','class' => 'form-control')) !!}
                </div>
        </div>
    </div>

    <div class="row">
    <div class="col-sm-5">
            <div class="form-group">
                <strong>Descripción del Estado:</strong>
                {!! Form::textarea('estadodescripcion', null, array('placeholder' => 'Descripción del Estado','class' => 'form-control')) !!}
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