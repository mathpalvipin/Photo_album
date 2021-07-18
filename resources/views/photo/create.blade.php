@extends('layout.app')
@section('css')
<style type="text/css">
.container{
  padding-top: 2rem;
  max-width: 800px;
}
.form-group{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
 
}
 ::placeholder {
  font-size: 1rem;
  text-align: center;
}
  label{
    font-size: 2rem;
    font-family: Inconsolata;
   align-self: center;
  }

  .form-control{
    border-radius: 2rem;

  }
  #heading{
    text-align: center ;
     font-family:Inconsolata ;
    font-size: 3rem;
    width: 100%;
   
    overflow: hidden;
  }
  #heading:hover{
    width: 100%;
  }

.btn{
   margin-top: 1rem;
   width: 20vw;
    border-radius: 2rem;
   font-family: Inconsolata;
font-weight:700;

color: blue;
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,248,230,1) 0%, rgba(255,178,0,1) 100%);
box-shadow: 9px 7px 24px -4px rgba(0,0,0,0.52);
-webkit-box-shadow: 9px 7px 24px -4px rgba(0,0,0,0.52);
-moz-box-shadow: 9px 7px 24px -4px rgba(0,0,0,0.52);
}
</style>

@endsection
@section("js")
<script type="text/javascript">
 var i = 0;
var txt =document.getElementById("heading").innerHTML;
document.getElementById("heading").innerHTML="";
var speed = 50;
typeWriter();
function typeWriter() {
  if (i < txt.length) {
    document.getElementById("heading").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>
@endsection
@section('content')
 
<div class=" container">
 <h1 id='heading'>Add Photo</h1>
 <form method="post" action="{{route('photo-store')}}"  enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
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
   <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
  
</form>


</div>
 @endsection