@extends('auth.index')
@section('section')

	<section class="section">
		<div class="container mt-5">
			<div class="row">
				<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
					<div class="login-brand">
						<img src="stisla/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
					</div>

					<div class="card card-primary">
						<div class="card-header">
							<h4>Register</h4>
						</div>

						<div class="card-body">
							<form method="POST" action="{{ route('register') }}">
								@csrf
								<div class="form-group">
									<label for="first_name">Full Name</label>
									<input id="first_name" type="text" class="form-control @error('name')
									is-invalid
									@enderror" name="name" autofocus value="{{ old('name') }}">
									@error('name')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>



								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control @error('email')
									is-invalid
											@enderror" name="email" value="{{ old('email') }}">
									@error('email')
										<div class="invalid-feedback">
											{{ $message }}
										</div>

									@enderror
								</div>

								<div class="row">
									<div class="form-group col-6">
										<label for="password" class="d-block">Password</label>
										<input id="password" type="password" class="form-control pwstrength @error('password')
											is-invalid
										@enderror" data-indicator="pwindicator" name="password">
										<div id="pwindicator" class="pwindicator">
											<div class="bar"></div>
											<div class="label"></div>
										</div>
										@error('password')
											<div class="invalid-feedback">
												{{ $message }}
											</div>

										@enderror
									</div>
									<div class="form-group col-6">
										<label for="password2" class="d-block">Password Confirmation</label>
										<input id="password2" type="password" class="form-control" name="password_confirmation">
									</div>
								</div>


								<div class="form-group">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" name="agree" class="custom-control-input" id="agree">
										<label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-lg btn-block">
										Register
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
@push('css-library')
	<link rel="stylesheet" href="stisla/node_modules/selectric/public/selectric.css">
@endpush
