
@extends('layouts.app')


@section('content')
<a href="/posts/index" class = "btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>
    <div>
        {{$post->body}}
        <!-- {!! $post->body !!} To Parse HTML !!!!-->
    </div>
    <hr>
    <small>Written on {{$post->created_at}}, by {{$post->user->name}}</small>
    <hr>
    
    <!-- Check the User -->
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        
        <!-- To Edit -->
        <a href="/posts/edit/{{$post->id}}" class = "btn btn-default">Edit</a>
        <!-- <a href="/posts/delete/{{$post->id}}" class = "btn btn-danger">Delete</a> -->
        
        <!-- To Delete -->
        {!!Form::open(['action'=> ['PostsController@destroy', $post->id],'method' => 'POST']) !!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close() !!} 
        @endif
    @endif

@endsection