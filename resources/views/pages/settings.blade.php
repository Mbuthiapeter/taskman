@extends('layouts.master')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                 <p>Your age is
                 @age([1989, 4, 4])
                 </p>
                   <p>{{$married}}</p>
                   <p>{{$test}}</p>
                   <p>{{$age}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection