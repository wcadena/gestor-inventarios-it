<form class="pl-3 pr-3" method="post" action="{{ route('update_workspace',[$workspace->id]) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">{{ __('Name') }}</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$workspace->name}}"/>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">{{ __('Rename Workspace') }}</button>
    </div>
</form>
