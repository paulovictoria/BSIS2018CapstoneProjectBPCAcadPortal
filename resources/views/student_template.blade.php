<!Doctype html>
<html lang="en">
	<head>
		@include('partials._head')
		<title>@yield('title')</title>
		@yield('stylesheet')
	</head>

	<body>
		@include('partials._messages')
		@include('partials.student_navigation')
		@yield('content')
		@include('partials._javascript')
        @yield('script')
	</body>	
</html>