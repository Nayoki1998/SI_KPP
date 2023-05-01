<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset ('/rukada/vertical/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{asset ('/rukada/vertical/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset ('/rukada/vertical/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset ('/rukada/vertical/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset ('/rukada/vertical/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset ('/rukada/vertical/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset ('/rukada/vertical/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset ('/rukada/vertical/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset ('/rukada/vertical/assets/css/icons.css') }}" rel="stylesheet">
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
					
						<div class="card shadow-none">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center mb-4">
										<h3 class="">Sign in</h3>
										<p class="mb-0">Login to your account</p>
									</div>
									{{-- <div class="d-grid gap-3">
										<a href="javascript:void()" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Login with facebook</a>
										<a href="javascript:void()" class="btn btn-google-plus"><i class="bx bxl-google-plus"></i> <span>Login with google+</span></a>
									</div> --}}
									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-4" method="POST" action="{{ route('login.post-login') }}">
											@csrf
                      <div class="col-12">
												<label for="inputEmailAddress" class="form-label">Nama User</label>
												<input type="text" class="form-control" name="nama_user" id="inputEmailAddress" placeholder="Nama User">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Kata Sandi</label>
												<div class="input-group" id="show_hide_password">
													<input name="password" type="password" class="form-control border-end-0" id="inputChoosePassword" value="" placeholder="Kata Sandi"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Pilih Tipe User</label>
                        <select name="tipe" class="form-select mb-3" aria-label="Default select example">
                          <option selected="">Tipe User</option>
                          <option value="SuperAdmin">Super Admin</option>
                          <option value="Admin">Admin</option>
                          {{-- <option value="Dosen">Dosen</option> --}}
                        </select>
                      </div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Log in</button>
												</div>
											</div>
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ asset ('/rukada/vertical/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset ('/rukada/vertical/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset ('/rukada/vertical/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset ('/rukada/vertical/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset ('/rukada/vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{ asset ('/rukada/vertical/assets/js/app.js') }}"></script>
</body>

</html>