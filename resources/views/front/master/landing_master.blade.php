<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--============================== CSS Files ==============================-->
	<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<!--============================== CSS Files ==============================-->
	<title>Labcub | {{ isset($title)? $title : 'Create your work faster with labcub'; }}</title>
</head>
<body>
	<header>
		<div class="header-label">
			<a href="{{ url('/') }}"><h1 class="header-text">Labcub</h1><a>
		</div>
		<div class="header-nav">
			<ul class="header-navigation">
				<li class="header-nav-item"><a class="header-nav-link" href="#">Product</a></li>
				<li class="header-nav-item"><a class="header-nav-link" href="#">Service</a></li>
				<li class="header-nav-item"><a class="header-nav-link" href="#">Documention</a></li>
				<li class="header-nav-item"><a class="header-nav-link" href="#">Blog</a></li>
				<li class="header-nav-item"><a class="header-nav-link" href="#">About us</a></li>
			</ul>
		</div>
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		<div class="footer-links">
			<div class="footer-nav">
				<span class="footer-links-header">Menu</span>
				<ul>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Product</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Service</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Documention</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Blog</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">About us</a></li>
				</ul>
			</div>
			<div class="footer-nav">
				<span class="footer-links-header">Legal</span>
				<ul>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Privacy Policy</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Terms & conditions</a></li>
				</ul>
			</div>
			<div class="footer-nav">
				<span class="footer-links-header">Social</span>
				<ul>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Instagram</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Twitter</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Whatsapp</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-copyright">
			<span class="footer-copyright-text">© {{ date('Y') }} Labcub Inc. All Rights Reserved.</span>
		</div>
	</footer>
</body>
</html>