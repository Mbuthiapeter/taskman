@extends('layouts.master')

@section('name')
Add Tasks
@endsection

@section('content')
<div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="/task" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            
            
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Title<span style="color: red">*</span></label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="name" id="task-name" class="form-control">
                </div>
            </div>
            <!-- description -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Description<span style="color: red">*</span></label>

                <div class="col-sm-6">
                    <textarea class="form-control" rows="5" name="description" id="description"></textarea>
                </div>
            </div>

            <div class="form-group">               
            			<label for="task-name" class=" col-sm-3 control-label ">Category<span style="color: red">*</span></label>
                <div class="col-sm-6">                
                <select tabindex="4" id="category" name="category" class="input-sm form-control">
                @foreach($categories as $category)
                <option value="{{$category->name}}">{{$category->name}}</option>
                @endforeach				
				</select>
                </div>
            </div>
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Priority<span style="color: red">*</span></label>

                <div class="col-sm-6">
                    <select tabindex="4" id="priority" name="priority" class="input-sm form-control">
				@foreach($priorities as $priority)
                <option value="{{$priority->name}}">{{$priority->name}}</option>
                @endforeach
				</select>
                </div>
            </div>

            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Scope<span style="color: red">*</span></label>

                <div class="col-sm-6">
                    <select tabindex="4" id="scope" name="scope" class="input-sm form-control">
							@foreach($scopes as $scope)
                <option value="{{$scope->name}}">{{$scope->name}}</option>
                @endforeach
							</select>
                </div>
            </div>
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Assign To<span style="color: red">*</span></label>

                <div class="col-sm-6">
                     <select tabindex="4" id="assigned_to" name="assigned_to" class="input-sm form-control">
                     <option value="10">Select</option>
                     	@foreach($users as $user)
							<option value="{{$user->name }}">{{$user->name }}</option>
						@endforeach
							</select>
                </div>
            </div>

            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Group<span style="color: red">*</span></label>

                <div class="col-sm-6">
                     <select tabindex="4" id="group" name="group" class="input-sm form-control">
							@foreach($groups as $group)
                <option value="{{$group->name}}">{{$group->name}}</option>
                @endforeach
							</select>
                </div>
            </div>

            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Due Date<span style="color: red">*</span></label>

                <div class="col-sm-6">
                    <input type="date" name="due_date" id="due_date" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Tag</label>

                <div class="col-sm-6">
  					<select class="form-control" id="tagged" name="tagged" multiple>
    				@foreach($users as $user)
							<option value="{{$user->name }}">{{$user->name }}</option>
						@endforeach
  					</select>
                </div>
            </div>

            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Upload File</label>

                <div class="col-sm-6 ">
                    <input type="hidden" name="max_file_size" value="2097152" />
			    <div class="dropzone center">
				<i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x"></i><br>
				<div id="dropzone-previews-box" class="dropzone-previews dz-max-files-reached"></div>
			    </div>
			<div class="fallback">
				<div class="dz-message" data-dz-message></div>
			<input tabindex="14" id="ufile[]" name="ufile[]" type="file" size="60" />
			</div>
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection