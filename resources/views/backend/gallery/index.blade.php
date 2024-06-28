<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('frontend_css/assets/img/favicon.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('backend_css/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset('backend_css/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ asset('backend_css/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('backend_css/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ asset('backend_css/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('backend_css/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('backend_css/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('backend_css/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{ asset('backend_css/assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('backend_css/assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{ asset('backend_css/assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{ asset('backend_css/assets/css/header-colors.css')}}" />
	<title>Aarya Home Stay | Admin Dashboard</title>
	<style>
	    .btn i {
            vertical-align: middle;
            font-size: 1rem;
            margin-top: -1em;
            margin-bottom: -1em;
            margin-right: 0px;
        }
	</style>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include("backend.include.sidebar")
		<!--end sidebar wrapper -->
		<!--start header -->
		@include("backend.include.header")
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Aarya Home Stay</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Gallery</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				@if (Session::has('success'))
				<div class="alert border-0 bg-white border-start border-5 border-success alert-dismissible fade show py-2">
					<div class="d-flex align-items-center">
						<div class="font-35 text-success"><i class="bx bxs-check-circle"></i>
						</div>
						<div class="ms-3">
							<h6 class="mb-0 text-success">Success</h6>
							<div>{{Session::get('success')}}</div>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif

				@if (Session::has('update'))
				<div class="alert border-0 bg-white border-start border-5 border-info alert-dismissible fade show py-2">
				   <div class="d-flex align-items-center">
					   <div class="font-35 text-info"><i class="bx bx-info-square"></i>
					   </div>
					   <div class="ms-3">
						   <h6 class="mb-0 text-info">Update</h6>
						   <div>{{Session::get('update')}}</div>
					   </div>
				   </div>
				   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			   </div>
			   @endif

			   @if (Session::has('error'))
			   <div class="alert border-0 bg-white border-start border-5 border-danger alert-dismissible fade show py-2">
				   <div class="d-flex align-items-center">
					   <div class="font-35 text-danger"><i class="bx bxs-message-square-x"></i>
					   </div>
					   <div class="ms-3">
						   <h6 class="mb-0 text-danger">Danger</h6>
						   <div>{{Session::get('error')}}</div>
					   </div>
				   </div>
				   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			   </div>
				@endif
				<div class="card">
					<div class="card-header">
						<div class="row align-items-center">
							<div class="col-lg-9 col-xl-10">
							<h3>Gallery</h3>
							</div>
							<div class="col-lg-3 col-xl-2">
								<a href="{{ route('gallery.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Gallery</a>
							</div>
						</div>
					</div>
					<div class="card-body">
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 row-cols-xl-5 mt-3">
        				@foreach ($gallery as $item)
        				<div class="col">
        					<div class="card border-primary border-bottom border-3 border-0">
        						<img src="../public/gallery/{{$item->image}}" class="card-img-top" alt="...">
        						<div class="card-body">
        							<div class="align-items-center gap-2">
        								<a href="{{route('gallery.edit',$item->id)}}" class="btn btn-sm btn-inverse-success"><i class='bx bxs-edit'></i></a>
        								<a href="{{route('gallery.delete',$item->id)}}" class="btn btn-sm btn-inverse-danger"><i class='bx bxs-trash'></i></a>
        							</div>
        						</div>
        					</div>
        				</div>
                        @endforeach
        			</div>
        			</div>
				</div>


			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include("backend.include.footer")
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('backend_css/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{ asset('backend_css/assets/js/jquery.min.js')}}"></script>
	<script src="{{ asset('backend_css/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset('backend_css/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset('backend_css/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--app JS-->
	<script src="{{ asset('backend_css/assets/js/app.js')}}"></script>
</body>

</html>
