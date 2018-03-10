<!Doctype html>
<html lang="en">
	<head>
		@include('partials._head')
		<title>@yield('title')</title>
	</head>

	<body>
		@yield('partials._nav')
		@yield('partials._messages')
		@yield('content')
		@include('partials._javascript')
		@yield('script')
	</body>	
</html>