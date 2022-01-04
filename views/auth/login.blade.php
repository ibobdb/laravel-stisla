@extends('auth.index')
@section('section')


	<section class="section">
		<div class="d-flex flex-wrap align-items-stretch">
			<div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
				<div class="p-4 m-3">
					<img src="stisla/assets/img/stisla-fill.svg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
					<h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Stisla</span></h4>
					<p class="text-muted">Before you get started, you must login or register if you don't already have an account.</p>

					@if ($errors->any())
						<div class=" alert alert-danger mb-4 font-medium text-sm text-green-600">
							Something wrong, please check your credentials
						</div>
					@endif
					@if (session('status'))
						<div class=" alert alert-success mb-4 font-medium text-sm text-green-600">
							{{ session('status') }}
						</div>

					@endif



					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="form-group">
							<label for="email">Email</label>
							<input id="email" type="email" class="form-control @error('email')
								is-invalid
							@enderror" name="email" tabindex="1" required autofocus value="{{ old('email') }}">
							@error('email')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror

						</div>

						<div class="form-group">
							<div class="d-block">
								<label for="password" class="control-label">Password</label>
							</div>
							<input id="password" type="password" class="form-control @error('password')
								is-invalid
							@enderror" name="password" tabindex="2" required>
							@error('password')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror

						</div>

						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
								<label class="custom-control-label" for="remember-me">Remember Me</label>
							</div>
						</div>

						<div class="form-group text-right">
							<a href="{{ route('password.request') }}" class="float-left mt-3">
								Forgot Password?
							</a>
							<button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
								Login
							</button>
						</div>

						<div class="mt-5 text-center">
							Don't have an account? <a href="{{ route('register') }}">Create new one</a>
						</div>
					</form>

					<div class="text-center mt-5 text-small">
						Copyright &copy; Your Company. Made with ðŸ’™ by Stisla
						<div class="mt-2">
							<a href="#">Privacy Policy</a>
							<div class="bullet"></div>
							<a href="#">Terms of Service</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="stisla/assets/img/unsplash/login-bg.jpg">
				<div class="absolute-bottom-left index-2">
					<div class="text-light p-5 pb-2">
						<div class="mb-5 pb-3">
							<h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
							<h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
						</div>
						Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@push('css-library')
	<link rel="stylesheet" href="stisla/node_modules/bootstrap-social/bootstrap-social.css">
@endpush
