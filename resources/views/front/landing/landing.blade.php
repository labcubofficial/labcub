@extends('front.landing.master.landing_master')

@section('content')
	
	{{-- Banner Start --}}
	<section class="banner">
		<h1>Build Your project with </h1>
	</section>
	{{-- Banner End --}}

	{{-- Overview Start --}}
	<section class="overview">
		<h1>Ready to get started?</h1>
		<p>Explore Labcub, or create an account instantly and start accepting payments. You can also contact us to design a custom package for your business.</p>
		<div>
			<button>Start Now</button>
			<button>Contact Sale</button>
		</div>
	</section>
	{{-- Overview End --}}

	{{-- Category Start --}}
	<section class="category">
		<h1 class="lc-header">Category</h1>

		{{-- @foreach($parent_categories as $parent_category)
		<div class="card lc-card">
			<span>{{ isset($parent_category->image)?url('asset/images/category/'.$parent_category->image):url('asset/images/category/blank.png'); }}</span>
			<h1>{{ $parent_category->category_name }}</h1>
		</div>
		@endforeach --}}
	</section>
	{{-- Category End --}}

	{{-- SubCategory Start --}}
	<section class="subcategory">
		{{-- <h1 class="lc-header">Sub Category</h1>

		<div class="category-label">
			<div>
				<div class="category-item">Laravel Route</div>
			</div>
		</div> --}}
	</section>
	{{-- SubCategory End --}}

	{{-- Blog Start --}}
	<section class="blogs">
		<h1 class="lc-header">Recent Post</h1>

		@foreach($blogs as $blog)
		<a href="{{ url('blog/'.$blog->id) }}" target="_blank" class="lc-blog-link">
			<div class="lc-blog-card">
				<div class="lc-blog-contain">
					<div class="lc-blog-image">
						<img src="{{ url('asset/images/blog/'.$blog->image) }}" class="lc-blog-img" alt="blog title">
					</div>
					<div class="lc-blog-content">
						<h1 class="lc-blog-title">{{ $blog->title }}</h1>
						<span class="lc-blog-category">{{ $blog->category_id }}</span>
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
