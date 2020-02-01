<form  method="post" action="{{ route('projects.client.permission.store',[$currantWorkspace->slug,$project->id,$client->id]) }}">
    @csrf
    <table class="table table-striped mb-0" id="dataTable-1">
        <thead>
        <tr>
            <th>{{__('Module')}}</th>
            <th>{{__('Permissions')}}</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{__('Milestone')}}</td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission3" @if(in_array('create milestone',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="create milestone">
                        <label for="permission3" class="custom-control-label">{{__('Create')}}</label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission4" @if(in_array('edit milestone',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="edit milestone">
                        <label for="permission4" class="custom-control-label">{{__('Edit')}}</label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission5" @if(in_array('delete milestone',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="delete milestone">
                        <label for="permission5" class="custom-control-label">{{__('Delete')}}</label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission2" @if(in_array('show milestone',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="show milestone">
                        <label for="permission2" class="custom-control-label">{{__('Show')}}</label><br>
                    </div>
                    <div class="col"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>{{__('Task')}}</td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission7" @if(in_array('create task',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="create task">
                        <label for="permission7" class="custom-control-label">{{__('Create')}}</label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission8" @if(in_array('edit task',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="edit task">
                        <label for="permission8" class="custom-control-label">{{__('Edit')}}</label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission9" @if(in_array('delete task',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="delete task">
                        <label for="permission9" class="custom-control-label">{{__('Delete')}}</label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission6" @if(in_array('show task',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="show task">
                        <label for="permission6" class="custom-control-label">{{__('Show')}}</label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission10" @if(in_array('move task',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="move task">
                        <label for="permission10" class="custom-control-label">{{__('Move')}}</label><br>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>{{__('Bug Report')}}</td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission17" @if(in_array('create bug report',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="create bug report">
                        <label for="permission17" class="custom-control-label">{{__('Create')}}</label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission18" @if(in_array('edit bug report',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="edit bug report">
                        <label for="permission18" class="custom-control-label">{{__('Edit')}}</label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission19" @if(in_array('delete bug report',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="delete bug report">
                        <label for="permission19" class="custom-control-label">{{__('Delete')}}</label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission20" @if(in_array('show bug report',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="show bug report">
                        <label for="permission20" class="custom-control-label">{{__('Show')}}</label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission21" @if(in_array('move bug report',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="move bug report">
                        <label for="permission21" class="custom-control-label">{{__('Move')}}</label><br>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>{{__('Activity')}}</td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission1" @if(in_array('show activity',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="show activity">
                        <label for="permission1" class="custom-control-label">{{__('Show')}}</label><br>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>{{__('Time Sheet')}}</td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission16" @if(in_array('show timesheet',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="show timesheet">
                        <label for="permission16" class="custom-control-label">{{__('Show')}}</label><br>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>{{__('Uploading')}}</td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission15" @if(in_array('show uploading',$permissions)) checked="checked" @endif name="permissions[]" type="checkbox" value="show uploading">
                        <label for="permission15" class="custom-control-label">{{__('Show')}}</label><br>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <div class="form-group mt-3">
        <button class="btn btn-primary" type="submit">{{ __('Update Permission') }}</button>
    </div>
</form>