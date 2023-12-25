@extends('ormas.dashboard.app')
@section("detail")
<div class="card card-custom">
	<!--begin::Header-->
	<div class="card-header ">
		<h6 class="font-weight-bolder pt-8 m-0">
			Dokumen Ormas
		</h6>
	</div>
	<!--end::Header-->
	<!--begin::Body-->
	<div class="card-body pt-8">
		<!--begin::Form-->
		<div class="row m-0">
			<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
					<!--begin::Title-->
					<div class="d-flex flex-column flex-grow-1 mr-2">
						<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Logo Organisasi</span>
					</div>
					<!--end::Title-->
					<!--begin::Buttonpreview-->
					<a target="_blank" href='{{ asset('storage/logo_organisasi/'.$dokumen->logo_organisasi) }}' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
					<!--end::Buttonpreview-->
			</div>
			<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
					<!--begin::Title-->
					<div class="d-flex flex-column flex-grow-1 mr-2">
						<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Surat Pengantar</span>
					</div>
					<!--end::Title-->
					<!--begin::Buttonpreview-->
					<a target="_blank" href='{{ asset('storage/surat_pengantar/'.$dokumen->surat_pengantar) }}' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
					<!--end::Buttonpreview-->
			</div>
		</div>
		<div class="row mt-6 m-0">
			<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
					<!--begin::Title-->
					<div class="d-flex flex-column flex-grow-1 mr-2">
						<span class="font-weight-bold text-dark-75 font-size-lg mb-1">SK Kementrian Hukum dan Ham</span>
					</div>
					<!--end::Title-->
					<!--begin::Buttonpreview-->
					<a target="_blank" href='{{ asset('storage/sk_kemenkum_ham/'.$dokumen->sk_kemenkum_ham) }}' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
					<!--end::Buttonpreview-->
			</div>
			<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
					<!--begin::Title-->
					<div class="d-flex flex-column flex-grow-1 mr-2">
						<span class="font-weight-bold text-dark-75 font-size-lg mb-1">SK Pengurus</span>
					</div>
					<!--end::Title-->
					<!--begin::Buttonpreview-->
					<a target="_blank" href='{{ asset('storage/sk_pengurus/'.$dokumen->sk_pengurus) }}' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
					<!--end::Buttonpreview-->
			</div>
		</div>
		<div class="row mt-6 m-0">
			<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
					<!--begin::Title-->
					<div class="d-flex flex-column flex-grow-1 mr-2">
						<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Surat Keterangan Domisili</span>
					</div>
					<!--end::Title-->
					<!--begin::Buttonpreview-->
					<a target="_blank" href='{{ asset('storage/sk_domisili/'.$dokumen->sk_domisili) }}' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
					<!--end::Buttonpreview-->
			</div>
			<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
					<!--begin::Title-->
					<div class="d-flex flex-column flex-grow-1 mr-2">
						<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Surat Pernyataan</span>
					</div>
					<!--end::Title-->
					<!--begin::Buttonpreview-->
					<a target="_blank" href='{{ asset('storage/surat_pernyataan/'.$dokumen->surat_pernyataan) }}' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
					<!--end::Buttonpreview-->
			</div>
		</div>
		<div class="row mt-6 m-0">
			<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
					<!--begin::Title-->
					<div class="d-flex flex-column flex-grow-1 mr-2">
						<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Biodata Pengurus</span>
					</div>
					<!--end::Title-->
					<!--begin::Buttonpreview-->
					<a target="_blank" href='{{ asset('storage/biodata_pengurus/'.$dokumen->biodata_pengurus) }}' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
					<!--end::Buttonpreview-->
			</div>
			<div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
					<!--begin::Title-->
					<div class="d-flex flex-column flex-grow-1 mr-2">
						<span class="font-weight-bold text-dark-75 font-size-lg mb-1">Akta Notaris dan NPWP</span>
					</div>
					<!--end::Title-->
					<!--begin::Buttonpreview-->
					<a target="_blank" href='{{ asset('storage/akta_notaris/'.$dokumen->akta_notaris) }}' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
					<!--end::Buttonpreview-->
			</div>
		</div>
	</div>
		<!--end::Form-->
	</div>
	</div>
	<!--end::Body-->
</div>
@endsection