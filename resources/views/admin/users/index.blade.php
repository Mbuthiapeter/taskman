@extends('layouts.master')

@section('body')
<div class="row">
<div col-md-6 col-md-ofset-3>
<h3>{{ $users->total() }} Total users</h3>
	<ul class="list-group">
		@foreach($users as $user)
<li class="list-group-item" style="margin-top: 20px">
	<span>
		{{$user->name}}
	</span>
	<span class="pull-right clearfix">
		joined {{$user->created_at ->diffForHumans()}}

		<button class="btn btn-xs btn-primary">Follow</button>
	</span>
</li>
@endforeach
{{$users->links()}}
	</ul>
}
}
</div>
</div>
@endsection




