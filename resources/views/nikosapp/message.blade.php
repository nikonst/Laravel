@extends('layouts.app')

@section('content')
<a href="/nikosapp/index" class = "btn btn-default">Go Back</a>
<hr>
<h1>Message Page</h1>
<p>You can send us a message!</p>



{!! Form::open(array('action' => 'MessagesController@storeMessage')) !!}
    <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
   

@endsection

