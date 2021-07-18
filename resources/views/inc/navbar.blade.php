<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   
     <a class="navbar-brand" href="/" >PHOTO</a>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link {{ Request::is('/')?'active':''}}" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('album/create')?'active':''}}" href="{{route('album-create')}}">Create</a>
      </li>
    </ul>
    
  </div>
</nav>
<style type="text/css">

.navbar{
  z-index: 100;
  position: relative;
  height: 3rem;
}
  .navbar-brand{
position: absolute;
left: 1rem;
font-size: 2rem;
font-family: Zen Tokyo Zoo,cursive;
  }
.navbar-collapse{
position: relative;
}
.navbar-nav{
   position: absolute;
font-family: Inconsolata;
font-weight:700;
   right:1rem;
   font-size: 1.5rem;
}
</style>