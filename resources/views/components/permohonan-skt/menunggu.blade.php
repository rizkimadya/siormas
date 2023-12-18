@extends("components.permohonan-skt.index")
@section("detail")
<div class="card card-custom">
	<!--begin::Header-->
	<div class="card-body d-flex border-0">
		<span class="card-icon pr-4 py-0">
			<i class="flaticon2-left-arrow-1 text-dark"></i>
		</span>
		<h6 class="font-weight-bolder m-0 py-1">
			Kirim SKT
		</h6>
	</div>
	<!--end::Header-->
	<!--begin::Body-->
	<div class="card-body py-0 m-0">
		<!--begin::Form-->
			<form class="form">
				<div class="form-group">
					<label>Nama Organisasi</label>
					<input class="form-control" disabled="disabled" placeholder="Majelis Pimpinan Pemuda Pancasila"/>
				</div>
				<div class="form-group">
					<label>File SKT</label>
						<div></div>
						<div class="custom-file">
						<input type="file" class="custom-file-input" id="customFile"/>
					<label class="custom-file-label" for="customFile">Pilih file</label>
				</div>
				</div>
				<div class="form-group">
					<label for="exampleTextarea">Keterangan</label>
					<textarea class="form-control" readonly rows="3"></textarea>
				</div>
				</div>
			</form>
			<div class="card-footer">
				<button type="reset" class="btn btn-secondary mr-2">BATAL</button>
				<button type="reset" class="btn btn-primary px-6">KIRIM</button>
			</div>
		<!--end::Form-->
	</div>
	</div>
	<!--end::Body-->
</div>
@endsection