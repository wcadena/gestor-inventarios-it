@extends('adminlte::layouts.errors')

@section('htmlheader_title')
    {{ trans('message.serviceunavailable') }}
@endsection

@section('main-content')

    <div class="error-page">
        <h2 class="headline text-green"><i class="fa fa-info text-green"></i></h2>
        <div class="error-content">
            <h3><i class="fa fa-info text-red"></i> Autenticado</h3>
            <p>
                Cierre esta ventana
                <br />
                por favor
            </p>

        </div>
    </div><!-- /.error-page -->
@endsection
