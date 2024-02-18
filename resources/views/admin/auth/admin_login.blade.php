@extends('admin.master.admin_auth')

@section('content')
<div class="col-xl-10 col-lg-12 col-md-9">

	<div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
				<div class="col-lg-6">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
						</div>
						{!! Form::open(['route'=>'login.store', 'method'=>'POST', 'class' => 'user']) !!}
							<div class="form-group">
								{!! Form::email('email',null,['placeholder' => 'Email', 'class' => 'form-control form-control-user']) !!}
							</div>
							<div class="form-group">
								{!! Form::password('password',['placeholder' => 'Password', 'class' => 'form-control form-control-user']) !!}
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox small">
									<input type="checkbox" class="custom-control-input" id="customCheck">
									<label class="custom-control-label" for="customCheck">Show Password</label>
								</div>
							</div>
							{!! Form::submit('Login', ['class' => 'btn btn-primary width-100']) !!}
						{!! Form::close() !!}
						<hr>
						<div class="text-center">
							<a class="small" href="#">Forgot Password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection