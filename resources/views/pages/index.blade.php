@extends('layouts.app')

@section('content')
@if(Auth::guest())

<div class="jumbotron text-center">
<h1>Najbolje sportske novine</h1>
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
<a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
@endif
@endsection
