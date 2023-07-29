@extends('front.master.landing_master')

@section('content')
	
	{{-- Banner Start --}}
	<section class="banner">
		<h1>I explain and teach tech technology, solve tech problems and help you make gadget buying decisions.</h1>
		<input type="text" name="search" placeholder="Search anything..." class="search">
	</section>
	{{-- Banner End --}}

	{{-- Overview Start --}}
	<section class="overview">
		<h1>Ready to get started?</h1>
		<p>Explore Labcub, or create an account instantly and start accepting payments. You can also contact us to design a custom package for your business.</p>
		<div>
			<button class="btn">Start Now</button>
			<button class="btn">Contact Sale</button>
		</div>
	</section>
	{{-- Overview End --}}

	{{-- Category Start --}}
	<section class="category">
		<h1 class="lc-header">Category</h1>
		<div class="category-grid">
			@foreach($parent_categories as $parent_category)
				<div class="category-item">
					<img class="category-image" src="{{ url('assets/images/category/'.$parent_category->image) }}">
					<span>{{ $parent_category->category_name }}</span>
					<span></span>
				</div>
			@endforeach
		</div>
		
	</section>
	{{-- Category End --}}

	{{-- Blog Start --}}
	<section class="blogs">
		<h1 class="lc-header">Recent Post</h1>

		@foreach($blogs as $blog)
		<a href="{{ url('blog/'.$blog->id) }}" target="_blank" class="lc-blog-link">
			<div class="lc-blog-card">
				<div class="lc-blog-contain">
					<div class="lc-blog-image">
						<img src="{{ url('assets/images/blog/'.$blog->image) }}" class="lc-blog-img" alt="blog title">
					</div>
					<div class="lc-blog-content">
						<span class="lc-blog-category">Laravel</span>
						<h1 class="lc-blog-title">{{ $blog->title }}</h1>
						<span class="lc-blog-desc">{{ $blog->short_description }}</span>
					</div>
				</div>
				<div></div>
			</div>
		</a>
		@endforeach

	</section>
	{{-- Blog Start --}}

	{{-- Subscribe Start --}}
	<section class="subscribe">
		<h1 class="lc-header">Subscribe</h1>

		
	</section>
	{{-- Subscribe Start --}}

@endsection
