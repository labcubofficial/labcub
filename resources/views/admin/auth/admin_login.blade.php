@extends('admin.master.admin_auth')

@section('content')
	<div class="justify-center items-center w-full bg-white rounded-md shadow lg:flex md:mt-0 max-w-md xl:p-0">
		<!-- card body -->
		<div class="p-6 w-full sm:p-8 lg:p-8">
			<div class="mb-4">
				<h3>Labcub</h3>
				<p class="mb-6">Please enter your user information.</p>
			</div>
			<!-- form -->
			<form method="POST" action="{{ route('login.store') }}">
				@csrf
				<!-- username -->
				<div class="mb-3">
					<label for="email" class="inline-block mb-2">Email</label>
					<x-input type="email" name="email" id="email" placeholder="Enter your Email" />
				</div>
				<!-- password -->
				<div class="mb-5">
					<label for="password" class="inline-block mb-2">Password</label>
					<x-input type="password" name="password" id="password" placeholder="Enter your Password" />
				</div>
				<!-- checkbox -->
				<div class="lg:flex justify-between items-center mb-4">
					<div class="flex items-center">
						<input type="checkbox" class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2" id="passwordCheck" />
						<label class="inline-block ms-2" for="rememberme">Show password</label>
					</div>
				</div>
				<div>
					<!-- button -->
					<div class="grid">
						<input type="submit" value="Login" class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">
					</div>

					<div class="flex justify-between mt-4">
						<div class="mb-2">
							<a href="sign-up.html" class="text-indigo-600 hover:text-indigo-600">Create An Account</a>
						</div>
						<div>
							<a href="forget-password.html" class="text-indigo-600 hover:text-indigo-600">Forgot your password?</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script>
		$('#passwordCheck').on('click', function() {
			if ($(this).is(':checked')) {
				$('#password').attr('type', 'text');
			} else {
				$('#password').attr('type', 'password');
			}
		});
	</script>
@endsection