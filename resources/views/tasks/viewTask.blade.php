 @extends('layouts.app')
 
 @section('name')
 Task Details
@endsection

@section('content')


   <div class="panel-body">
        @include('common.errors')        

        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                   
                    <thead>
                        <th>Task</th>
                        <th>Category</th>
                        <th>Assigned To</th>
                        <th>Due Date</th>
                        <th>Priority</th>
                    </thead>

                   
                    <tbody>
                            <tr>
                               
                                <td class="table-text"><div>{{ $task->name }}</div></td>
                                <td class="table-text"><div>{{ $task->category }}</div></td>
                                <td class="table-text"><div>{{ $task->assigned_to }}</div></td>
                                <td class="table-text"><div>{{ $task->due_date }}</div></td>
                                <td class="table-text"><div>{{ $task->priority }}</div></td>                               
                            </tr>
                        </tbody>
                        </table>
                        <table class="table table-striped task-table">
                        <thead></thead>
                        <tbody>
                        <tr>
                            <td class="table-text"><strong>Description:</strong></td>
                            <td class="table-text" colspan="3"><div>{{ $task->description }}</div></td>
                        </tr>
                        <tr>
                            <td class="table-text"><strong>Scope:</strong></td>
                            <td class="table-text"><div>{{ $task->scope }}</div></td>
                            <td class="table-text"><strong>Group:</strong></td>
                            <td class="table-text" ><div>{{ $task->group }}</div></td>
                        </tr>
                        <tr>
                            <td class="table-text"><strong>Created By:</strong></td>
                            <td class="table-text"><div>{{ $task->user_id }}</div></td>
                            <td class="table-text"><strong>Created at:</strong></td>
                            <td class="table-text"><div>{{ $task->created_at }}</div></td>
                        </tr>
                        </tbody>
                        </table>

                        <table class="table table-striped task-table">
                        <thead></thead>
                        <tbody>
                        <tr>
                        <td class="table-text"><strong>Assign To: </strong> </td>
                        <td class="table-text"><select tabindex="4" id="assigned_to" name="assigned_to" class="input-sm form-control">
                     <option value="10">Select</option>
                        @foreach($users as $user)
                            <option value="{{$user->name }}">{{$user->name }}</option>
                        @endforeach 
                            </select></td>
                            <td ><form action="/task/{{ $task->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

            <button>Edit Task</button>
        </form></td>
        <td ><form action="/task/{{ $task->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

            <button>Delete Task</button>
        </form></td>
                        </tr>
                        </tbody>
                        </table>                        
                        </div>
                        </td>
                        </tbody>
                        </table>

                        <tr><td>
                                     
                                </td></tr>
                                <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection