@extends('front.landing.master.landing_master')

@section('content')
	
	{{-- Banner Start --}}
	<section class="banner">
		<h1>Banner</h1>
	</section>
	{{-- Banner End --}}

	{{-- Overview Start --}}
	<section class="overview">
		<h1>Overview</h1>
		<span>Our website is a digital platform that provides information, products, or services to its users. It can be accessed through the internet using a web browser on a computer or mobile device. The content on the website can vary depending on the purpose of the site, but it generally aims to inform or entertain its visitors. Our website may also have features like a search bar, contact forms, and social media links to enhance user experience and engagement.</span>
	</section>
	{{-- Overview End --}}

	{{-- Category Start --}}
	<section class="category">
		@foreach($parent_categories as $parent_category)
		<div class="card lc-card">
			<span>{{ isset($parent_category->image)?url('asset/images/category/'.$parent_category->image):url('asset/images/category/blank.png'); }}</span>
			<h1>{{ $parent_category->category_name }}</h1>
		</div>
		@endforeach
	</section>
	{{-- Category End --}}

	{{-- SubCategory Start --}}
	<section class="subcategory">
		@foreach($sub_categories as $sub_category)
		<div class="card lc-card">
			<span>{{ isset($sub_category->image)?url('asset/images/category/'.$sub_category->image):url('asset/images/category/blank.png'); }}</span>
			<h1>{{ $sub_category->category_name }}</h1>
		</div>
		@endforeach
	</section>
	{{-- SubCategory End --}}

	{{-- Blog Start --}}
	<section class="blogs">
		@foreach($blogs as $blog)
		<div class="card lc-blog-card">
			<div class="lc-blog-contain">
				<div class="lc-blog-image">
					<span>{{ $blog->image }}</span>
				</div>
				<div class="lc-blog-desc">
					<h1>{{ $blog->title }}</h1>
					<span>{{ $blog->short_description }}</span>
					{{-- <span>{!! $blog->body !!}</span> --}}
					<span>{{ $blog->image }}</span>
					<span>{{ $blog->category_id }}</span>
					<span>{{ $blog->subcategory_id }}</span>
				</div>
			</div>
		</div>
		@endforeach
	</section>
	{{-- Blog Start --}}

	{{-- Subscribe Start --}}
	<section class="subscribe">
		<h1>Subscribe</h1>
	</section>
	{{-- Subscribe Start --}}

@endsection
