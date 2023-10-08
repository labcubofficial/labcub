@extends('admin.master.admin_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
@section('content')
	<div class="d-flex">
		<a href="{{ route('blog.create') }}" class="btn btn-info">Add Blog</a>
	</div>
	@foreach($blogs as $blog)
		<div class="card lc-card d-flex">
			<div>
				<h1>{{ $blog->title }}</h1>
				<p>{{ $blog->short_description }}</p>
				<span>Badge</span>
			</div>
			<div class="d-flex">
				<a href="javascript:void(0)" class="btn btn-primary">Edit</a>
				<a href="javascript:void(0)" class="btn btn-danger">Delete</a>
				<a href="javascript:void(0)" class="btn btn-info">View</a>
			</div>
		</div>
	@endforeach
@endsection