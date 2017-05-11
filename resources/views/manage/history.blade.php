@extends('layouts.app')
@section('content')

   <div class="panel-body">
        @include('common.errors')        

   
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Task History for {{$user->name}}
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                   
                    <thead>
                        <th></th>
                        <th>Task</th>
                        <th>Category</th>
                        <th>Assigned To</th>
                        <th>Due Date</th>
                        <th>Priority</th>
                        <th></th>
                    </thead>

                   
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                               
                                <td class="table-text"><div class="checkbox">
                                <label><input type="checkbox" name="optradio"></label></div></td>
                                <td class="table-text"><div><a href="{{ url('viewTask') }}">{{ $task->name }}</a></div></td>
                                <td class="table-text"><div>{{ $task->category }}</div></td>
                                <td class="table-text"><div>{{ $task->assigned_to }}</div></td>
                                <td class="table-text"><div>{{ $task->due_date }}</div></td>
                                <td class="table-text"><div>{{ $task->priority }}</div></td>

                                <td>
                                     <form action="/task/{{ $task->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

            <button>Edit Task</button>
        </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection