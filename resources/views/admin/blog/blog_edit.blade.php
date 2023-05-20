@extends('admin.master.dashboard_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>

@section('content')
	{!! Form::open(['method'=>'POST','route'=>'blog.store','id'=>'form-submit', 'class' => '', 'files' => 'true']) !!}

		{!! Form::label('title', 'Title') !!}<br>
		{!! Form::text('title',null,['class' => 'form-control']) !!}

		{!! Form::label('description', 'Description') !!}<br>
		{!! Form::text('description',null,['class' => 'form-control']) !!}

		{!! Form::label('slug', 'Slug') !!}<br>
		{!! Form::text('slug',null,['class' => 'form-control']) !!}

		{!! Form::label('parent_category', 'Parent Category') !!}<br>
		{!! Form::select('parent_category',$parent_category,['Select'],['class' => 'form-control']) !!}

	    {!! Form::label('sub_category', 'Sub Category') !!}<br>
		{!! Form::select('sub_category',$sub_category,['Select'],['class' => 'form-control']) !!}

		{!! Form::label('body', 'Body') !!}<br>
		{!! Form::textarea('body',null,['class' => 'form-control ']) !!}

		<div class="d-flex">
			{!! Form::submit('Submit',['class'=>'btn btn-primary', 'id'=>'submit']) !!}
		</div>

	{!! Form::close() !!}

	<script type="text/javascript">
		
	</script>
@endsection