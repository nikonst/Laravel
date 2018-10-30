@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in!</p>
                    <p><a href="/posts/create" class="btn btn-primary">Create a Post</a></p>
                    <h3>Your Posts</h3>
                    <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @if(count($posts) > 0)
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td><a href="/posts/edit/{{$post->id}}" class="btn btn-default">Edit</a></td>
                        <td>
                        {!!Form::open(['action'=> ['PostsController@destroy', $post->id],'method' => 'POST']) !!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                        {!!Form::close() !!} 
                        </td>
                    </tr>

                    @endforeach
                    </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
