@extends('front.master.landing_master')

@section('content')
	<div class="blog-container">
		<div class="blog-menu">
			<nav>
				@foreach($menu as $item)
					<li><a href="#laravel-routes">{{ $item }}</a></li>
				@endforeach
			</nav>
		</div>
		<div class="blog-content">
			<div class="blog-content container">
				<h1 class="blog-header">{{ $blog->title }}</h1>
				<div class="blog-details">
					<p class="blog-date">{{ date('d F, Y', strtotime($blog->created_at)) }}</p>
					<p class="blog-badge">{{ $blog->category_id }}</p>
				</div>

				<p class="blog-intro">{{ $blog->intro }}</p>
				
				<div class="blog-thumb">
					<img class="blog-thumbnail" src="{{ url('media/blog/'.$blog->image) }}">
				</div>
				<div class="blog-body">{!! $blog->body !!}</div>
			</div>
		</div>
		<div class="blog-ads">
			<span class="ads-text">Advertisement</span>
		</div>
	</div>
@endsection