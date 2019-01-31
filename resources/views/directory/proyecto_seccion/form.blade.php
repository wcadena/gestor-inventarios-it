<div class="form-group {{ $errors->has('proyecto_id') ? ' form-control-alt is-invalid' : ''}}">
    {!! Form::label('proyecto_id', 'Proyecto Id', ['class' => 'control-label']) !!}
    {!! Form::number('proyecto_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('proyecto_id', '<p class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? ' form-control-alt is-invalid' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? ' form-control-alt is-invalid' : ''}}">
    {!! Form::label('descripcion', 'Descripcion', ['class' => 'control-label']) !!}
    {!! Form::textarea('descripcion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('descripcion', '<p class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? ' form-control-alt is-invalid' : ''}}">
    {!! Form::label('tipo', 'Tipo', ['class' => 'control-label']) !!}
    {!! Form::select('tipo', \App\ProyectoSeccion::getENUM('tipo'), null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tipo', '<p class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('orden') ? ' form-control-alt is-invalid' : ''}}">
    {!! Form::label('orden', 'Orden', ['class' => 'control-label']) !!}
    {!! Form::number('orden', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('orden', '<p class="invalid-feedback">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Actualizar' : 'Crear', ['class' => 'btn btn-primary']) !!}
</div>
