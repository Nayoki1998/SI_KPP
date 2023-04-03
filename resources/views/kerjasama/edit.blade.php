@extends('partials.layouts')

@section('content')
    <div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Kerja Sama</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Edit Kerja Sama</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				
				<!--end row-->
				<div class="row">
					<div class="col-xl-10 mx-auto">
						<h6 class="mb-0 text-uppercase">Form Edit Kerja Sama</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Berkas Kerja Sama</h5>
									</div>
									<hr/>
                  <form action="{{ route('kerjasama.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                      <label for="inputEnterYourName" class="col-sm-3 col-form-label">Perihal Kerja Sama</label>
                      <div class="col-sm-9">
                        <input type="text" value="{{ old('perihal', $data->perihal) }}" name="perihal" class="form-control @error('perihal') is-invalid @enderror" id="inputEnterYourName" placeholder="Perihal Kerja Sama">
                      </div>
                    </div>
                    @error('perihal')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                      <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Nomor Surat Pihak 1</label>
                      <div class="col-sm-9">
                        <input type="text" value="{{ old('no_surat_pihak1', $data->no_surat_pihak1) }}" name="no_surat_pihak1" value="{{ old('no_surat_pihak1') }}" class="form-control @error('no_surat_pihak1') is-invalid @enderror @error('no_surat_pihak1') is-invalid @enderror" id="inputPhoneNo1" placeholder="Nomor Surat : 00123/sadfsj/blabla">
                      </div>
                    </div>
                    @error('no_surat_pihak1')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                      <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Nomor Surat Pihak 2</label>
                      <div class="col-sm-9">
                        <input type="text" value="{{ old('no_surat_pihak2', $data->no_surat_pihak2) }}"  name="no_surat_pihak2" class="form-control @error('no_surat_pihak2') is-invalid @enderror" id="inputPhoneNo2" placeholder="Nomor Surat : 00123/sadfsj/blabla">
                      </div>
                    </div>
                    @error('no_surat_pihak2')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                      <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Tanggal Surat</label>
                      <div class="col-sm-9">
                        <input type="date" value="{{ old('tgl_surat', $data->tgl_surat) }}"  name="tgl_surat" class="form-control @error('tgl_surat') is-invalid @enderror" id="data-surat" placeholder="Tanggal Surat">
                      </div>
                    </div>
                    @error('tgl_surat')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    {{-- <input type="date" class="form-control @error('no_surat_pihak1') is-invalid @enderror"> --}}

                    <div class="row mb-3">
                      <label for="pic1" class="col-sm-3 col-form-label">Penanggung Jawab Pihak 1</label>
                      <div class="col-sm-9">
                        <input type="text" value="{{ old('pic_1', $data->pic_1) }}" name="pic_1" class="form-control @error('pic_1') is-invalid @enderror" id="pic1" placeholder="Nama Penanggung Jawab">
                      </div>
                    </div>
                    @error('pic_1')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                      <label for="pic2" class="col-sm-3 col-form-label">Penanggung Jawab Pihak 2</label>
                      <div class="col-sm-9">
                        <input type="text" value="{{ old('pic_2', $data->pic_2) }}" name="pic_2" class="form-control @error('pic_2') is-invalid @enderror" id="pic2" placeholder="Nama Penanggung Jawab">
                      </div>
                    </div>

                    @error('pic_2')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="row">
                      <div class="col-5">
                        <a  href="{{ asset('berkas/'.$data->berkas) }}" class="btn btn-info px-2 mb-2" download="berkas_kerjasama">
                          <i class="bx bx-cloud-download me-1"></i>
                          {{ $data->berkas }}
                        </a>
                      </div>
                      <div class="col-3">
                        <button hidden id="btnNdaJadi" onclick="gantiButtonNdaJadi()" type="button"  class="btn btn-danger px-2 mb-2" download="berkas_kerjasama">
                          <i class="bx bx-x "></i>
                          Tidak jadi
                        </button>

                        <button id="btnGanti" onclick="gantiButton()" type="button"  class="btn btn-warning px-2 mb-2" download="berkas_kerjasama">
                          <i class="bx bx-edit me-1"></i>
                          Ganti berkas
                        </button>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="formFile" class="form-label">File Berkas</label>
                      <div class="col-sm-9">
                        <input value="{{ old('berkas', $data->berkas) }}" disabled="true" class="form-control @error('berkas') is-invalid @enderror" accept=".pdf" name="berkas" type="file" id="formFile">
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
                  {{-- <div id="pspdfkit" style="height:100vh"></div> --}}
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
  let berkas = document.getElementById('berkasId').href;
  // console.log('berkas', berkas);
  PSPDFKit.load({
    container: "#pspdfkit",
    document: `{{asset('berkas/'.$data->berkas)}}`// Add the path to your document here.
  })
  .then(function(instance) {
    console.log("PSPDFKit loaded", instance);
  })
  .catch(function(error) {
    console.error(error.message);
  });
</script>

    <script>
        function gantiButton() {
          document.getElementById("btnNdaJadi").hidden = false;
          document.getElementById("btnGanti").hidden = true;
          document.getElementById("formFile").disabled = false;
        }

        function gantiButtonNdaJadi() {
          document.getElementById("btnNdaJadi").hidden = true;
          document.getElementById("btnGanti").hidden = false;
          document.getElementById("formFile").disabled = true;
        }
    </script>
@endpush
  