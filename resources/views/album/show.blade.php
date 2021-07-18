@extends('layout.app')
@section('css')
<style type="text/css">
.heading-container{
 display: flex;
  justify-content: center;
  align-items: center;
flex-direction: column ;
}
#heading{
  text-align: center ;
     font-family:Inconsolata ;
    font-size: 5rem;
    width: 100%;
}
#description{
  text-align: center ;
     font-family:Inconsolata ;
    font-size: 1.5rem;
    width: 100%;
}
.about{
             position: absolute; 
             top: 1rem; 
             left:0;
             background: rgba(0, 0, 0, 0.5 );
             width: 100%;
  transition: all .5s ease-out;
 display: flex;
 flex-direction: column;
  justify-content: space-evenly;
  align-items: center;

           }
           .allphotos:hover  .about{
    top: 0;
  }
    .allphotos {
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
  .allphotos:hover  .btn-group{
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
           .allphotos:hover  .about{
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
  
</style>
@endsection
@section('js')<script type="text/javascript">
  
 var i = 0;
var txt =document.getElementById("description").innerHTML;
document.getElementById("description").innerHTML="";
var speed = 100;
typeWriter();
function typeWriter() {
  if (i < txt.length) {
    document.getElementById("description").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

</script>
@endsection
@section('content')
 

<div class=" container">
 
        <div  class="heading-container">
          <h1 id="heading">{{$album->name}}</h1>
          <p id="description">{{$album->description}}</p>
          <p>
            <a href="{{route('photo-create',$album->id)}}" class="btn btn-primary mr-2 ">upload photos</a>
            <a href="/" class="btn btn-secondary ">goback</a>
                     <a href="{{route('album-delete',$album->id)}}" class="btn btn-danger ml-2">delete</a>

          </p>
        </div>
    
    @if(count($album->photos)>0)
  
  <div class="row" style="margin-left: 1rem;">
    @foreach($album->photos as $photo)

  <div class="col-md-5 allphotos" 
>
          
            <img  class="img" src="/storage/album/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->cover_image}}" style="width: 100%; height: 100%;">            <div class="card-body">
             <div class="about">
                <small class="" style="color: white;font-size:2rem; padding: 0 1rem;"  >{{$photo->name}} </small>
                 <p class="card-text" style="color: white ;font-size:1rem ;  padding:  0 1rem;">{{$photo->description}}</p>
               </div>
              
                <div class="btn-group" >
                  <a type="button" class="btn btn-primary mr-2" href="{{route('photo-show',$photo->id)}}">View</a>
                  <a type="button" class="btn btn-primary mr-2" href="{{route('photo-edit',$photo->id)}}">Edit</a>
                    <a href="{{route('photo-delete',$photo->id)}}" class="btn btn-danger ">delete</a>

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