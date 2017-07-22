@extends('layouts.mini')

@section('content')

    <h1>Create New Checklist_opcionescheck</h1>
    <hr/>

    {!! Form::open(['url' => 'api/checklist_crear_option', 'class' => 'form-horizontal datrguu7s9io']) !!}


    {!! Form::hidden('check_list_id', $id, ['class' => 'form-control']) !!}
    {!! $errors->first('check_list_id', '<p class="help-block">:message</p>') !!}

    <div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
        {!! Form::label('tipo', 'Tipo: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('tipo', \App\OpcionesCheckList::getENUM('tipo'), null, ['class' => 'form-control']) !!}

            {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('atributo') ? 'has-error' : ''}}">
        {!! Form::label('atributo', 'Atributo: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('atributo', null, ['class' => 'form-control']) !!}
            {!! $errors->first('atributo', '<p class="help-block">:message</p>') !!}
        </div>
    </div>



    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection