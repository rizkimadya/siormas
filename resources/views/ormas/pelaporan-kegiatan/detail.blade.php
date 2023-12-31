@extends('app', ['title' => 'Pelaporan Kegiatan'])
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
                            <a href="{{ secure_url('pelaporan-kegiatan/index') }}"
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
                                <div class="d-flex border-0 pb-6">
                                    <a href="{{ secure_url('/pelaporan-kegiatan/index') }}" class="card-icon pr-4 py-0">
                                        <i class="flaticon2-left-arrow-1 text-dark"></i>
                                    </a>
                                    <h6 class="font-weight-bolder m-0 py-1">
                                        Detail Pelaporan
                                    </h6>
                                </div>
                                <!--Revisi::Tambah Alert-->
                                <!--begin::Alert-->
                                @if ($pelaporanKegiatan->status == 'Berhasil Verifikasi')
                                    <div style="background-color:#ECFDF5"
                                        class="alert border-primary d-flex align-items-center p-5 m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column mr-auto">
                                            <!--begin::Title-->
                                            <h6 class="font-weight-bolder text-primary pb-1">Laporan Diterima</h6>
                                            <!--end::Title-->
                                            <!--begin::Content-->
                                            <span class="text-primary">Laporan Anda telah berhasil diterima</span>
                                            <!--end::Content-->
                                        </div>
                                    </div>
                                @elseif($pelaporanKegiatan->status == 'Menunggu Verifikasi')
                                    <div style="background-color:#FFF9E2"
                                        class="alert border-warning d-flex align-items-center p-5 mt-4">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column mr-auto">
                                            <!--begin::Title-->
                                            <h6 class="font-weight-bolder text-warning pb-1">Menunggu Verifikasi Laporan
                                            </h6>
                                            <!--end::Title-->
                                            <!--begin::Content-->
                                            <span class="text-warning">Pelaporan kegiatan Anda masih dalam proses verifikasi
                                                oleh pihak Verifikator
                                                Bankesbangpol</span>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                @else
                                    <div style="background-color:#F6EBEB"
                                        class="alert border-danger d-flex align-items-center p-5 mt-4">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column mr-auto">
                                            <!--begin::Title-->
                                            <h6 class="font-weight-bolder text-danger pb-1">Laporan Ditolak</h6>
                                            <!--end::Title-->
                                            <!--begin::Content-->
                                            <span class="text-danger">Maaf Laporan Anda ditolak</span>
                                            <span class="text-black">Keterangan: {{ $pelaporanKegiatan->keterangan }}</span>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                @endif

                                <!--end::Alert-->
                                <h4 class="mt-8">Keterangan Pelaporan Kegiatan</h4>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column flex-root pr-8">
                                            <h7 class="opacity-70 mb-3">Jenis Kegiatan</h7>
                                            <h6 class="font-weight-bolder">
                                                {{ $pelaporanKegiatan->jenis_kegiatan }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column flex-root pr-8">
                                            <h7 class="opacity-70 mb-3">Waktu Pelaksanaan</h7>
                                            <h6 class="font-weight-bolder">
                                                {{ \Carbon\Carbon::parse($pelaporanKegiatan->waktu_pelaksanaan)->format('d F Y') }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-6">
                                        <div class="d-flex flex-column flex-root pr-8">
                                            <h7 class="opacity-70 mb-3">Lokasi Pelaksanaan</h7>
                                            <h6 class="font-weight-bolder">
                                                {{ $pelaporanKegiatan->lokasi_pelaksanaan }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-6">
                                        <div class="d-flex flex-column flex-root pr-8">
                                            <h7 class="opacity-70 mb-3">Kelurahan</h7>
                                            <h6 class="font-weight-bolder" id="kelurahanName">
                                                {{ $pelaporanKegiatan->kelurahan }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-6">
                                        <div class="d-flex flex-column flex-root pr-8">
                                            <h7 class="opacity-70 mb-3">Kecamatan</h7>
                                            <h6 class="font-weight-bolder" id="kecamatanName">
                                                {{ $pelaporanKegiatan->kecamatan }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-6">
                                        <div class="d-flex flex-column flex-root pr-8">
                                            <h7 class="opacity-70 mb-3">Nama Penanggung Jawab/Ketua Panitia </h7>
                                            <h6 class="font-weight-bolder">
                                                {{ $pelaporanKegiatan->ketupat }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-6">
                                        <div class="d-flex flex-column flex-root pr-8">
                                            <h7 class="opacity-70 mb-3">Jumlah Anggaran</h7>
                                            <h6 class="font-weight-bolder"> Rp.
                                                {{ number_format($pelaporanKegiatan->jumlah_anggaran, 0, ',', '.') }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-6">
                                        <div class="d-flex flex-column flex-root pr-8">
                                            <h7 class="opacity-70 mb-3">Deskripsi Kegiatan</h7>
                                            <h6 class="font-weight-bolder">
                                                {{ $pelaporanKegiatan->tujuan_permohonan }}</h6>
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
                                                href="{{ secure_asset('storage/laporanKegiatan/' . $pelaporanKegiatan->laporan_kegiatan) }}"
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
                                                href="{{ secure_asset('storage/fotoKegiatan/' . $pelaporanKegiatan->foto_kegiatan1) }}"
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
                                                href="{{ secure_asset('storage/fotoKegiatan/' . $pelaporanKegiatan->foto_kegiatan2) }}"
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
                                                    href="{{ secure_asset('storage/fotoKegiatan/' . $pelaporanKegiatan->foto_kegiatan3) }}"
                                                    class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                                <!--end::Buttonpreview-->
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                {{-- <div class="d-flex justify-content-end border-top pt-10">
                                    <a href="{{ secure_url('/pelaporan-kegiatan/index') }}"
                                        class="btn btn-primary font-weight-bold text-uppercase px-6 py-3">
                                        Kembali</a>
                                </div> --}}
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
