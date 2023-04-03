@extends('partials.layouts')


@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
					
					<div class="col" style="cursor:pointer">
						<a href="" style="">
							<div class="card radius-10 bg-gradient-cosmic">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">SI KPP</p>
											<h4 class="my-1 text-white">Login</h4>
										</div>
										<div class="text-white ms-auto font-35"><i class="bx bx-exit"></i>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col">
						<a href="{{url('blumjadi')}}">
						<div class="card radius-10 bg-gradient-burning">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Total Income</p>
										<h4 class="my-1 text-white">$89,245</h4>
									</div>
									<div class="text-white ms-auto font-35"><i class="bx bx-dollar"></i>
									</div>
								</div>
							</div>
						</div>
						</a>
					</div>
					<div class="col">
						<div class="card radius-10 bg-gradient-kyoto">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">Total Users</p>
										<h4 class="text-dark my-1">24.5K</h4>
									</div>
									<div class="text-dark ms-auto font-35"><i class="bx bx-user-pin"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-gradient-moonlit">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Comments</p>
										<h4 class="my-1 text-white">8569</h4>
									</div>
									<div class="text-white ms-auto font-35"><i class="bx bx-comment-detail"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
		</div>
		<!--end page wrapper -->
@endsection

