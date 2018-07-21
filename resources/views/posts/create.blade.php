@extends('layouts.app')

@section('content')
@auth
	<h3>Create Posts</h3>

	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	<div class="row">
	<div class="input-field col s12">
	    {{Form::label('title', 'Title:')}}
	    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

	</div>
</div>
<div class="row">
	<div class="input-field col s12">
	    {{Form::label('body', 'Body:')}}<br>
	    {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}}

	</div>
</div>
<div class="row">
	<div class="input-field col s12">
		{{Form::file('cover_image')}}
	</div>
</div>
<div class="row">
	<div class="col m8">
	{{Form::submit('Submit', ['class' => 'btn blue darken-2'])}}
	{!! Form::close() !!}
</div>
</div>
@endauth
@endsection