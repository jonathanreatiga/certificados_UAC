<div class="row">
        <div class="row">
            <div class="col-sm-5">
                    <strong>Fecha Inicial:</strong>
                    <div class="form-group label-floating">
                        {{--  <label class="control-label">Nombre del rol:</label>  --}}
                        {{--  {!! Form::text('rolnombre', null, array('placeholder' => '','class' => 'form-control')) !!}  --}}
                        {{ Form::date('sesionfechainicio', null,['class' => 'form-control']) }}
                    </div>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-5">
                        <strong>Fecha Final:</strong>
                        <div class="form-group label-floating">
                            {{--  <label class="control-label">Nombre del rol:</label>  --}}
                            {{--  {!! Form::text('rolnombre', null, array('placeholder' => '','class' => 'form-control')) !!}  --}}
                            {{ Form::date('sesionfechafinal', null,['class' => 'form-control']) }}                           
                        </div>
                </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                    <div class="form-group">
                        <strong>Seleccion del Curso:</strong>
                        {{--  {!! Form::textarea('rolcargo', null, array('placeholder' => 'Descripción del Cargo','class' => 'form-control')) !!}  --}}
                        {!! Form::select('curso_id', $cursos, null,['class' => 'form-control']) !!}
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                    <div class="form-group">
                        <strong>Seleccion de la Plantilla:</strong>
                        {{--  {!! Form::textarea('rolcargo', null, array('placeholder' => 'Descripción del Cargo','class' => 'form-control')) !!}  --}}
                        {!! Form::select('plantilla_id', $plantillas, null,['class' => 'form-control']) !!}
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