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
		<div class="menu-btn" id="menu-btn">
			<svg class="menu-svg" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 32 32"><path d="M4 10h24a2 2 0 0 0 0-4H4a2 2 0 0 0 0 4zm24 4H4a2 2 0 0 0 0 4h24a2 2 0 0 0 0-4zm0 8H4a2 2 0 0 0 0 4h24a2 2 0 0 0 0-4z" fill="#FFFFFF" class="fill-000000"></path></svg>
			<div class="menu-items" id="menu-items"></div>
		</div>
		<div class="header-label">
			<a href="{{ url('/') }}"><h1 class="header-text">Labcub</h1><a>
		</div>
		<div class="header-nav">
			<ul class="header-navigation">
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('/') ? ' header-active' : '' }}" href="{{ url('/') }}">Home</a></li>
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('') ? ' header-active' : '' }}" href="#">Service</a></li>
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('') ? ' header-active' : '' }}" href="#">Documention</a></li>
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('blogs') ? ' header-active' : '' }}" href="{{ url('blogs') }}">Blog</a></li>
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('') ? ' header-active' : '' }}" href="#">About us</a></li>
			</ul>
		</div>
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		<div class="footer-links">
			<div class="footer-nav">
				{{-- <h3 class="footer-links-header">Menu</h3> --}}
				<ul>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Home</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Service</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Documention</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Blog</a></li>
				</ul>
			</div>
			<div class="footer-nav">
				{{-- <h3 class="footer-links-header">Legal</h3> --}}
				<ul>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Privacy Policy</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Terms & conditions</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">About us</a></li>
				</ul>
			</div>
			<div class="footer-nav">
				{{-- <h3 class="footer-links-header">Social</h3> --}}
				<ul>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Instagram</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Twitter</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="#">Whatsapp</a></li>
				</ul>
			</div>
			<div class="footer-nav">
				{{-- <h3 class="footer-links-header">Newsletter</h3> --}}
				
			</div>
		</div>
		<div class="footer-copyright">
			<span class="footer-copyright-text">© {{ date('Y') }} Labcub Inc. All Rights Reserved.</span>
		</div>
	</footer>
</body>
</html>

<script type="text/javascript">
	$('#menu-btn').on('click', function(){
		$('#menu-items').toggle();
	});
</script>
