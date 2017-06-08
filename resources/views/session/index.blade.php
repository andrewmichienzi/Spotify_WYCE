@extends('layouts.master')

@section('content')
<h1 class="cover-heading">Authentication</h1>
  <p class="lead">Login to Spotify to create your playlist!</p>
  <form action="/login" method="post">
    {{ csrf_field() }}
      <button class="btn btn-lg btn-secondary" name="login">Login</button>
  </form>
  
@endsection