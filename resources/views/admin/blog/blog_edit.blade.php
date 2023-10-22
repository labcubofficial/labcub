@extends('admin.master.admin_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>

@section('content')
	{!! Form::open(['method'=>'PUT','route'=> ['blog.update', $blog->id],'id'=>'form-submit', 'class' => '', 'files' => 'true']) !!}

		{!! Form::text('title',$blog->title,['class' => 'form-control', 'placeholder' => 'Title']) !!}

		{!! Form::textarea('description',$blog->short_description,['class' => 'form-control', 'placeholder' => 'Description']) !!}

		{!! Form::textarea('intro',$blog->intro,['class' => 'form-control', 'placeholder' => 'Blog intro']) !!}

		{!! Form::text('menu',$blog->menu,['class' => 'form-control', 'placeholder' => 'Menu']) !!}

		{!! Form::text('slug',$blog->slug,['class' => 'form-control', 'placeholder' => 'Slug']) !!}

		<div class="form-column">
			<div class="form-col-two">
				{!! Form::select('parent_category',$parent_category,[$blog->category_id],['class' => 'form-control width-auto', 'placeholder' => 'Select Category']) !!}
			</div>
			<div class="form-col-two">
				{!! Form::select('sub_category',$sub_category,[$blog->subcategory_id],['class' => 'form-control width-auto', 'placeholder' => 'Select Subcategory']) !!}
			</div>
		</div>

		{!! Form::textarea('body',$blog->body,['class' => 'form-control', 'placeholder' => 'Write you blog here...']) !!}

		{!! Form::file('image', ['class' => 'pb']) !!}

		<div class="pb">
			{!! Form::checkbox('is_recommended', '1', $blog->is_recommended) !!}
			{!! Form::label('', 'Recommended') !!}
		</div>

		<div class="d-flex justify-end pr">
			{!! Form::submit('Update',['class'=>'btn btn-primary', 'id'=>'submit']) !!}
		</div>

	{!! Form::close() !!}
@endsection