@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add files</div>

                    <div class="card-body">
                        <upload-files :input_name="'users[]'" :post_url="'files/upload-file'"  :imageable_type="test" :imageable_id="123"  :vinculo_padre="wcadena-q"></upload-files>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection