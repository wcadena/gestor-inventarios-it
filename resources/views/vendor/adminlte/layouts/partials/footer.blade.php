<!-- Main Footer -->
<footer class="main-footer">
    <div class="btn-group btn-group-sm btn-group-justified">
        <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        <a href="{{url('home')}}" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i></a>
        <a href="{{ url('/usuario/'.Auth::user()->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i></a>
    </div>
</footer>
