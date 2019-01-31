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


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Actualizar' : 'Crear', ['class' => 'btn btn-primary']) !!}
</div>
