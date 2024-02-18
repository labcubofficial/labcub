<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--============================== CSS Files ==============================-->
	<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin_style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin_plugin.css') }}">
	<!--============================== CSS Files ==============================-->
	<title>Labcub | {{ isset($title)? $title : 'Create your work faster with labcub'; }}</title>
</head>
<body class="bg-gradient-primary">

	<div class="container">

		<main class="row justify-content-center">
			@yield('content')
		</main>

	</div>

</body>
</html>