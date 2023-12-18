@extends('components.index', ['title' => 'Pelaporan Kegiatan'])
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Mobile Toggle-->
                    <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                        id="kt_subheader_mobile_toggle">
                        <span></span>
                    </button>
                    <!--end::Mobile Toggle-->
                    <!--begin::Heading-->
                    <div class="d-flex flex-column">
                        <!--begin::Title-->
                        <h2 class="text-white font-weight-bold my-2 mr-5">Pelaporan Kegiatan</h2>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <div class="d-flex align-items-center font-weight-bold my-2">
                            <!--begin::Item-->
                            <a href="#" class="opacity-75 hover-opacity-100">
                                <i class="flaticon2-shelter text-white icon-1x"></i>
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="{{ url('pelaporan-kegiatan/index') }}"
                                class="text-white text-hover-white opacity-75 hover-opacity-100">Pelaporan
                                Kegiatan</a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white">Detail
                                Pelaporan Kegiatan</a>
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->

        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Form-->
                        <div class="row justify-content-center my-10 mx-8 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12">
                                <h4 class="mb-4">Keterangan Pelaporan Kegiatan</h4>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-0">Jenis Kegiatan</label>
                                            <p class="font-weight-bold text-dark-75 font-size-lg">
                                                {{ $pelaporanKegiatan->jenis_kegiatan }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-0">Waktu Pelaksanaan</label>
                                            <p class="font-weight-bold text-dark-75 font-size-lg">
                                                {{ \Carbon\Carbon::parse($pelaporanKegiatan->waktu_pelaksanaan)->format('d F Y') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-0">Lokasi Pelaksanaan</label>
                                            <p class="font-weight-bold text-dark-75 font-size-lg">
                                                {{ $pelaporanKegiatan->lokasi_pelaksanaan }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-0">Kelurahan</label>
                                            <p class="font-weight-bold text-dark-75 font-size-lg">
                                                {{ $pelaporanKegiatan->kelurahan }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-0">Kecamatan</label>
                                            <p class="font-weight-bold text-dark-75 font-size-lg">
                                                {{ $pelaporanKegiatan->kecamatan }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-0">Nama Penanggung Jawab/Ketua Panitia </label>
                                            <p class="font-weight-bold text-dark-75 font-size-lg">
                                                {{ $pelaporanKegiatan->ketupat }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-0">Jumlah Anggaran</label>
                                            <p class="font-weight-bold text-dark-75 font-size-lg">
                                                {{ $pelaporanKegiatan->jumlah_anggaran }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-0">Tujuan Permohonan</label>
                                            <p class="font-weight-bold text-dark-75 font-size-lg">
                                                {{ $pelaporanKegiatan->tujuan_permohonan }}</p>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-4">Dokumentasi Kegiatan</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Laporan
                                                    Kegiatan</span>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Buttonpreview-->
                                            <a target="_blank"
                                                href="{{ asset('storage/laporanKegiatan/' . $pelaporanKegiatan->laporan_kegiatan) }}"
                                                class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                            <!--end::Buttonpreview-->
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Foto Kegiatan
                                                    1</span>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Buttonpreview-->
                                            <a target="_blank"
                                                href="{{ asset('storage/fotoKegiatan/' . $pelaporanKegiatan->foto_kegiatan1) }}"
                                                class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                            <!--end::Buttonpreview-->
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Foto Kegiatan
                                                    2</span>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Buttonpreview-->
                                            <a target="_blank"
                                                href="{{ asset('storage/fotoKegiatan/' . $pelaporanKegiatan->foto_kegiatan2) }}"
                                                class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                            <!--end::Buttonpreview-->
                                        </div>
                                    </div>
                                    @if ($pelaporanKegiatan->foto_kegiatan3 != null)
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                                    <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Foto
                                                        Kegiatan 3</span>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Buttonpreview-->
                                                <a target="_blank"
                                                    href="{{ asset('storage/fotoKegiatan/' . $pelaporanKegiatan->foto_kegiatan3) }}"
                                                    class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                                <!--end::Buttonpreview-->
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-end border-top pt-10">
                                    <a href="{{ url('/pelaporan-kegiatan/index') }}"
                                        class="btn btn-primary font-weight-bold text-uppercase px-6 py-3">
                                        Kembali</a>
                                </div>
                            </div>
                        </div>
                        <!--end::form-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
    </div>
@endsection
