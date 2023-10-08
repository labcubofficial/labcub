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
				<li class="sidebar-nav-item"><a href="{{ url('admin/dashboard') }}" class="sidebar-nav-link">
					<svg class="sidebar-icon{{ request()->is('admin/dashboard') ? ' sidebar-active' : '' }}" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z"/></svg>
				</a></li>
				<li class="sidebar-nav-item"><a href="{{ url('admin/category') }}" class="sidebar-nav-link">
					<svg class="sidebar-icon{{ request()->is('admin/category') ? ' sidebar-active' : '' }}" enable-background="new 0 0 32 32" id="svg2" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="category"><polygon points="20,20 20,12 12,12 12,14 8,14 8,10 10,10 10,2 2,2 2,10 6,10 6,26 12,26 12,30 20,30 20,22 12,22 12,24.001 8,24    8,16 12,16 12,20  "/></g></svg>
				</a></li>
				<li class="sidebar-nav-item"><a href="{{ url('admin/subcategory') }}" class="sidebar-nav-link">
					<svg class="sidebar-icon{{ request()->is('admin/subcategory') ? ' sidebar-active' : '' }}" enable-background="new 0 0 32 32" id="svg2" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="category_x5F_add"><g><polygon points="28,22 24.002,22 24.002,18 22,18 22,22 18,22 18,24 22,24 22,28 24.002,28 24.002,24 28,24   "/></g><path d="M23,14c-1.054,0-2.061,0.19-3,0.522V12h-8v2H8v-4h2V2H2v8h4v15.999h6V30h5.349c1.545,1.248,3.51,1.999,5.651,2   c4.971-0.002,8.998-4.029,9-9C31.998,18.027,27.971,14,23,14z M14.059,22H12v2H8.001L8,15.998h4V20h2.522   C14.297,20.638,14.135,21.306,14.059,22z M23,29.883c-3.801-0.009-6.876-3.084-6.885-6.883c0.009-3.801,3.084-6.876,6.885-6.885   c3.799,0.009,6.874,3.084,6.883,6.885C29.874,26.799,26.799,29.874,23,29.883z"/></g></svg>
				</a></li>
				<li class="sidebar-nav-item"><a href="{{ url('admin/blog') }}" class="sidebar-nav-link">
					<svg class="sidebar-icon{{ request()->is('admin/blog') ? ' sidebar-active' : '' }}" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 3H5c-1.103 0-2 .897-2 2v4h18V5c0-1.103-.897-2-2-2zM3 19c0 1.103.897 2 2 2h8V11H3v8zm12 2h4c1.103 0 2-.897 2-2v-8h-6v10z"/></svg>
				</a></li>
				<li class="sidebar-nav-item"><a href="{{ url('admin/subscription') }}" class="sidebar-nav-link">
					<svg class="sidebar-icon{{ request()->is('admin/subscription') ? ' sidebar-active' : '' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280 320-200v-80L480-520 160-720v80l320 200Z"/></svg>
				</a></li>
				<li class="sidebar-nav-item"><a href="" class="sidebar-nav-link">
					<svg class="sidebar-icon{{ request()->is('admin/') ? ' sidebar-active' : '' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M120-120v-80l80-80v160h-80Zm160 0v-240l80-80v320h-80Zm160 0v-320l80 81v239h-80Zm160 0v-239l80-80v319h-80Zm160 0v-400l80-80v480h-80ZM120-327v-113l280-280 160 160 280-280v113L560-447 400-607 120-327Z"/></svg>
				</a></li>
				<li class="sidebar-nav-item"><a href="" class="sidebar-nav-link">
					<svg class="sidebar-icon{{ request()->is('admin/') ? ' sidebar-active' : '' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm112-260q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Z"/></svg>
				</a></li>
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