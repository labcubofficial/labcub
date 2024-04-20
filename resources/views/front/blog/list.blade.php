@extends('front.master.landing_master')

@section('content')
	<!-- Blog Start -->
	<div class="bg-white py-24 sm:py-32">
		<div class="mx-auto max-w-8xl px-6 lg:px-8">
			<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-gray-200 sm:mt-8 sm:pt-8 lg:mx-0 lg:max-w-none lg:grid-cols-4">

				@foreach($blogs as $blog)
					<article class="flex max-w-xl flex-col items-start justify-between border-2 rounded">
						<img src="{{ url('media/blog').'/'.$blog['image'] }}" alt="" class="h-full w-full">
						<div class="flex items-center gap-x-4 text-xs pr-2 pl-2 pt-2">
							<time datetime="2020-03-16" class="text-gray-500">{{ $blog['created_at'] }}</time>
							<a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $blog['category_name'] }}</a>
						</div>
						<div class="group relative pr-2 pl-2 pb-2">
							<h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
								<a href="#">
									<span class="absolute inset-0"></span>{{ $blog['title'] }}</a>
							</h3>
							<p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ $blog['short_description'] }}</p>
						</div>
					</article>
				@endforeach

			</div>
		</div>
	</div>
	<!-- Blog End -->
@endsection