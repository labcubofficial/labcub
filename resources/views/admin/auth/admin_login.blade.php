@extends('admin.auth.master.admin_auth')

@section('content')
	{!! Form::open(['route'=>'login.store', 'method'=>'POST', 'class' => 'login']) !!}
		<div>
	    	{!! Form::label('email', 'Email') !!}
	    	{!! Form::email('email',null,['class' => 'form-input']) !!}
	    	{{-- <div class="error">
	    		<span class="error-message">email</span>
	    	</div> --}}
		</div>
		<div>
		    {!! Form::label('password', 'Password') !!}
	    	{!! Form::password('password',['class' => 'form-input']) !!}
	    	{{-- <div class="error">
	    		<span class="error-message">password</span>
	    	</div> --}}
		</div>
		<div>
	    	{!! Form::submit('Login') !!}
		</div>
	{!! Form::close() !!}
@endsection
