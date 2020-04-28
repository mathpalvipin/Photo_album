@extends('layout.app')
@section('content')
 <section class="jumbotron text-center" style="margin-top: -20px" >
       
          <h2 class="jumbotron-heading">THIS IS PHOTO GALLARY , CRAETE YOUR ALBUM AND UPLOAD PHOTOS </h2>
          <a class="btn btn-primary" href="{{route('album-create')}}" style="width: 50% ; ">Create</a>
        
      </section>
<div class=" container">
  @if(count($albums)>0)
  <div class="row">
    @foreach($albums as $album)
  <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="/storage/album_cover/{{$album->cover_image}}" alt="{{$album->cover_image}}" style="width: 100%; height: 200px;">            <div class="card-body">
              <p class="card-text">{{$album->description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a type="button" class="btn btn-primary mr-2" href="{{route('album-show',$album->id)}}">View</a>
                  <a type="button" class="btn btn-primary mr-2" href="{{route('album-edit',$album->id)}}">Edit</a>
                    <a href="{{route('album-delete',$album->id)}}" class="btn btn-danger ">delete</a>

                 
                </div>
                <small class="text-muted">{{$album->name}} </small>
              </div>
            </div>
          </div>
        </div>
      @endforeach
     </div>
 @else
 <h3> no album yet</h3>
 @endif
</div>
 @endsection