@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-success">Go back</a>
	<br><br>
	<h1>{{$post->title}}</h1>
	<div>
		{!!$post->body!!}
	</div>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a href="/posts/{{$post->id}}/edit" class="btn blue darken-2">Edit</a>
			{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

				{{Form::hidden('_method', 'DELETE')}}
				<br>
				{{Form::submit('delete', ['class' => 'btn red lighten-1'])}}

			{!!Form::close()!!}
		@endif
	@endif
@endsection