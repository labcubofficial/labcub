@extends('admin.master.admin_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
@section('content')
<div class="d-flex">
	<a href="{{ route('blog.create') }}" class="btn btn-info">Add Blog</a>
</div>
<div class="grid grid-cols-4 gap-4">
	@foreach($blogs as $blog)
		<div class="card shadow">
			<img class="w-full h-auto rounded-t-md" src="{{ url('media/blog').'/'.$blog->image }}" alt="Image Description" />
			<div class="card-body">
				<h3 class="text-lg font-bold">{{ $blog->title }}</h3>
				<p class="mt-1">{{ $blog->short_description }}</p>
				<a class="mt-2 btn gap-x-2 bg-indigo-600 text-white border-indigo-600 disabled:opacity-50 disabled:pointer-events-none hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300" href="{{ route('blog.edit', $blog->id) }}">Edit</a>
			</div>
		</div>
	@endforeach
</div>
@endsection