@extends('layouts.index')
@section('main-content')
	<section class="section">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card card-statistic-2">
					<div class="card-stats">
						<div class="card-stats-title">Order Statistics -
							<div class="dropdown d-inline">
								<a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
								<ul class="dropdown-menu dropdown-menu-sm">
									<li class="dropdown-title">Select Month</li>
									<li><a href="#" class="dropdown-item">January</a></li>
									<li><a href="#" class="dropdown-item">February</a></li>
									<li><a href="#" class="dropdown-item">March</a></li>
									<li><a href="#" class="dropdown-item">April</a></li>
									<li><a href="#" class="dropdown-item">May</a></li>
									<li><a href="#" class="dropdown-item">June</a></li>
									<li><a href="#" class="dropdown-item">July</a></li>
									<li><a href="#" class="dropdown-item active">August</a></li>
									<li><a href="#" class="dropdown-item">September</a></li>
									<li><a href="#" class="dropdown-item">October</a></li>
									<li><a href="#" class="dropdown-item">November</a></li>
									<li><a href="#" class="dropdown-item">December</a></li>
								</ul>
							</div>
						</div>
						<div class="card-stats-items">
							<div class="card-stats-item">
								<div class="card-stats-item-count">24</div>
								<div class="card-stats-item-label">Pending</div>
							</div>
							<div class="card-stats-item">
								<div class="card-stats-item-count">12</div>
								<div class="card-stats-item-label">Shipping</div>
							</div>
							<div class="card-stats-item">
								<div class="card-stats-item-count">23</div>
								<div class="card-stats-item-label">Completed</div>
							</div>
						</div>
					</div>
					<div class="card-icon shadow-primary bg-primary">
						<i class="fas fa-archive"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Total Orders</h4>
						</div>
						<div class="card-body">
							59
						</div>
					</div>
				</div>
			</div>

		</div>

	</section>
@endsection
@push('css-library')
	<link rel="stylesheet" href="stisla/node_modules/jqvmap/dist/jqvmap.min.css">
	<link rel="stylesheet" href="stisla/node_modules/summernote/dist/summernote-bs4.css">
	<link rel="stylesheet" href="stisla/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="stisla/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

@endpush
@push('js-library')
	<script src="stisla/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="stisla/node_modules/chart.js/dist/Chart.min.js"></script>
	<script src="stisla/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
	<script src="stisla/node_modules/summernote/dist/summernote-bs4.js"></script>
	<script src="stisla/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
@endpush
@push('page-specific-js-file')
	<script src="stisla/assets/js/page/index.js"></script>

@endpush
