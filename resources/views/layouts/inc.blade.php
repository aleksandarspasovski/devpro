<!DOCTYPE html>
<html>
<head>
	<title>DevProject</title>
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
		@unless(Request::is(['login', 'messages', 'register', 'about']))
			<div class="left-aside">
				@include('include.leftaside')
				@include('include.footer')
			</div>
			@endunless
				@include('include.message')
				@yield('content')
			</div>
			@unless(Request::is(['login', 'messages, about']))
				<div class="col-md-4 col-lg-4">
					@include('include.sidebar')
				</div>
			@endunless
		</div>
	</div>
</body>
</html>
