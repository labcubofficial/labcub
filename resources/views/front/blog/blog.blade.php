@extends('front.landing.master.landing_master')

@section('content')
	<div class="blog-container">
		<div class="blog-menu">
			
		</div>
		<div class="blog-content">
			<div class="blog-content container">
				<h1 class="blog-header">{{ $blog->title }}</h1>
				<span>Jun, 04 2023</span>
				
				<p>{!! $blog->body !!}</p>
			</div>
		</div>
	</div>
@endsection
