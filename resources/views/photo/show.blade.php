@extends('layout.app')
@section('content')
  
  <div class="container">

  	<h1 >{{$photo->title}}</h1>
  	<h4>{{$photo->description}} </h4>
  	<a href="{{route('album-show',$photo->album_id)}}" class="btn btn-primary">go back</a>
<a href="{{route('photo-delete',$photo->id)}}" class="btn btn-danger"> delete</a>
<a href="{{route('photo-edit',$photo->id)}}" class="btn btn-secondary"> edit</a>
<br><hr>
<p>size {{$photo->size}}</p>
<img src="/storage/album/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->photo}}" style="width: 80vw; height: 40vw;">
  </div>
  @endsection