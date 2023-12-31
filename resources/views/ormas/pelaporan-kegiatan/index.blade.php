@extends('app', ['title' => 'Pelaporan Kegiatan'])
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        @php
            $user = auth()->user();
            $dataPelaporanKegiatan = \App\Models\PelaporanKegiatan::where('ormas_id', $user->id)
                ->latest()
                ->first();
        @endphp
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
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Pelaporan
                                Kegiatan</a>
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->
                </div>
                @if ($dataPelaporanKegiatan != null)
                    <div class="ms-auto">
                        <a href="{{ secure_url('/pelaporan-kegiatan/create') }}" style="background-color:#87C027"
                            class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Tambah
                            Pelaporan</a>
                        <button data-toggle="modal" data-target="#exampleModalCenter" style="background-color:#87C027"
                            class="btn btn-transparent-white font-weight-bold py-2 px-2 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="26px" height="26px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd ">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#ffffff" opacity="0.3" cx="12" cy="12" r="10" />
                                    <rect fill="#ffffff" x="11" y="10" width="2" height="7" rx="1" />
                                    <rect fill="#fefefe" x="11" y="7" width="2" height="2" rx="1" />
                                </g>
                            </svg>
                        </button>
                    </div>
                @endif
                @php
                    $user = auth()->user();
                    $dataSkt = \App\Models\SKT::where('ormas_id', $user->id)
                        ->latest()
                        ->first();
                @endphp
                @if ($dataSkt != null && $dataPelaporanKegiatan == null && $dataSkt->status == 'Berhasil Kirim SKT')
                    <div class="ms-auto">
                        <button data-toggle="modal" data-target="#exampleModalCenter" style="background-color:#87C027"
                            class="btn btn-transparent-white font-weight-bold py-2 px-2 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="26px" height="26px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd ">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#ffffff" opacity="0.3" cx="12" cy="12" r="10" />
                                    <rect fill="#ffffff" x="11" y="10" width="2" height="7" rx="1" />
                                    <rect fill="#fefefe" x="11" y="7" width="2" height="2" rx="1" />
                                </g>
                            </svg>
                        </button>
                    </div>
                @endif
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->

        @if ($dataPelaporanKegiatan == null)
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Dashboard-->
                    <!--begin::Row-->
                    <div class="card card-custom gutter-b">
                        <div class="card-body mx-4 my-4">
                            <!--begin::Top-->
                            <div class="pt-15 pt-md-10 pb-10 px-5 text-center">
                                <!--begin::Icon-->
                                <div class="d-flex flex-center mb-10">
                                    <span class="svg-icon svg-icon-5x svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Flower3.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Content-->
                                @if ($pelaporanKegiatan->isempty())
                                    <h4 class="font-size-h4 font-weight-bolder mb-0">Belum Ada Pelaporan</h4>
                                @endif
                                @php
                                    $user = auth()->user();
                                    $latestSkt = \App\Models\SKT::where('ormas_id', $user->id)
                                        ->latest()
                                        ->first();
                                @endphp

                                <div class="mt-7">
                                    @if ($latestSkt && $latestSkt->status == 'Berhasil Kirim SKT')
                                        <a href="{{ secure_url('/pelaporan-kegiatan/create') }}" style="background-color:#87C027"
                                            class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Tambah
                                            Pelaporan</a>
                                    @else
                                        <h6 class="font-size-h6 text-muted mb-10">Pelaporan Kegiatan dapat dilakukan jika
                                            anda telah memiliki SKT</h6>
                                        <button data-toggle="modal" data-target="#exampleModalCenter"
                                            class="btn btn-outline-primary font-weight-bold ml-2">Lihat Syarat</button>
                                    @endif
                                </div>
                                <!--end::Icon-->
                            </div>
                            <!--end::Top-->
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
        @endif

        <div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Persyaratan Permohonan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>1. Laporan Kegiatan<a
                                href="https://drive.google.com/drive/folders/1jyiwbxbgzfub3e5s7T-b-hX51zQ-jrm2?usp=sharing"
                                target="_blank" class="font-weight-bold">(Download)</a> </p>
                        <p>2. Foto Kegiatan sebanyak 2</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                @foreach ($pelaporanKegiatan as $item)
                    <!--begin::Card 1-->
                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <!--begin::Top-->
                            <div class="d-flex">
                                <!--begin: Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                        <!--begin::User-->
                                        <div class="mr-3">
                                            <!--begin::Name-->
                                            <span
                                                class="d-flex align-items-center text-black-50 font-size-h6 font-weight-bold mr-3">{{ \Carbon\Carbon::parse($item->waktu_pelaksanaan)->format('d F Y') }}
                                            </span>
                                            <span
                                                class="d-flex align-items-center text-dark font-size-h4 font-weight-bolder mr-3">{{ $item->jenis_kegiatan }}
                                            </span>
                                            <!--end::Name-->
                                        </div>
                                        <!--begin::User-->
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center">
                                            <a href='/pelaporan-kegiatan/detail/{{ $item->id }}'
                                                class="btn btn-outline-primary font-weight-bold px-4 py-2">Lihat
                                                Detail</a>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                        <!--begin::Description-->
                                        <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                                            {{ $item->tujuan_permohonan }}
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Separator-->
                            <div class="separator separator-solid my-7"></div>
                            <!--end::Separator-->
                            <!--begin::Bottom-->
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin: Item-->
                                    <div class="d-flex align-items-center mr-5 my-1">
                                        <span class="svg-icon svg-icon-2x svg-icon-primary pr-3">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Flower3.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z"
                                                        fill="#000000" opacity="0.3"
                                                        transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) " />
                                                    <path
                                                        d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <div class="d-flex flex-column text-dark-75">
                                            <span class="font-weight-bolder font-size-h5">
                                                <span class="text-black font-weight-bold">Rp
                                                    {{ number_format($item->jumlah_anggaran, 0, ',', '.') }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mr-5 my-1">
                                        <span class="svg-icon svg-icon-2x svg-icon-primary pr-3">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Flower3.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <div class="d-flex flex-column text-dark-75">
                                            <span class="font-weight-bolder font-size-h5">
                                                <span
                                                    class="text-black font-weight-bold">{{ $item->lokasi_pelaksanaan }}</span>
                                        </div>
                                    </div>
                                    <!--end: Item-->
                                </div>
                                @if ($item->status == 'Berhasil Verifikasi')
                                    <span style="background-color:#ECFDF5; margin-left:auto; display:flex;"
                                        class="label text-primary label-xl label-inline">Laporan Diterima</span>
                                @elseif($item->status == 'Menunggu Verifikasi')
                                    <span style="background-color:#FFF9E2; margin-left:auto; display:flex;"
                                        class="label text-warning label-xl label-inline">Menunggu Verifikasi</span>
                                @else
                                    <span style="background-color:#F6EBEB; margin-left:auto; display:flex;"
                                        class="label text-danger label-xl label-inline">Permohonan Ditolak</span>
                                @endif
                            </div>
                            <!--end::Bottom-->
                        </div>
                    </div>
                    <!--end::Card 1-->
                @endforeach
            </div>
            <!--end::Container-->
        </div>
    </div>
@endsection
