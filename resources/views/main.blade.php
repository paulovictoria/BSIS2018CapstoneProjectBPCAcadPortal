<!Doctype html>
<html lang="en">
	<head>
		@include('partials._head')
		<title>@yield('title')</title>
		<style type="text/css">
		body{
			height: 660px;
			background-image:url("https://temperedglass.ee/wp-content/uploads/2016/09/Background-opera-speeddials-community-web-simple-backgrounds.jpg");
			background-repeat: repeat-x;
		}
		</style>
	</head>

	<body>
		@yield('partials._nav')
		@yield('partials._messages')
		@yield('content')
		@include('partials._javascript')
		@yield('script')
	</body>	
</html>