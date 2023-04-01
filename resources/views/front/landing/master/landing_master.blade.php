<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--============================== CSS Files ==============================-->
	<link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">
	<!--============================== CSS Files ==============================-->
	<title>Labcub | {{ isset($title)? $title : 'Create your work faster with labcub'; }}</title>
</head>
<body>
	<header>
		<div class="header-label">
			<h1 class="header-text">Labcub</h1>
		</div>
		<div class="header-nav">
			<ul class="header-navigation">
				<li class="header-nav-item"><a class="header-nav-link active" href="#">Home</a></li>
				<li class="header-nav-item"><a class="header-nav-link" href="#">Documention</a></li>
				<li class="header-nav-item"><a class="header-nav-link" href="#">Blog</a></li>
				<li class="header-nav-item"><a class="header-nav-link" href="#">About us</a></li>
				<li class="header-nav-item"><a class="header-nav-link" href="#">Contact</a></li>
			</ul>
		</div>
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		<h1 class="header-text">Footer</h1>
		<div class="footer-copyright">
			<span class="footer-copyright-text">© {{ date('Y') }} Labcub Inc. All Rights Reserved.</span>
		</div>
	</footer>
</body>
</html>