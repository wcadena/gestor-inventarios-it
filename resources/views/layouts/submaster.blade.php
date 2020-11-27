@extends('layouts.master')

@section('content')

    <!-- Full Table -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">@yield('sub_text')</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    @yield('sub_url')
                </button>
            </div>
        </div>
        <div class="block-content">
            @yield('sub_content')
        </div>
    </div>

@endsection

