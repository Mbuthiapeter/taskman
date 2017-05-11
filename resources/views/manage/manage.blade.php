@extends('layouts.master')
@section('name')
User History
@endsection
@section('content')

    <!-- Bootstrap Boilerplate... -->

   <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')        

        @if (count($users) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                View Task History for Users
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Group</th>
                        <th>Joined on</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="table-text"><div class="checkbox">
                                <label><input type="checkbox" name="optradio"></label></div></td>
                                <td class="table-text"><div><a href="userHistory/{{ $user->id }}">{{ $user->name }}</a></div></td>
                                <td class="table-text"><div>{{ $user->email }}</div></td>
                                <td class="table-text"><div>{{ $user->group }}</div></td>
                                <td class="table-text"><div>{{$user->created_at}}</div></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                            {{$users->links()}}
            </div>
        </div>
    @endif
@endsection