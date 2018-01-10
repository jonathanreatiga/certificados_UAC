<div class="row">
        <div class="row">
            <div class="col-sm-5">
                    <strong>Descarga de Matriculas:</strong>
                    <div class="form-group label-floating">
                        {{--  <label class="control-label">Nombre del rol:</label>  --}}
                        {{--  {!! Form::text('rolnombre', null, array('placeholder' => '','class' => 'form-control')) !!}  --}}
                        {!! Form::text('matriculadescargas', null, array('placeholder' => '','class' => 'form-control')) !!}
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                    <div class="form-group">
                        <strong>Seleccion del Sesion:</strong>
                        {{--  {!! Form::textarea('rolcargo', null, array('placeholder' => 'Descripción del Cargo','class' => 'form-control')) !!}  --}}
                        {!! Form::select('sesiones_id', $sesiones, null,['class' => 'form-control']) !!}
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                    <div class="form-group">
                        <strong>Seleccion del Rol:</strong>
                        {{--  {!! Form::textarea('rolcargo', null, array('placeholder' => 'Descripción del Cargo','class' => 'form-control')) !!}  --}}
                        {!! Form::select('rol_id', $roles, null,['class' => 'form-control']) !!}
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                    <div class="form-group">
                        <strong>Seleccion del Estado:</strong>
                        {{--  {!! Form::textarea('rolcargo', null, array('placeholder' => 'Descripción del Cargo','class' => 'form-control')) !!}  --}}
                        {!! Form::select('estados_id', $estados, null,['class' => 'form-control']) !!}
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