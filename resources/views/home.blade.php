@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col m12">
            <br>
            <div class="card">
                <div class="card-content">
                    <h3 class="">Admin Panel</h3>
                    <hr>
                    <h4>Blog Posts</h4>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title:</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn blue darken-2">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn red lighten-1'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                    <br>
                    <a href="/posts/create" class="waves-effect waves-light btn blue darken-2">Create Post</a>
                </div>
            </div>
        </div>
    </div>
@endsection