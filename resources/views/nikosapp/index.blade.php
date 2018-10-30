@extends('layouts.app')
@section('content')
<h2>{{$title}}</h2>
<div class="jumbotron text-center">
  <h1>Index</h1>
  <p>This is the nikosapp Index Page!</p>
  <p>
    <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
    <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
  </p>
</div>
@endsection
