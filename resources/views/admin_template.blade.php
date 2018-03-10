<!Doctype html>
<html lang="en">
	<head>
		@include('partials._head')
		@yield('stylesheets')
		<title>BPC Portal | @yield('title')</title>
	</head>

	<body>
		@include('partials._navigation')
		@yield('partials._messages')
		@yield('content')
		@include('partials._javascript')
		@yield('script')
	</body>	
</html>