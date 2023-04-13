@extends('partials.layouts')

@section('content')
    <div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Pengguna</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Pengguna</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				
				<!--end row-->
				<div class="row">
					<div class="col-xl-10 mx-auto">
						<h6 class="mb-0 text-uppercase">Form Pengguna</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Data Profil Pengguna</h5>
									</div>
									<hr/>
                  <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                      <label for="inputEnterYourName" class="col-sm-3 col-form-label">Nama Pengguna</label>
                      <div class="col-sm-9">
                        <input type="text" value="{{ old('nama_user') }}" name="nama_user" class="form-control @error('nama_user') is-invalid @enderror" id="inputEnterYourName" placeholder="Pads, nayoki.pads, dll...">
                      </div>
                    </div>
                    @error('nama_user')
                          <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                      <label for="inputPhoneNo2" class="col-sm-3 col-form-label" style="display: flex; justify-content: space-between;align-items: center">
                        
                        Password <i class="font-22 text-primary fadeIn animated bx bx-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="default password : 12345678"></i>
                        {{-- <button type="button" class="btn btn-secondary" >Tooltip on top</button> --}}
                      </label>
                      <div class="col-sm-9">
                        <input type="password" value="12345678" disabled name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror " id="inputPhoneNo1" placeholder="Nomor Surat : 00123/sadfsj/blabla">
                        <input type="hidden" name="password" value="12345678">
                      </div>
                    </div>

                    @error('password')
                          <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                      <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Jabatan</label>
                      <div class="col-sm-9">
                        <input type="text" value="{{ old('jabatan') }}"  name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" id="inputPhoneNo2" placeholder="Petinggi, staff, Pejabat dll...">
                      </div>
                    </div>
                    @error('jabatan')
                          <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                      <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Tipe Pengguna</label>
                      <div class="col-sm-9">
                        <select class="form-select mb-3" class="form-control @error('password') is-invalid @enderror " name="tipe_user" aria-label="Default select example">
                          <option selected disabled>Klik untuk memilih tipe pengguna</option>
                          <option value="SuperAdmin">Super Admin</option>
                          <option value="Admin">Admin</option>
                          <option value="Dosen">Dosen</option>
                        </select>
                      </div>
                    </div>
                    @error('tipe_user')
                          <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    
                    {{-- <div class="row mb-3">
                      <input id="image-uploadify" name="berkas" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple="" style="display: none;">

                          <div class="imageuploadify-images-list text-center">
                            <i class="bx bxs-cloud-upload"></i>
                            <span class="imageuploadify-message">Drag&amp;Drop Your File(s)Here To Upload</span>
                            <button type="button" class="btn btn-default">or select file to upload</button>
                          </div>
                    </div> --}}
                    
                          
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary px-5">Simpan</button>
                    </div>
                  </form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
@endsection

@push('addons-script')
  <script>
		$(function () {
			$('[data-bs-toggle="popover"]').popover();
			$('[data-bs-toggle="tooltip"]').tooltip();
		})
	  </script>
    
    <script>
      $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
      })
    </script>

    <script>
		$(function () {
			$('[data-bs-toggle="popover"]').popover();
			$('[data-bs-toggle="tooltip"]').tooltip();
		})
	</script>
@endpush
  