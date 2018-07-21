@extends('layouts.app')

@section('content')
    <h2>Posts</h2>
    <hr><br>
    @if(count($posts) > 0)
        @foreach($posts as $post)
                <div class="row">
                    <div class="col m4">
                        <img class="responsive-img z-depth-1" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col m8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection