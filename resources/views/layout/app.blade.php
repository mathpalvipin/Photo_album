<!DOCTYPE html>
<html lang="en" dir="ltr"> 
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<meta charset="utf-8">
	<title> PHOTOSHOP</title>
</head>
<body>
	@include('inc.navbar')
	<br>
@include('inc.message')
<div class="container">
	@yield('content')
</div>
</body>
<footer class="text-center"> copyright 2020</footer>
</html>