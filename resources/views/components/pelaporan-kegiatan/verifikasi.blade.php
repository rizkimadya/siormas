@extends("components.pelaporan-kegiatan.index")
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
							<h7 class="opacity-70 mb-3">Jenis Kegiatan</h7>
							<h6 class="font-weight-bolder">Sosial Kemasyarakatan</h6>
						</div>
					</div>
				</td>
				<td class="text-right">
					<div class="d-flex justify-content-between pt-6">
						<div class="d-flex flex-column flex-root">
							<h7 class="opacity-70 mb-3">Waktu Pelaksanaan</h7>
							<h6 class="font-weight-bolder">
								21 Oktober 2023
							</h6>
						</div>
						<div class="d-flex flex-column flex-root">
							<h7 class="opacity-70 mb-3">Lokasi Pelaksanaan</h7>
							<h6 class="font-weight-bolder">
								Jl. Serikaya Larong 4 - Rumah Ibu Ani
							</h6>
						</div>
					</div>
				</td>
				<td class="text-right">
					<div class="d-flex justify-content-between pt-6">
						<div class="d-flex flex-column flex-root pr-8">
							<h7 class="opacity-70 mb-3">Kelurahan</h7>
							<h6 class="font-weight-bolder">Tempe</h6>
						</div>
						<div class="d-flex flex-column flex-root pr-8">
							<h7 class="opacity-70 mb-3">Kelcamatan</h7>
							<h6 class="font-weight-bolder">Sengkang</h6>
						</div>
					</div>
				</td>
				<td class="text-right">
					<div class="d-flex justify-content-between pt-6">
						<div class="d-flex flex-column flex-root">
							<h7 class="opacity-70 mb-3">Nama Ketua Panitia</h7>
							<h6 class="font-weight-bolder">
								Muh Syarwan
							</h6>
						</div>
						<div class="d-flex flex-column flex-root">
							<h7 class="opacity-70 mb-3">Jumlah Anggaran yang digunakan</h7>
							<h6 class="font-weight-bolder">
								Rp. 23.700.000
							</h6>
						</div>
					</div>
				</td>
				<td class="text-right">
					<div class="d-flex justify-content-between pt-6">
						<div class="d-flex flex-column flex-root">
							<h7 class="opacity-70 mb-3">Deskripsi Kegiatan</h7>
							<h6 class="font-weight-bolder">
								Donor darah diselenggarakan sebagai wujud kepedulian Pemuda Pancasila 
								terhadap kemanusiaan. Aksi donor darah merupakan bentuk kepedulian 
								sosial Pemuda Pancasila kepada sesama yang membutuhkan darah.
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
						<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Laporan Kegiatan</span>
					</div>
					<!--end::Title-->
					<!--begin::Buttonpreview-->
					<a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
					<!--end::Buttonpreview-->
				</div>
				<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
					<!--begin::Title-->
					<div class="d-flex flex-column flex-grow-1 mr-2">
						<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Foto Kegiatan 1</span>
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
							<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Foto Kegiatan 2</span>
						</div>
						<!--end::Title-->
						<!--begin::Buttonpreview-->
						<a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
						<!--end::Buttonpreview-->
				</div>
				<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
						<!--begin::Title-->
						<div class="d-flex flex-column flex-grow-1 mr-2">
							<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Foto Kegiatan 3</span>
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
		<button type="reset" class="btn btn-primary px-8">VERIFIKASI</button>
	</div>
	{{-- <div class="card-footer">
		<button type="reset" class="btn btn-primary px-6 mr-2">Verifikasi</button>
		<button type="reset" class="btn btn-danger">Tolak</button>
	</div> --}}
	<!--end::Body-->
</div>
@endsection

