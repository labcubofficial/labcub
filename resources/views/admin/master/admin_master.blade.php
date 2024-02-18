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
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin_plugin.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">

	<title>Labcub | {{ isset($title)? $title : 'Create your work faster with labcub'; }}</title>
</head>

<body>
	<div id="wrapper">

		<!-- sidebar menu start -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-text mx-3">Labcub</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
				<a class="nav-link" href="{{ url('admin/dashboard') }}">
					<i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span>
				</a>
			</li>

			<li class="nav-item {{ request()->is('admin/category') ? 'active' : '' }}">
				<a class="nav-link" href="{{ url('admin/category') }}">
				<i class="fas fa-snowflake"></i><span>Category</span>
				</a>
			</li>

			<li class="nav-item {{ request()->is('admin/subcategory') ? 'active' : '' }}">
				<a class="nav-link" href="{{ url('admin/subcategory') }}">
				<i class="fas fa-snowflake"></i><span>Subcategory</span>
				</a>
			</li>

			<li class="nav-item {{ request()->is('admin/blog') ? 'active' : '' }}">
				<a class="nav-link" href="{{ url('admin/blog') }}">
				<i class="fas fa-sticky-note"></i><span>Blog</span>
				</a>
			</li>

			<li class="nav-item {{ request()->is('admin/subscription') ? 'active' : '' }}">
				<a class="nav-link" href="{{ url('admin/subscription') }}">
				<i class="fas fa-spa"></i><span>Subscription</span>
				</a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">Settings</div>

			<!-- Nav Item - Charts -->
			<li class="nav-item">
				<a class="nav-link" href="charts.html">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>Charts</span></a>
			</li>

			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link" href="tables.html">
					<i class="fas fa-fw fa-table"></i>
					<span>Tables</span></a>
			</li>

		</ul>
		<!-- sidebar menu end -->

		<!-- header start -->
		<div id="content-wrapper" class="d-flex flex-column">

			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
								<img class="img-profile rounded-circle" src="">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
									Activity Log
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				@yield('content')

			</div>

			<!-- footer start -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>&copy; {{ date('Y') }} Labcub company. All Rights Reserved.</span>
					</div>
				</div>
			</footer>
			<!-- footer end -->

		</div>
		<!-- header end -->

	</div>
</body>

</html>