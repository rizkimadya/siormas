@extends('app', ['title' => 'Permohonan Dana'])
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        @php
            $user = auth()->user();
            $dataPermohonanDana = \App\Models\PermohonanDana::where('ormas_id', $user->id)
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
                        <h2 class="text-white font-weight-bold my-2 mr-5">Permohonan Dana</h2>
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
                            <a href="{{ secure_url('/permohonan-dana/index') }}"
                                class="text-white text-hover-white opacity-75 hover-opacity-100">Permohonan Dana</a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            {{-- <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Ormas Terdaftar</a>
                         --}}
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->
                </div>

                @if ($dataPermohonanDana != null)
                    <div class="ms-auto">
                        <a href="{{ secure_url('/permohonan-dana/create') }}" style="background-color:#87C027"
                            class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Tambah
                            Permohonan</a>
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
                @if ($dataSkt != null && $dataPermohonanDana == null && $dataSkt->status == 'Berhasil Kirim SKT')
                    >
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
            </div>
        </div>
        <!--end::Subheader-->

        @if ($dataPermohonanDana == null)
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
                                </div>
                                <!--end::Icon-->
                                <!--begin::Content-->
                                @if ($permohonanDana->isempty())
                                    <h4 class="font-size-h4 font-weight-bolder mb-0">Belum Ada Permohonan Dana</h4>
                                @endif
                                @php
                                    $user = auth()->user();
                                    $latestSkt = \App\Models\SKT::where('ormas_id', $user->id)
                                        ->latest()
                                        ->first();
                                @endphp
                                <div class="mt-7">
                                    @if ($latestSkt && $latestSkt->status == 'Berhasil Kirim SKT')
                                        <a href="{{ secure_url('/permohonan-dana/create') }}" style="background-color:#87C027"
                                            class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Tambah
                                            Permohonan</a>
                                    @else
                                        <h4 class="font-size-h6 text-muted mb-10">Permohonan Dana dapat dilakukan jika anda
                                            telah memiliki SKT</h4>
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
                        <p>1. Surat Permohonan tertulis kepada Bupati Kab. Wajo <a
                                href="https://drive.google.com/drive/folders/1wkVEboMfLeL1vxSpfyyCjC_asKizjXMA?usp=sharing"
                                target="_blank" class="font-weight-bold">(Download)</a> </p>
                        <p>2. Proposal <a
                                href="https://drive.google.com/drive/folders/1wkVEboMfLeL1vxSpfyyCjC_asKizjXMA?usp=sharing"
                                target="_blank" class="font-weight-bold">(Download)</a> </p>
                        <p>3. Fotocopy KTP Ketua/Pimpinan dan Sekertaris</p>
                        <p>4. Surat Keterangan Domisili dari Lurah/Kepala Desa mengetahui Camat setempat</p>
                        <p>5. Fotocopy Buku Rekening</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                @foreach ($permohonanDana as $item)
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
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h4 font-weight-bolder mr-3">Periode
                                                {{ $item->periode }} </span>
                                            <!--end::Name-->
                                        </div>
                                        <!--begin::User-->
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center">
                                            <a href='/permohonan-dana/detail/{{ $item->id }}'
                                                class="btn btn-outline-primary font-weight-bold px-4 py-2">Lihat Detail</a>
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
                            <div class="d-flex align-items-center flex-wrap">
                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                    <span class="svg-icon svg-icon-2x svg-icon-primary pr-3">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Flower3.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                                                {{ number_format($item->jumlah_anggaran, 0, ',', '.') }}
                                            </span>
                                    </div>
                                </div>
                                @if ($item->status == 'Berhasil Kirim SP2P')
                                    <span style="background-color:#ECFDF5"
                                        class="label text-primary label-xl label-inline">Terima Dana</span>
                                @elseif($item->status == 'Berhasil Verifikasi')
                                    <div>
                                        <span style="background-color:#E8e7ff"
                                            class="label text-info label-xl label-inline">Menunggu Antrian</span>
                                    </div>
                                @elseif($item->status == 'Menunggu Verifikasi')
                                    <div>
                                        <span style="background-color:#FFF9E2"
                                            class="label text-warning label-xl label-inline">Menunggu Verifikasi</span>
                                    </div>
                                @else
                                    <div>
                                        <span style="background-color:#F6EBEB"
                                            class="label text-danger label-xl label-inline">Permohonan Ditolak</span>
                                    </div>
                                @endif
                                <!--end: Item-->
                            </div>
                            <!--end::Bottom-->
                        </div>
                    </div>
                @endforeach

            </div>
            <!--end::Container-->
        </div>
    </div>
@endsection
