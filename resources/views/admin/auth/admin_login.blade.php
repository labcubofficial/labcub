@extends('admin.master.admin_auth')

@section('content')
	<div class="login-form">
		<div class="login" style="display: flex; align-items: center; justify-content: center;">
			<div class="login-container">
				{!! Form::open(['route'=>'login.store', 'method'=>'POST', 'class' => 'login']) !!}
					<div class="login-icon">
						<!-- <img src="{{ url('favicon.png') }}" class="login-icon-img"/> -->
					</div>
					<div class="form-control">
						<!-- {!! Form::label('email', 'Email', ['for' => 'name']) !!} -->
						{!! Form::email('email',null,['placeholder' => 'Email']) !!}
					</div>
					<div class="form-control">
						<!-- {!! Form::label('password', 'Password', ['for' => 'name']) !!} -->
						{!! Form::password('password',['placeholder' => 'Password']) !!}
					</div>
					<div class="d-flex justify-content-center">
						{!! Form::submit('Login', ['class' => 'btn btn-primary width-100']) !!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
