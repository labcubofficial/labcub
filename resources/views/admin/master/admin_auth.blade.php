<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--============================== CSS Files ==============================-->
	<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}">
	<!--============================== CSS Files ==============================-->
	<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
	<title>Labcub | {{ isset($title)? $title : 'Create your work faster with labcub'; }}</title>
</head>
<body>

	<div class="flex flex-col items-center justify-center g-0 h-screen px-4">
		@yield('content')	
	</div>

</body>
</html>