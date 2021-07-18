@extends('layout.app')
@section('css')
<style type="text/css">
  .btngroup{
 width: 100%;
  display: flex;
 justify-content: space-evenly;
 align-items: center;
padding-top: 1rem;
 position: relative;
 top: -10rem;
 animation: down 1s  forwards 1s;

  }
  @keyframes down{
    0%{
      top: -10rem;
    }
    100%{
 top: 0;
    }
  }
  .container{
   display: flex;
   flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .btn{
    border-radius: 2rem;
    
  }
</style>
@endsection
@section('content')
  
  <div class="container">
<div class="btngroup">
    	<a href="{{route('album-show',$photo->album_id)}}" class="btn btn-primary">go back</a>
<a href="{{route('photo-delete',$photo->id)}}" class="btn btn-danger"> delete</a>
<a href="{{route('photo-edit',$photo->id)}}" class="btn btn-secondary"> edit</a>
</div>
<hr>
<div
class="img">
<p>size {{$photo->size}}</p>
<img src="/storage/album/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->photo}}"  style="width: 40vw; height: 30vw;">
</div>
  </div>
  @endsection