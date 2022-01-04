@extends('auth.index')
@section('section')
	<section class="section">
		<div class="container mt-5">
			<div class="row">
				<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
					<div class="login-brand">
						<img src="/stisla/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
					</div>

					<div class="card card-primary">
						<div class="card-header">
							<h4>Reset Password</h4>
						</div>

						<div class="card-body">
							<p class="text-muted">Create new password</p>
							@if (session('status'))
								<div class="mb-4 font-medium text-sm text-green-600">
									{{ session('status') }}
								</div>
							@endif


							<form method="POST" action="{{ route('password.update') }}">
								@csrf
								<input type="text" hidden value="{{ request()->route('token') }}" name="token">
								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">New Password</label>
									<input id="password" type="password" class="form-control " name="password" tabindex="2" required>
									@error('password')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>

								<div class="form-group">
									<label for="password-confirm">Confirm Password</label>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" tabindex="2" required>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
										Reset Password
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="simple-footer">
						Copyright &copy; Stisla 2018
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
