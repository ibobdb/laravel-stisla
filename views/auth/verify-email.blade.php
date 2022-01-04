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
							<h4>Verify Email</h4>
						</div>

						<div class="card-body">
							@if (session('status') == 'verification-link-sent')

								<p class="text-success">A new email verification link has been emailed to you!</p>

							@endif
							<form method="POST" action="{{ route('verification.send') }}">
								@csrf
								{{-- <div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
								</div> --}}

								<div class="form-group">

									<input type="submit" name="login" id="login" class="btn btn-primary btn-lg btn-block" value="Resend Email">
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
