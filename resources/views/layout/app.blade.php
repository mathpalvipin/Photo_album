<!DOCTYPE html>
<html lang="en" dir="ltr"> 
<head>

	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<meta charset="utf-8">
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400&family=Zen+Tokyo+Zoo&display=swap');
	.content{
		background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(203,203,232,1) 0%, rgba(0,212,255,1) 100%);

height: auto;
width: 100%;
min-height: 100vh;
flex-direction: column;
justify-content: center;
align-items: center;
	}
</style>
@yield('css')
	<title> PHOTOSHOP</title>
</head>
<body>
	<div >
	@include('inc.navbar')</div>

@include('inc.message')
<div  class="content" 
style="margin: 0 0;">
	@yield('content')
</div>
@yield('js')


</body>

</html>