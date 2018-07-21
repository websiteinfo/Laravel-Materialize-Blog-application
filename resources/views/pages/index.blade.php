@extends('layouts.app')

@section('content')
<div class="row">
        <h1>{{$title}}</h1>
        <p>Blog system with posts, login, register form.</p>
        <p><a class="waves-effect waves-light btn blue darken-2" href="/login" role="button">Login</a> <a class="waves-effect waves-light btn blue darken-2" href="/register" role="button">Register</a></p>
@endsection