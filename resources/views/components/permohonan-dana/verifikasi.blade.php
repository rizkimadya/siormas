@extends("components.permohonan-dana.index")
@section("detail")
<div class="card card-custom">
	<!--begin::Header-->
	<div class="card-body d-flex border-0">
		<span class="card-icon pr-4 py-0">
			<i class="flaticon2-left-arrow-1 text-dark"></i>
		</span>
		<h6 class="font-weight-bolder m-0 py-1">
			Detail Verifikasi
		</h6>
	</div>
	<!--end::Header-->
	<!--begin::Body-->
	<div class="card-body pt-0">
		<div style="border-left: 3px solid #008E42;" class="card-title py-2 m-0 px-4">
			<h5 class="font-weight-bolder text-primary m-0">Informasi Pemohon</h5>
		</div>
		<div class="card-body p-0">
			<tr>
				<td class="p-0 py-4">
					<div class="d-flex justify-content-between pt-6">
						<div class="d-flex flex-column flex-root">
							<h7 class="opacity-70 mb-3">Nama Organisasi</h7>
							<h6 class="font-weight-bolder">Majelis Pimpinan Pemuda Pancasila</h6>
						</div>
						<div class="d-flex flex-column flex-root">
							<h7 class="opacity-70 mb-3">Periode</h7>
							<h6 class="font-weight-bolder">2023</h6>
						</div>
					</div>
				</td>
				<td class="text-right">
					<div class="d-flex justify-content-between pt-6">
						<div class="d-flex flex-column flex-root">
							<h7 class="opacity-70 mb-3">Jumlah Anggaran</h7>
							<h6 class="font-weight-bolder">
								Rp. 25.000.000
							</h6>
						</div>
						<div class="d-flex flex-column flex-root">
							<h7 class="opacity-70 mb-3">Tujuan Permohonan Dana</h7>
							<h6 class="font-weight-bolder">
								Untuk Pengembangan Kepedulian Kemanusiaan dan Bhakti Sosial ke arah 
								yang lebih baik. Membuka akses, peluang, sarana dan
								prasarana yang memadai.
							</h6>
						</div>
					</div>
				</td>
			</tr>
		
		</div>
	</div>
	<div class="card-body pt-0">
		<div style="border-left: 3px solid #008E42;" class="card-title py-2 m-0 px-4">
			<h5 class="font-weight-bolder text-primary m-0">Dokumen Pemohon</h5>
		</div>
		<div class="card-body p-0 px-4">
			<div class="row mt-6">
				<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
						<!--begin::Title-->
						<div class="d-flex flex-column flex-grow-1 mr-2">
							<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Surat Permohonan</span>
						</div>
						<!--end::Title-->
						<!--begin::Buttonpreview-->
						<a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
						<!--end::Buttonpreview-->
				</div>
				<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
						<!--begin::Title-->
						<div class="d-flex flex-column flex-grow-1 mr-2">
							<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Proposal</span>
						</div>
						<!--end::Title-->
						<!--begin::Buttonpreview-->
						<a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
						<!--end::Buttonpreview-->
				</div>
			</div>
			<div class="row mt-6">
				<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
						<!--begin::Title-->
						<div class="d-flex flex-column flex-grow-1 mr-2">
							<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Fotocopy KTP Ketua</span>
						</div>
						<!--end::Title-->
						<!--begin::Buttonpreview-->
						<a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
						<!--end::Buttonpreview-->
				</div>
				<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
						<!--begin::Title-->
						<div class="d-flex flex-column flex-grow-1 mr-2">
							<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Fotocopy KTP Sekertaris</span>
						</div>
						<!--end::Title-->
						<!--begin::Buttonpreview-->
						<a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
						<!--end::Buttonpreview-->
				</div>
			</div>
		</div>
	</div>
	<div class="card-footer">
		<button type="reset" class="btn btn-danger px-6 mr-3">TOLAK</button>
		<button type="reset" class="btn btn-primary px-8 ">VERIFIKASI</button>
	</div>
	{{-- <div class="card-footer">
		<button type="reset" class="btn btn-primary px-6 mr-2">Verifikasi</button>
		<button type="reset" class="btn btn-danger">Tolak</button>
	</div> --}}
	<!--end::Body-->
</div>
@endsection

