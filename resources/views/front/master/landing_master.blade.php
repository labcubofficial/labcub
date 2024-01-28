<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--============================== CSS Files ==============================-->
	<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<!--============================== CSS Files ==============================-->
	<!--============================== Adsense ==============================-->
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4764751757078002"
     crossorigin="anonymous"></script>
	 <!--============================== Adsense ==============================-->
	<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
	<title>Labcub | {{ isset($title)? $title : 'Create your work faster with labcub'; }}</title>
</head>
<body>
	<header>
		<div class="menu-btn" id="menu-btn">
			<img class="menu-svg" id="menu-svg" src="{{ url('images/icon/menu.svg') }}">
			<div class="menu-items" id="menu-items">
				<ul>
					<li class="header-nav-item">
						<a class="header-nav-link{{ request()->is('/') ? ' header-active' : '' }}" href="{{ url('/') }}">Home</a>
					</li>
					<li class="header-nav-item">
						<!-- <a class="header-nav-link{{ request()->is('') ? ' header-active' : '' }}" href="{{ url('/') }}">Tools</a>	 -->
					</li>
					<li class="header-nav-item">
						<a class="header-nav-link{{ request()->is('blogs') ? ' header-active' : '' }}" href="{{ url('blogs') }}">Blog</a>
					</li>
					<li class="header-nav-item">
						<a class="header-nav-link{{ request()->is('legal/about_us') ? ' header-active' : '' }}" href="{{ url('legal/about_us') }}">About Us</a>
					</li>
					<li class="header-nav-item">
						<a class="header-nav-link{{ request()->is('') ? ' header-active' : '' }}" href="{{ url('/') }}">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="header-label">
			<a href="{{ url('/') }}"><h1 class="header-text">Labcub</h1></a>
		</div>
		<div class="menu-btn" id="menu-btn">
			<a target="_blank" href="https://api.whatsapp.com/send/?phone=8680808190&text=urlencodedtext&type=phone_number&app_absent=0">
				<img class="menu-svg" src="{{ url('images/social/whatsapp.svg') }}">
			</a>
		</div>
		<div class="header-nav">
			<ul class="header-navigation">
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('/') ? ' header-active' : '' }}" href="{{ url('/') }}">Home</a></li>
				<!-- <li class="header-nav-item"><a class="header-nav-link{{ request()->is('') ? ' header-active' : '' }}" href="#">Tools</a></li> -->
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('blogs') ? ' header-active' : '' }}" href="{{ url('blogs') }}">Blogs</a></li>
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('legal/about_us') ? ' header-active' : '' }}" href="{{ url('legal/about_us') }}">About us</a></li>
				<li class="header-nav-item"><a class="header-nav-link{{ request()->is('') ? ' header-active' : '' }}" href="#">Contact Us</a></li>
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
						<a class="footer-nav-item" href="https://www.facebook.com/people/Labcub/61552744947842/" target="_blank">
							<img class="social-icon" src="{{ url('images/social/facebook.svg') }}">
						</a>
					</li>
					<li class="footer-nav-list">
						<a class="footer-nav-item" href="https://www.twitter.com/labcub_official" target="_blank">
							<img class="social-icon" src="{{ url('images/social/twitter.svg') }}">
						</a>
					</li>
					<li class="footer-nav-list">
						<a class="footer-nav-item" href="https://www.instagram.com/labcub.in/" target="_blank">
							<img class="social-icon" style="color: #FFF;" src="{{ url('images/social/instagram.svg') }}">
						</a>
					</li>
					<li class="footer-nav-list">
						<a class="footer-nav-item" href="https://api.whatsapp.com/send/?phone=8680808190&text=urlencodedtext&type=phone_number&app_absent=0" target="_blank">
							<img class="social-icon" src="{{ url('images/social/whatsapp.svg') }}">
						</a>
					</li>
				</ul>
			</div>
			<div class="footer-nav footer-menus">
				{{-- <h3 class="footer-links-header">Menu</h3> --}}
				<ul>
					<li class="footer-nav-list"><a class="header-nav-link{{ request()->is('/') ? ' header-active' : '' }}" href="{{ url('/') }}">Home</a></li>
					<!-- <li class="footer-nav-list"><a class="header-nav-link{{ request()->is('') ? ' header-active' : '' }}" href="#">Tools</a></li> -->
					<li class="footer-nav-list"><a class="header-nav-link{{ request()->is('blogs') ? ' header-active' : '' }}" href="{{ url('blogs') }}">Blogs</a></li>
					<li class="footer-nav-list"><a class="header-nav-link{{ request()->is('') ? ' header-active' : '' }}" href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="footer-nav">
				{{-- <h3 class="footer-links-header">Legal</h3> --}}
				<ul>
					<li class="footer-nav-list"><a class="header-nav-link{{ request()->is('legal/privacy_policy') ? ' header-active' : '' }}" href="{{ url('legal/privacy_policy') }}">Privacy Policy</a></li>
					<li class="footer-nav-list"><a class="header-nav-link{{ request()->is('legal/terms_and_condition') ? ' header-active' : '' }}" href="{{ url('legal/terms_and_condition') }}">Terms & conditions</a></li>
					<li class="footer-nav-list"><a class="header-nav-link{{ request()->is('legal/about_us') ? ' header-active' : '' }}" href="{{ url('legal/about_us') }}">About us</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-copyright">
			<span class="footer-copyright-text">© {{ date('Y') }} Labcub Company. All Rights Reserved.</span>
		</div>
	</footer>
	
	<script src="{{ asset('js/script.js') }}"></script>
	<script src="{{ asset('js/code_viewer.js') }}"></script>
	
	<script type="text/javascript">
		$('#menu-btn').on('click', function(){
			$('#menu-items').toggle();

			if($('#menu-items').css('display') == 'none'){
				$('#menu-svg').attr('src', 'images/icon/menu.svg');
			}else{
				$('#menu-svg').attr('src', 'images/icon/close.svg');
			}
		});
	</script>
</body>
</html>
