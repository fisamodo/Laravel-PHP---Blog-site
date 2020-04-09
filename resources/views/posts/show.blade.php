@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-outline-warning">Go Back</a>
    <h1>{{$post->title}}</h1> 
    <img style="width:35%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div style="width:70%">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id==$post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>

    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-outline-danger'])}}
    {!!Form::close()!!}
    @endif
    @endif
@endsection