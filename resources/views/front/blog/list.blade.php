@extends('front.master.landing_master')

@section('content')
	<div class="blog-cards">
		@foreach($blogs as $blog)
			<a href="{{ url('blog/'.$blog['category_name'].'/'.$blog['subcategory_name'].'/'.$blog['slug']) }}" class="lc-blog-link">
				<div class="lc-blog-card">
					<div class="lc-blog-contain">
						<div class="lc-blog-image">
							<img src="{{ url('media/blog/'.$blog['image']) }}" class="lc-blog-img" alt="blog title">
						</div>
						<div class="lc-blog-content">
							<h2 class="lc-blog-title">{{ $blog['title'] }}</h2>
							<span class="lc-blog-desc">{{ $blog['short_description'] }}</span>
						</div>
					</div>
					<div></div>
				</div>
			</a>
		@endforeach
	</div>
@endsection
