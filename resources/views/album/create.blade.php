@extends('layout.app')
@section('content')
 
<div class=" container">
 <h1>create new album</h1>
 <form method="post" action="{{route('album-store')}}"  enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  name="name" placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description"  name="description" placeholder="Enter description">
   
  </div> <div class="form-group">
    <label for="cover_image">Cover Image</label>
    <input type="file" class="form-control" id="cover_image"  name="cover_image" placeholder="Enter cover_image">
   
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
 @endsection