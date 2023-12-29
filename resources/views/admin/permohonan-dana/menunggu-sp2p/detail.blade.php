@extends('admin.permohonan-dana.index')
@section('detail')
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-body d-flex border-0">
            <a href="{{ url('permohonan-dana/menunggu') }}" class="card-icon pr-4 py-0">
                <i class="flaticon2-left-arrow-1 text-dark"></i>
            </a>
            <h6 class="font-weight-bolder m-0 py-1">
                Kirim Tanda Terima Dana
            </h6>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-0 m-0">
            <!--begin::Form-->
            <form class="form" enctype="multipart/form-data" method="POST"
                action="/permohonan-dana/sp2p/{{ $menunggu->id }}">
                @csrf
                <div class="form-group">
                    <label>Nama Organisasi</label>
                    <input class="form-control" disabled="disabled" value="{{ $menunggu->ormas->nama_organisasi }}" />
                </div>
                <div class="form-group">
                    <label>File Tanda Terima Dana</label>
                    <div></div>
                    <div class="custom-file">
                        <input type="file" name="file_sp2p" class="custom-file-input" accept=".pdf" required
                            id="customFile" />
                        <label class="custom-file-label" for="customFile">Pilih file</label>
                    </div>
                </div>
                <div class="pb-5 justify-content-end d-flex">
                    <button type="reset" class="btn btn-secondary mr-2">BATAL</button>
                    <button type="submit" class="btn btn-primary px-6 ">KIRIM</button>
                </div>
            </form>
        </div>
        <!--end::Form-->
    </div>
    </div>
    <!--end::Body-->
    </div>
@endsection
