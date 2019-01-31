@extends('layouts.master')

@section('content')

    <h1>Edit Informe</h1>
    <hr/>

    {!! Form::model($informe, [
        'method' => 'PATCH',
        'url' => ['informes', $informe->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('custodio_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('custodio_id', 'Solicitante: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {{ Form::select('custodio_id', $custodios, null, ['class' => 'form-control']) }}
                    {!! $errors->first('custodio_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('area_id', 'Area Id: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {{ Form::select('area_id', $areas, null, ['class' => 'form-control']) }}
                    {!! $errors->first('area_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('no_orden') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('no_orden', 'No Orden: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('no_orden', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('no_orden', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_solicitud') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('fecha_solicitud', 'Fecha Solicitud: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::date('fecha_solicitud', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_solicitud', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_ejecucion') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('fecha_ejecucion', 'Fecha Ejecucion: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::date('fecha_ejecucion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_ejecucion', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('hora_inicio') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('hora_inicio', 'Hora Inicio: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::time('hora_inicio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('hora_inicio', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('hora_fin') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('hora_fin', 'Hora Fin: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::time('hora_fin', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('hora_fin', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('informe_manto_prev_cate_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('informe_manto_prev_cate_id', 'Informe Manto Prev Cate Id: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {{ Form::select('informe_manto_prev_cate_id', $categoria_mant, null, ['class' => 'form-control']) }}
                    {!! $errors->first('informe_manto_prev_cate_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('requerimiento') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('requerimiento', 'Requerimiento: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('requerimiento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('requerimiento', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('solucion') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('solucion', 'Solucion: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::textarea('solucion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('solucion', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('resolucion') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('resolucion', 'Resolucion: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::textarea('resolucion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('resolucion', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    <h1>Tecnico <a href="{{ url('tecnico/create') }}" class="btn btn-primary pull-right btn-sm">Add New Tecnico</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>S.No</th><th>User Id</th><th>Informe Manto Prev Id</th><th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $x=0;?>
            @foreach($tecnico as $item)
                <?php $x++;?>
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('tecnico', $item->id) }}">{{ $item->userxc->name }}</a></td><td>{{ $item->InformeMantenimientoPreventivoxc->requerimiento }}</td>
                    <td>
                        <a href="{{ url('tecnico/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['tecnico', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection