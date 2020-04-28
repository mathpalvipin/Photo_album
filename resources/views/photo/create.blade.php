@extends('layout.app')
@section('content')
 
<div class=" container">
 <h1>create new album</h1>
 <form method="post" action="{{route('photo-store')}}"  enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="title">title</label>
    <input type="text" class="form-control" id="title"  name="title" placeholder="Enter title">
   
  </div>
<input type="hidden" name="album_id" value="{{$album_id}}">
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description"  name="description" placeholder="Enter description">
   
  </div>
 
   <div class="form-group">
    <label for="photo"> Image</label>
    <input type="file" class="form-control" id="photo"  name="photo" placeholder="Enter photo">
   
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
 @endsection