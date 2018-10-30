@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/basic.css') }}" >
@section('content')
    <h1>Messages</h1>
    <p>The Messages</p>
    @if(count($messages) > 0)
        @foreach($messages as $message)
            <div class="well">
                <p>Message ID: {{$message->id}}</p>
                <p>Message Title: <b>{{$message->title}}</b></p>
                <p>Message Body: {{$message->body}}</p>
            </div>
        @endforeach
    @else
        <p>No messages found</p>
    @endif

@endsection

