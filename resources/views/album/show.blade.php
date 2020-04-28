@extends('layout.app')
@section('content')
 
  <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">{{$album->name}}</h1>
          <p class="lead text-muted">{{$album->description}}</p>
          <p>
            <a href="{{route('photo-create',$album->id)}}" class="btn btn-primary mr-2 ">upload photos</a>
            <a href="/" class="btn btn-secondary ">goback</a>
                     <a href="{{route('album-delete',$album->id)}}" class="btn btn-danger ml-2">delete</a>

          </p>
        </div>
      </section>
<div class=" container">

  @if(count($album->photos))
  
  <div class="row">
    @foreach($album->photos as $photo)

  <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="/storage/album/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->photo}}" style="width: 100%; height: 200px;">            <div class="card-body">
              <p class="card-text">{{$photo->description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a type="button" class="btn btn-primary mr-2" href="{{route('photo-show',$photo->id)}}">View</a>
                 <a href="{{route('photo-delete',$photo->id)}}" class="btn btn-danger "> delete</a>
<a href="{{route('photo-edit',$photo->id)}}" class="btn btn-secondary ml-2"> edit</a>

                </div>
                <small class="text-muted">{{$photo->name}} </small>
              </div>
            </div>
          </div>
        </div>
      @endforeach
     </div>
 @else
 <h1> no photo yet</h1>
 @endif
</div>
 @endsection