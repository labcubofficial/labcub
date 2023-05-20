<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--============================== Jquery Files ==============================-->
	@stack('scripts')
	
	<!--============================== CSS Files ==============================-->
	<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin_style.css') }}">
	
	<title>Labcub | {{ isset($title)? $title : 'Create your work faster with labcub'; }}</title>
</head>
<body>
	<header>
		<div class="header">
			<h1>Labcub</h1>
		</div>
		<div class="header-logout">
			<a class="header-logout-link" href="{{ url('admin/logout') }}">Logout</a>
		</div>
	</header>
	<div class="content-flex">
		<div class="sidebar">
			<nav>
				<li class="sidebar-nav-item"><a href="{{ url('admin/dashboard') }}" class="sidebar-nav-link{{ request()->is('admin/dashboard') ? ' sidebar-active' : '' }}">Dashboard</a></li>
				<li class="sidebar-nav-item"><a href="{{ url('admin/category') }}" class="sidebar-nav-link{{ request()->is('admin/category') ? ' sidebar-active' : '' }}">Category</a></li>
				<li class="sidebar-nav-item"><a href="{{ url('admin/subcategory') }}" class="sidebar-nav-link{{ request()->is('admin/subcategory') ? ' sidebar-active' : '' }}">Sub Category</a></li>
				<li class="sidebar-nav-item"><a href="{{ url('admin/blog') }}" class="sidebar-nav-link{{ request()->is('admin/blog') ? ' sidebar-active' : '' }}">Blog</a></li>
				<li class="sidebar-nav-item"><a href="" class="sidebar-nav-link{{ request()->is('admin/') ? ' sidebar-active' : '' }}">Monitization</a></li>
				<li class="sidebar-nav-item"><a href="" class="sidebar-nav-link{{ request()->is('admin/') ? ' sidebar-active' : '' }}">Settings</a></li>
					<ul class="" style="padding-left: 1em; list-style: none;">
						<li class="sidebar-nav-item"><a href="" class="sidebar-nav-link{{ request()->is('admin/') ? ' sidebar-active' : '' }}">Accounts</a></li>
						<li class="sidebar-nav-item"><a href="" class="sidebar-nav-link{{ request()->is('admin/') ? ' sidebar-active' : '' }}">Third-Party</a></li>
					</ul>
			</nav>
		</div>
		<main>
			@yield('content')
		</main>
	</div>
	<footer>
		<div class="footer-copyright">
			<span class="footer-copyright-text">© {{ date('Y') }} Labcub Inc. All Rights Reserved.</span>
		</div>
	</footer>
</body>
</html>