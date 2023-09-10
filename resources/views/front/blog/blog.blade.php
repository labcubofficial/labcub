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
				<span>{{ date('M, d Y', strtotime($blog->created_at)) }}</span>
				
				<div class="blog-body">{!! $blog->body !!}</div>
			</div>
		</div>
		<div class="blog-ads"></div>
	</div>
@endsection
