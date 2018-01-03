
<div class="row">

    <div class="row">
        <div class="col-sm-5">
                <strong>Nombre del rol:</strong>
                <div class="form-group label-floating">
                    <label class="control-label">Nombre del rol:</label>
                    {!! Form::text('rolnombre', null, array('placeholder' => '','class' => 'form-control')) !!}
                </div>
        </div>
    </div>

    <div class="row">
    <div class="col-sm-5">
            <div class="form-group">
                <strong>Descripción del Cargo:</strong>
                {!! Form::textarea('cargo', null, array('placeholder' => 'Descripción del Cargo','class' => 'form-control')) !!}
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