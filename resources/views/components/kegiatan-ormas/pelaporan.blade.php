@extends("components.kegiatan-ormas.index")
@section("detail")

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
                                <div class="d-flex align-items-center text-dark font-size-h4 font-weight-normal mr-3">Selamat Datang</div>
                                <!--end::Name-->
                                <!--begin::Contacts-->
                                <div class="d-flex align-items-center text-dark font-size-h2 font-weight-bolder my-2">Majelis Pimpinan Cabang Pemuda Pancasila Kab. Wajo</div>
                                <!--end::Contacts-->
                            </div>
                            <!--begin::User-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Content-->
                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                            <!--begin::Description-->
                            <div class="flex-grow-1 font-size-h6 font-weight-normal text-dark-50 py-2 py-lg-2 mr-5">Anda belum terdaftar pada Bankesbangpol Wajo, Silahkan
                                
                            <br />lakukan permohonan SKT.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Actions-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-primary font-weight-bold px-4 py-2">Buat Permohonan</a>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Top-->
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>

@endsection