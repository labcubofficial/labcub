@extends('admin.master.admin_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>

@section('content')
	{!! Form::open(['method'=>'POST','route'=>'blog.store','id'=>'form-submit', 'class' => '', 'files' => 'true']) !!}

		{!! Form::text('title',null,['class' => 'form-control', 'placeholder' => 'Title']) !!}

		{!! Form::textarea('description',null,['class' => 'form-control', 'placeholder' => 'Description']) !!}

		{!! Form::textarea('intro',null,['class' => 'form-control', 'placeholder' => 'Blog intro']) !!}

		{!! Form::text('menu',null,['class' => 'form-control', 'placeholder' => 'Menu']) !!}

		{!! Form::text('slug',null,['class' => 'form-control', 'placeholder' => 'Slug']) !!}

		<div class="form-column">
			<div class="form-col-two">
				{!! Form::select('parent_category',$parent_category,['Select'],['class' => 'form-control width-auto', 'placeholder' => 'Select Category']) !!}
			</div>
			<div class="form-col-two">
				{!! Form::select('sub_category',$sub_category,['Select'],['class' => 'form-control width-auto', 'placeholder' => 'Select Subcategory']) !!}
			</div>
		</div>

		{!! Form::textarea('body',null,['class' => 'form-control', 'placeholder' => 'Write you blog here...']) !!}

		{!! Form::file('image', ['class' => 'pb']) !!}

		<div class="pb">
			{!! Form::checkbox('is_recommended', '1') !!}
			{!! Form::label('', 'Recommended') !!}
		</div>

		<div class="d-flex justify-end pr">
			{!! Form::submit('Submit',['class'=>'btn btn-primary', 'id'=>'submit']) !!}
		</div>

	{!! Form::close() !!}
@endsection