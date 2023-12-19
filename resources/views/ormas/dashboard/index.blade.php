@extends('components.index', ['title' => 'Dashboard Ormas'])
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
                                <a href="{{ url('/dashboard-ormas/permohonan-skt') }}" style="background-color:#87C027"
                                    class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Buat Permohonan</a>
                                <!--end::Button-->
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
@endsection