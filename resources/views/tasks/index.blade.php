
@extends('layouts.master')
@section('name')
My Tasks
@endsection
@section('content')

    <!-- Bootstrap Boilerplate... -->

   <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')        

     <!-- Current Tasks -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th></th>
                        <th>Task</th>
                        <th>Category</th>
                        <th>Assigned To</th>
                        <th>Due Date</th>
                        <th>Priority</th>
                        <th></th>
                        <th></th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text"><div class="checkbox">
                                <label><input type="checkbox" name="optradio"></label></div></td>
                                <td class="table-text"><div><a href="viewTask/{{ $task->id }}">{{ $task->shortContent }}</a></div></td>
                                <td class="table-text"><div>{{ $task->category }}</div></td>
                                <td class="table-text"><div>{{ $task->assigned_to }}</div></td>
                                <td class="table-text"><div>{{ $task->due_date }}</div></td>
                                <td class="table-text"><div>{{ $task->priority }}</div></td>

                                <td>
                                 <a href="viewTask/{{ $task->id }}"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
                                </td>
                                <td>
                                <a href="viewTask/{{ $task->id }}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection