@extends('app', ['title' => 'Dashboard Ormas'])
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Heading-->
                    <div class="d-flex flex-column">
                        <!--begin::Title-->
                        <h2 class="text-white font-weight-bold my-2 mr-5">Dashboard</h2>
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
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
                            <!--end::Item-->
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Dashboard-->
                <!--begin::Row-->
                <div class="card card-custom gutter-b">
                    <div class="card-body mx-4 my-4">
                        <!--begin::Top-->
                        <div class="d-flex">
                            <!--begin: Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                    <!--begin::User-->
                                    <div class="mr-3">
                                        <!--begin::Name-->
                                        <div
                                            class="d-flex align-items-center text-dark font-size-h4 font-weight-normal mr-3">
                                            Selamat Datang</div>
                                        <!--end::Name-->
                                        <!--begin::Contacts-->
                                        <div
                                            class="d-flex align-items-center text-dark font-size-h2 font-weight-bolder my-2">
                                            {{ auth()->user()->nama_organisasi }}</div>
                                        <!--end::Contacts-->
                                    </div>
                                    <!--begin::User-->
                                </div>
                                <!--end::Title-->
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                    <!--begin::Description-->
                                    <div class="flex-grow-1 font-size-h6 font-weight-normal text-dark-50 py-2 py-lg-2 mr-5">
                                        Anda belum terdaftar pada Bankesbangpol Wajo, Silahkan

                                        <br />lakukan permohonan SKT.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <!--begin::Button-->
                                <a href="{{ secure_url('/dashboard-ormas/permohonan-skt') }}" style="background-color:#87C027"
                                    class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Buat Permohonan</a>
                                <button data-toggle="modal" data-target="#exampleModalCenter"
                                    style="background-color:#87C027"
                                    class="btn btn-transparent-white font-weight-bold py-2 px-2 mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="26px" height="26px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd ">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#ffffff" opacity="0.3" cx="12" cy="12" r="10" />
                                            <rect fill="#ffffff" x="11" y="10" width="2" height="7"
                                                rx="1" />
                                            <rect fill="#fefefe" x="11" y="7" width="2" height="2"
                                                rx="1" />
                                        </g>
                                    </svg>
                                </button>
                                <!--end::Button-->
                                <!-- Modal-->
                                <div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1"
                                    role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Persyaratan Permohonan</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>1. Logo Organisasi</p>
                                                <p>2. Surat Pengantar ditujukan Kepala Badan Kesbang dan Politik Kab. Wajo
                                                    <a href="https://drive.google.com/drive/folders/12TPMNoQaOCQja_oEDH4ppzon2q13tbok?usp=sharing"
                                                        target="_blank" class="font-weight-bold">(Download)</a> </p>
                                                <p>3. SK Kementrian Hukum dan Ham</p>
                                                <p>4. SK Pengurus</p>
                                                <p>5. Surat Keterangan Domisili dari Lurah/Kepala Desa mengetahui Camat
                                                    setempat</p>
                                                <p>6. Surat Pernyataan <a
                                                        href="https://drive.google.com/drive/folders/12TPMNoQaOCQja_oEDH4ppzon2q13tbok?usp=sharing"
                                                        target="_blank" class="font-weight-bold">(Download)</a> </p>
                                                <p>7. Biodata Pengurus <a
                                                        href="https://drive.google.com/drive/folders/12TPMNoQaOCQja_oEDH4ppzon2q13tbok?usp=sharing"
                                                        target="_blank" class="font-weight-bold">(Download)</a> </p>
                                                <p>8. Akta Notaris dan NPWP</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Top-->
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
    </div>
    @endsection
