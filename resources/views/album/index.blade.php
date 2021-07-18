@extends('layout.app')
@section('css')
<style type="text/css">
  .allalbums {
   position:relative;
    padding: 0;
     margin: 1rem 1rem; 
     overflow: hidden; 
  min-width: 500px;
  }
  .btn-group{ width: 100%;
    padding: 1rem;
  position:absolute; 
  bottom: -10rem; 
  left: 0;
  transition: all .5s ease-out;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
             background: rgba(0, 0, 0, 0.5 );
    


  }
  .allalbums:hover  .btn-group{
    bottom: 1rem;
  }
  .about{
             position: absolute; 
             top: -10rem; 
             left:0;
             background: rgba(0, 0, 0, 0.5 );
             width: 100%;
  transition: all .5s ease-out;
 display: flex;
 flex-direction: column;
  justify-content: space-evenly;
  align-items: center;

           }
           .allalbums:hover  .about{
    top: 0;
  }
  .container{
     width: 100%;
     padding: 0px 0px;
  }
  .img{
  transition: all .5s ease-out;

  }
  .img:hover{
    opacity: .6;
  }
  #heading{
      text-align: center ;
     font-family:Inconsolata ;
    font-size: 3rem;
    width: 100%;

  }
  .btn{
    border-radius: 2rem;
    
  }
  
</style>
@endsection
@section("js")
<script type="text/javascript">
 var i = 0;
var txt =document.getElementById("heading").innerHTML;
document.getElementById("heading").innerHTML="";
var speed = 80;
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
 <section class="text-center" 
 style="
  width: 100%;
height:30vh;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;

background: rgba(257, 257, 257, 0.3)

 " 
 >
<h2  id="heading">THIS IS PHOTO GALLARY 
</h2>
<h2 id="heading"> CREATE  ALBUM AND UPLOAD PHOTOS
</h2>


<a class="btn btn-primary " href="{{route('album-create')}}" 
style="width: 30% ;
font-family: Inconsolata;
font-weight:700;

color: blue;
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,248,230,1) 0%, rgba(255,178,0,1) 100%);
box-shadow: 9px 7px 24px -4px rgba(0,0,0,0.52);
-webkit-box-shadow: 9px 7px 24px -4px rgba(0,0,0,0.52);
-moz-box-shadow: 9px 7px 24px -4px rgba(0,0,0,0.52);
" 
>
Create Album
</a>
        
      </section>
<div class="container">
  @if(count($albums)>0)
  <div class="row" style="margin-left: 1rem;">
    @foreach($albums as $album)
  <div class="col-md-5 allalbums" 
>
          
            <img  class="img" src="/storage/album_cover/{{$album->cover_image}}" alt="{{$album->cover_image}}" style="width: 100%; height: 100%;">            <div class="card-body">
             <div class="about">
                <small class="" style="color: white;font-size:2rem; padding: 0 1rem;"  >{{$album->name}} </small>
                 <p class="card-text" style="color: white ;font-size:1rem ;  padding:  0 1rem;">{{$album->description}}</p>
               </div>
              
                <div class="btn-group" >
                  <a type="button" class="btn btn-primary mr-2" href="{{route('album-show',$album->id)}}">View</a>
                  <a type="button" class="btn btn-primary mr-2" href="{{route('album-edit',$album->id)}}">Edit</a>
                    <a href="{{route('album-delete',$album->id)}}" class="btn btn-danger ">delete</a>

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