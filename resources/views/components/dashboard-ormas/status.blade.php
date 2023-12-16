@extends("components.dashboard-ormas.index")
@section("detail")
<div class="card card-custom">
	<!--begin::Header-->
	<div class="card-header ">
		<h6 class="font-weight-bolder pt-8 m-0">
			Status SKT
		</h6>
	</div>
	<!--end::Header-->
	<!--begin::Body-->
	<div class="card-body pt-8 mb-0">
		<!--begin::Alert-->
		<div style="background-color:#ECFDF5" class="alert border-primary d-flex align-items-center p-5 m-0">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column mr-auto">
				<!--begin::Title-->
				<h6 class="font-weight-bolder text-primary pb-1">Berhasil Verifikasi Berkas</h6>
				<!--end::Title-->
				<!--begin::Content-->
				<span class="text-primary">Permohonan SKT Anda telah berhasil, silahkan lakukan preview </span>
				<!--end::Content-->
			</div>
			<a href='#' class="btn btn-primary font-weight-bold px-4 py-2">Preview</a>
			<!--end::Wrapper-->
		</div>
		<div style="background-color:#FFF9E2" class="alert border-warning d-flex align-items-center p-5 mt-4">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column mr-auto">
				<!--begin::Title-->
				<h6 class="font-weight-bolder text-warning pb-1">Menunggu Verifikasi Berkas</h6>
				<!--end::Title-->
				<!--begin::Content-->
				<span class="text-warning">Permohonan SKT Anda masih dalam proses verifikasi oleh pihak Verifikator Bankesbangpol</span>
				<!--end::Content-->
			</div>
			<!--end::Wrapper-->
		</div>
		<div style="background-color:#F6EBEB" class="alert border-danger d-flex align-items-center p-5 mt-4">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column mr-auto">
				<!--begin::Title-->
				<h6 class="font-weight-bolder text-danger pb-1">Menunggu Verifikasi Berkas</h6>
				<!--end::Title-->
				<!--begin::Content-->
				<span class="text-danger">Maaf berkas anda ditolak, Silahkan lakukan permohonan SKT ulang</span>
				<!--end::Content-->
			</div>
			<a href='#' class="btn btn-danger font-weight-bold px-4 py-2">Buat Permohonan</a>
			<!--end::Wrapper-->
		</div>
		<!--end::Alert-->
	</div>
	
	<!--end::Body-->
</div>
@endsection