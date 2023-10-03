<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--============================== CSS Files ==============================-->
	<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<!--========================= Google tag (gtag.js) =========================-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-55HX7LRGJ7"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-55HX7LRGJ7');
	</script>

	<!--============================== CSS Files ==============================-->
	<title>Labcub | {{ isset($title)? $title : 'Create your work faster with labcub'; }}</title>
</head>
<body>
	<header>
		<div class="menu-btn" id="menu-btn">
			<img class="menu-svg" src="{{ url('images/social/menu.svg') }}">
			<div class="menu-items" id="menu-items"></div>
		</div>
		<div class="header-label">
			<a href="{{ url('/') }}"><h1 class="header-text">Labcub</h1><a>
		</div>
		<div class="menu-btn" id="menu-btn">
			<img class="menu-svg" src="{{ url('images/social/whatsapp.svg') }}">
		</div>
		<div class="header-nav">
			<ul class="header-navigation">
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('/') ? ' header-active' : '' }}" href="{{ url('/') }}">Home</a></li>
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('') ? ' header-active' : '' }}" href="#">Service</a></li>
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('') ? ' header-active' : '' }}" href="#">Documention</a></li>
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('blogs') ? ' header-active' : '' }}" href="{{ url('blogs') }}">Blog</a></li>
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('legal/about_us') ? ' header-active' : '' }}" href="{{ url('legal/about_us') }}">About us</a></li>
			</ul>
		</div>
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		<div class="footer-links">
			<div class="footer-nav footer-brand">
				<a href="{{ url('/') }}"><h1 class="header-text">Labcub</h1><a>

				<ul class="social-icons">
					<li class="footer-nav-list">
						<a class="footer-nav-item" href="https://wa.me/message/JFPMRMHADAZ6B1" target="_blank">
							<img class="social-icon" src="{{ url('images/social/facebook.svg') }}">
						</a>
					</li>
					<li class="footer-nav-list">
						<a class="footer-nav-item" href="https://www.twitter.com/labcub_official" target="_blank">
							<img class="social-icon" src="{{ url('images/social/twitter.svg') }}">
						</a>
					</li>
					<li class="footer-nav-list">
						<a class="footer-nav-item" href="https://www.instagram.com/labcub_official" target="_blank">
							<img class="social-icon" style="color: #FFF;" src="{{ url('images/social/instagram.svg') }}">
						</a>
					</li>
					<li class="footer-nav-list">
						<a class="footer-nav-item" href="https://wa.me/message/JFPMRMHADAZ6B1" target="_blank">
							<img class="social-icon" src="{{ url('images/social/whatsapp.svg') }}">
						</a>
					</li>
				</ul>
			</div>
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
					<li class="footer-nav-list"><a class="footer-nav-item" href="{{ url('legal/privacy_policy') }}">Privacy Policy</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="{{ url('legal/terms_and_condition') }}">Terms & conditions</a></li>
					<li class="footer-nav-list"><a class="footer-nav-item" href="{{ url('legal/about_us') }}">About us</a></li>
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

{{-- <script type="text/javascript">
	$('#menu-btn').on('click', function(){
		$('#menu-items').toggle();
	});
</script> --}}
