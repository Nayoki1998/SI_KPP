@extends('partials.layouts')

@section('content')
    <div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Pengabdian</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Pengabdian</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				
				<!--end row-->
				<div class="row">
					<div class="col-xl-10 mx-auto">
						<h6 class="mb-0 text-uppercase">Form Pengabdian</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Berkas Pengabdian</h5>
									</div>
									<hr/>
                  <form action="{{ route('peng.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                      <label for="inputEnterYourName" class="col-sm-3 col-form-label">Perihal Pengabdian</label>
                      <div class="col-sm-9">
                        <input type="text" value="{{ old('perihal') }}" name="perihal" class="form-control @error('perihal') is-invalid @enderror" id="inputEnterYourName" placeholder="Perihal Pengabdian">
                      </div>
                    </div>
                    @error('perihal')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    <div class="row mb-3">
                      <label for="formFile" class="form-label">File Berkas</label>
                      <div class="col-sm-9">
                        <input class="form-control @error('berkas') is-invalid @enderror" accept=".pdf" name="berkas" type="file" id="formFile">
                      </div>
                    </div>
                    @error('berkas')
                          <div class="alert alert-danger">{{ $message }}</div>
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
      $('#fancy-file-upload').FancyFileUpload({
        params: {
          action: 'fileuploader'
        },
        maxfilesize: 1000000
      });
    </script>
    <script>
      $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
      })
    </script>
@endpush
  