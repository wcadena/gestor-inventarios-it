@extends('layouts.master')

@section('content')
{{ Form::open(array('id' => 'search', 'url' => 'postSearch')) }}
{{ Form::text('query', Illuminate\Support\Facades\Input::old('query'), array('placeholder' => 'Search for posts..')) }}
{{ Form::hidden('sort_col', Illuminate\Support\Facades\Input::old('sort_col')) }}
{{ Form::hidden('sort_dir', Illuminate\Support\Facades\Input::old('sort_dir')) }}
{{ Form::button('<i class="fa fa-search"></i>', array('type' => 'submit', 'name' => 'submit', 'title' => 'Zoeken')) }}
{{ Form::close() }}
        <!-- busqueda --!>
        <!-- Posts !-->
<div id="posts">
    @if (!$posts->count())
        <div class="content">No posts found!</div>
    @else
        @foreach ($posts as $post)
            <div class="list-item clearfix">
                <div class="content">
                    <h1>{{{ $post->codigo_avianca }}}</h1>
                    <div class="tags">
                        codigo_barras codigo_avianca codigo_otro
                    </div>
                </div>

            </div>
        @endforeach
    @endif
</div>
<!-- /Posts !-->
@endsection
@section('scripts')
    @include('layouts.partials.scripts')
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //alert("hola");
            $('button.zxsdfg').click(function (e) {


                e.preventDefault();
                var a= $(this).parents("tr");
                var id = (a.data('id'));
                /////////////////////////////////////////

                var $btn = $(this).button('loading');
                //alert(id);
                var url =$("#form-"+id).attr("action");
                var $post             = {};
                $post.valor1            = $('#valor1-' +id).val();
                $post.valor2            = $('#valor2-' +id).val();
                $post._token        = $('#token-' +id).val();
                //alert("listo");
                $.ajax({
                    type: "PATCH",
                    url: url,
                    data: $post,
                    cache: false,
                    success: function(data){
                        //alert("listo:"+data);
                        $("#alert-x").fadeIn();
                        $("#alert-x").html("<strong>Actualizado!</strong> Actualizado sin novedad ");
                        $("#alert-x").fadeOut();
                        $btn.button('reset');

                    },error: function(xhr, status, error) {
                        alert(error);
                        alert(status);
                        alert(xhr);
                        $btn.button('reset');
                    }
                });
                /**/
                /////////////////////////////////////////
                // business logic...

            });
            //////////////////////////////////////////////////////////////////
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) ;// Button that triggered the modal
                var recipient = button.data('whatever'); // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var recipient = button.data('whatever2')
                var modal = $(this);
                modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body input').val(recipient)
            })
            ///////////////////////////////////////////////////////////////////////////////////
            $('#search').submit(function(e) {
                e.preventDefault();

                var form = $(this);

                $.post(form.attr('action'), form.serialize(), function(data) {
                    $('#posts').html(data);
                    console.log(data);
                });
            });
        });

    </script>
@endsection