<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--============================== Jquery Files ==============================-->
	@stack('scripts')

	<!--============================== CSS Files ==============================-->
	<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_style.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin_plugin.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}">

	<title>Labcub | {{ isset($title)? $title : 'Create your work faster with labcub'; }}</title>
</head>

<body>

	<main>
		<div id="app-layout" class="overflow-x-hidden flex">

			<!-- Sidebar Start -->
			<nav class="navbar-vertical navbar">
				<div id="myScrollableElement" class="h-screen" data-simplebar>

					<a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
						<h1 style="color: #FFFFFF; font-size: 22px; padding-left: 12px;">Labcub</h1>
					</a>

					<!-- Nav Items -->
					<ul class="navbar-nav flex-col" id="sideNavbar">
						<li class="nav-item"><a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ url('admin/dashboard') }}"><img class="w-4 h-4 mr-2" src="{{ url('images/icon/dashboard.svg') }}" alt=""></i>Dashboard</a></li>
						<li class="nav-item"><a class="nav-link {{ request()->is('admin/category') ? 'active' : '' }}" href="{{ url('admin/category') }}"><img class="w-4 h-4 mr-2" src="{{ url('images/icon/menu.svg') }}" alt="">Category</a></li>
						<li class="nav-item"><a class="nav-link {{ request()->is('admin/subcategory') ? 'active' : '' }}" href="{{ url('admin/subcategory') }}"><img class="w-4 h-4 mr-2" src="{{ url('images/icon/copy.svg') }}" alt="">Subcategory</a></li>
						<li class="nav-item"><a class="nav-link {{ request()->is('admin/blog') ? 'active' : '' }}" href="{{ url('admin/blog') }}"><img class="w-4 h-4 mr-2" src="{{ url('images/icon/close.svg') }}" alt="">Subscription</a></li>
						<li class="nav-item">
							<div class="navbar-heading">Settings</div>
						</li>
						<li class="nav-item"><a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages"><img class="w-4 h-4 mr-2" src="{{ url('images/icon/dashboard.svg') }}" alt="">Profile</a></li>
					</ul>
					<!-- Nav Items -->

				</div>
			</nav>
			<!-- Sidebar End -->

			<!-- Header Start -->
			<div id="app-layout-content" class="min-h-screen w-full min-w-[100vw] md:min-w-0 ml-[15.625rem] [transition:margin_0.25s_ease-out]">
				<!-- start navbar -->
				<div class="header">
					<!-- navbar -->
					<nav class="bg-slate-800 px-6 py-[10px] flex items-center justify-between shadow-sm">
						<a id="nav-toggle" href="#" class="text-gray-800">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
							</svg>
						</a>
						<!-- navbar nav -->
						<ul class="flex ml-auto items-center">
							<div class="mr-2">
								<input type="checkbox" value="1" id="theme" class="relative w-[2.3rem] h-5 p-px bg-gray-200 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-indigo-600 checked:border-indigo-600 focus:checked:border-indigo-600 before:inline-block before:w-4 before:h-4 before:bg-white checked:before:bg-indigo-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200" checked />
								<label for="switch-default1" class="sr-only">switch</label>
							</div>
							<li class="dropdown stopevent mr-2">
								<a class="text-gray-600" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										<path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
									</svg>
								</a>
								<div class="dropdown-menu dropdown-menu-lg lg:left-auto lg:right-0" aria-labelledby="dropdownNotification">
									<div>
										<div class="border-b px-3 pt-2 pb-3 flex justify-between items-center">
											<span class="text-lg text-gray-800 font-semibold">Notifications</span>
											<a href="#">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
														<path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
														<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
													</svg>
												</span>
											</a>
										</div>
										<!-- list group -->
										<ul class="h-56" data-simplebar="">
											<!-- list group item -->
											<li class="bg-gray-100 px-3 py-2 border-b">
												<a href="#">
													<h5 class="mb-1">Rishi Chopra</h5>
													<p class="mb-0">Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.</p>
												</a>
											</li>
											<!-- list group item -->
											<li class="px-3 py-2 border-b">
												<a href="#">
													<h5 class="mb-1">Neha Kannned</h5>
													<p class="mb-0">Proin at elit vel est condimentum elementum id in ante. Maecenas et sapien metus.</p>
												</a>
											</li>
											<!-- list group item -->
											<li class="px-3 py-2 border-b">
												<a href="#">
													<h5 class="mb-1">Nirmala Chauhan</h5>
													<p class="mb-0">Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit vel pretium.</p>
												</a>
											</li>
											<!-- list group item -->
											<li class="px-3 py-2 border-b">
												<a href="#">
													<h5 class="mb-1">Sina Ray</h5>
													<p class="mb-0">Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu diam.</p>
												</a>
											</li>
										</ul>
										<div class="border-top px-3 py-2 text-center">
											<a href="#" class="text-gray-800 font-semibold">View all Notifications</a>
										</div>
									</div>
								</div>
							</li>
							<!-- list -->
							<li class="dropdown ml-2">
								<a class="rounded-full" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="w-10 h-10 relative">
										<img alt="avatar" src="{{ Auth::id() }}" class="rounded-full" />
										<div class="absolute border-gray-200 border-2 rounded-full right-0 bottom-0 bg-green-600 h-3 w-3"></div>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="dropdownUser">
									<div class="px-4 pb-0 pt-2">
										<div class="leading-4">
											<h5 class="mb-1">John E. Grainger</h5>
											<a href="#">View my profile</a>
										</div>
										<div class="border-b mt-3 mb-2"></div>
									</div>

									<ul class="list-unstyled">
										<li>
											<a class="dropdown-item" href="#">
												<i class="w-4 h-4" data-feather="user"></i>
												Edit Profile
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="#">
												<i class="w-4 h-4" data-feather="activity"></i>
												Activity Log
											</a>
										</li>

										<li>
											<a class="dropdown-item" href="#">
												<i class="w-4 h-4" data-feather="star"></i>
												Go Pro
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="#">
												<i class="w-4 h-4" data-feather="settings"></i>
												Account Settings
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="./index.html">
												<i class="w-4 h-4" data-feather="power"></i>
												Sign Out
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</nav>
				</div>
				<!-- end of navbar -->
				@yield('content')
				<footer>
					<div class="px-6 border-t border-gray-300 py-3 flex justify-between items-center">
						<p class="m-0 leading-6">
							Labcub Company
						</p>
						<a href="" target="_blank">
							<svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-gray-800">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.607 9.607 0 0 1 12 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48 3.97-1.32 6.833-5.054 6.833-9.458C22 6.463 17.522 2 12 2Z"></path>
							</svg>
						</a>
					</div>
				</footer>

			</div>
			<!-- Header End -->

		</div>
	</main>

	<!-- <div class="" style="position: absolute; top: 45%; left: 55%;">
		<div class="animate-spin inline-block w-8 h-8 border-[3px] border-current border-t-transparent text-indigo-600 rounded-full " role="status" aria-label="loading">
			<span class="sr-only">Loading...</span>
		</div>
	</div> -->

	<script src="{{ asset('js/theme.js') }}"></script>
	<script src="{{ asset('js/admin_script.js') }}"></script>
	<script>
		$('#theme').on('click', function(){
			let theme_type = $('#theme').val();
			if(theme_type == 1){
				$('#theme').val(0);
			}else{
				$('#theme').val(1);
			}
		});
	</script>
</body>

</html>