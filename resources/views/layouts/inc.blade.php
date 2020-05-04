<!DOCTYPE html>
<html>
<head>
	<title>DevProject</title>

	<?php 
	$url = Request::url();
		// $url = explode('/', str_split($url, 1));
		// $last_slash = strrpos('/', $url);
		// $last = substr($url, 0);

		// var_dump($last);die;
	?>

	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script type="text/javascript" src="/js/app.js"></script>
</head>
<body>
	<!---This navigation bar it has to be at the beginnig of body tag --->
	@include('include.navbar')

	<div class="container">
		@if(Request::is('/'))
		@include('include.intro')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">

				@unless(Request::is(['login', 'messages', 'register', 'about', 'jobs/create']))

				<div class="left-aside">
					@include('include.leftaside')
					@include('include.footer')
				</div>

				@endunless

				@include('include.message')
				@yield('content')
			</div>
			@unless(Request::is(['login', 'messages', 'about', 'jobs/create']))
			<div class="col-md-4 col-lg-4">
				@include('include.sidebar')
			</div>
			@endunless
		</div>
	</div>
</body>
</html>