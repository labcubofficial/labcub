@extends('admin.master.admin_auth')

@section('content')
	<div class="login-form">
		<div class="login_instruction">

		</div>
		<div class="login" style="display: flex; align-items: center; justify-content: center;">
			{!! Form::open(['route'=>'login.store', 'method'=>'POST', 'class' => 'login']) !!}
				<div class="login-icon">
					<img src="{{ url('favicon.png') }}" class="login-icon-img"/>
				</div>
				<div>
					<!-- {!! Form::label('email', 'Email', ['for' => 'name']) !!} -->
					{!! Form::email('email',null,['placeholder' => 'Email']) !!}
				</div>
				<div>
					<!-- {!! Form::label('password', 'Password', ['for' => 'name']) !!} -->
					{!! Form::password('password',['placeholder' => 'Password']) !!}
				</div>
				<div>
					{!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection
