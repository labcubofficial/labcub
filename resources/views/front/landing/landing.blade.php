@extends('front.master.landing_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
@section('content')
<section class="bg-white dark:bg-gray-900">
	<div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
		<a href="#" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" role="alert">
			<span class="text-xs bg-primary-600 rounded-full text-green-500 px-4 py-1.5 mr-3">Latest Post</span> <span class="text-sm font-medium">Telegram bot with python and OpenAI</span>
			<svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
			</svg>
		</a>
		<h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Where Code Comes to Life: Ignite Your Passion for Programming</h1>
		<p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Navigate through our comprehensive archives to uncover gems of wisdom, stay up-to-date with the latest industry trends, and experiment with cutting-edge technologies. We empower you to innovate, experiment, and create.</p>
		<div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
			<a href="#content-section" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
				Learn more
				<svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</a>
			<a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
				<svg class="mr-2 -ml-1 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
					<path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd" />
				</svg>
				Read Blogs
			</a>
		</div>
	</div>
</section>

<section class="bg-white" id="content-section">
	<div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
		<div class="font-light text-gray-500 sm:text-lg">
			<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Innovate with Programming & Tech</h2>
			<p class="mb-4">Our blog is your source for insights into programming, artificial intelligence, and IoT. We explore the latest technologies and their applications, with a focus on third-party API integration. Whether you're interested in AI-powered applications or smart IoT devices, we offer practical tips, project ideas, and expert advice. Learn how integrating third-party APIs can unlock new functionalities and streamline your projects. Join us to discover current trends, and find out how technology is transforming the way we connect, innovate, and build the future.</p>
		</div>
		<div class="grid grid-cols-2 gap-4 mt-8">
			<img class="w-full rounded-lg" src="{{ url('images/landing_page/workspace.jpg') }}" alt="office content 1">
			<img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ url('images/landing_page/programming.jpg') }}" alt="office content 2">
		</div>
	</div>
</section>

<!-- Category Start -->
<section class="bg-white">
	<div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
		<h2 class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 md:text-4xl">Category</h2>
		<div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 justify-items-center">
			@foreach($parent_categories as $category)

			<a href="{{ url('') }}" class="w-28 h-28 text-center cursor-pointer">
				<div class="rounded" style="background-color: <?php echo $category->bg_color ?>;">
					<img class="" src="{{ asset('media/category').'/'.$category->image }}" alt="">
				</div>
				<p class="text-base p-2">{{ $category->category_name }}</p>
			</a>

			@endforeach
		</div>
	</div>
</section>
<!-- Category End -->

<!-- Blog Start -->
<div class="bg-white py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

			@foreach($blogs as $blog)
			<article class="flex max-w-xl flex-col items-start justify-between rounded border">
				<a href="{{ url('blog').'/'.$blog['category_name'].'/'.$blog['subcategory_name'].'/'.$blog['slug'] }}">
					<img class="mb-5 rounded-t" src="{{ url('media/blog').'/'.$blog['image'] }}" alt="">
				</a>
				<div class="flex items-center pr-4 pl-4 gap-x-4 text-xs">
					<a href="#" class="inline-flex items-center rounded bg-red-50 px-4 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">{{ $blog['category_name'] }}</a>
					<time datetime="2020-03-16" class="text-gray-500">{{ $blog['created_at'] }}</time>
				</div>
				<div class="group relative pr-4 pl-4">
					<h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
						<a href="{{ url('blog').'/'.$blog['category_name'].'/'.$blog['subcategory_name'].'/'.$blog['slug'] }}"><span class="absolute inset-0"></span>{{ $blog['title'] }}</a>
					</h3>
					<p class="mt-3 mb-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ $blog['short_description'] }}</p>
				</div>
			</article>
			@endforeach

		</div>
	</div>
</div>
<!-- Blog End -->

<!-- Subscription Start -->
<section class="bg-white">
	<div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
		<div class="mx-auto max-w-screen-md sm:text-center">
			<h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Sign up for our newsletter</h2>
			<p class="mx-auto mb-8 max-w-2xl font-light text-gray-500 md:mb-12 sm:text-xl">Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.</p>
			<form action="#">
				<div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
					<div class="relative w-full">
						<label for="email" class="hidden mb-2 text-sm font-medium text-gray-900">Email address</label>
						<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
							<svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
								<path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
							</svg>
						</div>
						<input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500" placeholder="Enter your email" type="email" id="email" required="">
					</div>
					<div>
						<button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white sm:rounded-none sm:rounded-r-lg bg-indigo-600">Subscribe</button>
					</div>
				</div>
				<div class="mx-auto max-w-screen-sm text-sm text-left text-gray-500 newsletter-form-footer">We care about the protection of your data. <a href="{{ url('legal/privacy_policy') }}" class="font-medium text-indigo-600 hover:underline">Read our Privacy Policy</a>.</div>
			</form>
		</div>
	</div>
</section>
<!-- Subscription End -->
@endsection