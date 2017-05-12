@extends('layouts.master')

@section('content')
<div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="/editTask/{{$task->id}}" method="POST" class="form-horizontal">
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
				<option value="Board operations">Board operations</option>
				<option value="Strategic planning">Strategic planning</option>
				<option value="Business planning" selected="selected">Business planning</option>
				<option value="Management development">Management development </option>
				<option value="Employee development ">Employee development </option>
				<option value="Employee development ">Other </option>
				</select>
                </div>
            </div>
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Priority<span style="color: red">*</span></label>

                <div class="col-sm-6">
                    <select tabindex="4" id="priority" name="priority" class="input-sm form-control">
				<option value="none">none</option>
				<option value="low">low</option>
				<option value="normal" selected="selected">normal</option>
				<option value="high">high</option>
				<option value="urgent">urgent</option>
				<option value="immediate">immediate</option>
				</select>
                </div>
            </div>

            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Scope<span style="color: red">*</span></label>

                <div class="col-sm-6">
                    <select tabindex="4" id="scope" name="scope" class="input-sm form-control">
							<option value="Private">Private</option>
							<option value="Public">Public</option>
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
							<option value="Managers">Managers</option>
							<option value="Members">Members</option>
							</select>
                </div>
            </div>

            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Due Date<span style="color: red">*</span></label>

                <div class="col-sm-6">
                    <input type="text" name="due_date" id="due_date" class="form-control">
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