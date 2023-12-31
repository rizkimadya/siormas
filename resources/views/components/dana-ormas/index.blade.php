@extends("app")
@section("content")
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
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
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Permohonan Dana</a>
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
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Card Belum Memohon-->
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
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z" fill="#000000" opacity="0.3" transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) "/>
                                        <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Content-->
                        <h4 class="font-size-h4 mb-10">Belum Ada Permohonan Dana</h4>
                        <div class="mt-7">
                            <a href="#" style="background-color:#87C027" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Tambah Permohonan</a>
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
    <!--end::Card Belum Memohon-->

    <!--begin::Card Telah Memohon-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
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
                                    <span class="d-flex align-items-center text-dark text-hover-primary font-size-h4 font-weight-bolder mr-3">Periode 2023 </span>
                                    <!--end::Name-->
                                </div>
                                <!--begin::User-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center">
                                    <a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Lihat Detail</a>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <!--begin::Description-->
                                <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">Untuk Pengembangan Kepedulian Kemanusiaan dan Bhakti Sosial ke arah yang lebih baik.
                                <br> Membuka akses, peluang, sarana dan prasarana yang memadai.</div>
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
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z" fill="#000000" opacity="0.3" transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) "/>
                                        <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bolder font-size-h5">
                                <span class="text-black font-weight-bold">Rp 42.249.500</span>
                            </div>
                        </div>
                        <span style="background-color:#FFF9E2" class="label text-warning label-xl label-inline">Menunggu Verifikasi</span> 
                        <!--end: Item-->
                    </div>
                    <!--end::Bottom-->
                </div>
            </div>
            <!--end::Card 1-->
            <!--begin::Card 2-->
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
                                    <span class="d-flex align-items-center text-dark text-hover-primary font-size-h4 font-weight-bolder mr-3">Periode 2023 </span>
                                    <!--end::Name-->
                                </div>
                                <!--begin::User-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center">
                                    <a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Lihat Detail</a>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <!--begin::Description-->
                                <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">Untuk Pengembangan Kepedulian Kemanusiaan dan Bhakti Sosial ke arah yang lebih baik.
                                <br> Membuka akses, peluang, sarana dan prasarana yang memadai.</div>
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
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                            <span class="svg-icon svg-icon-2x svg-icon-primary pr-3">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Flower3.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z" fill="#000000" opacity="0.3" transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) "/>
                                        <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bolder font-size-h5">
                                <span class="text-black font-weight-bold">Rp 42.249.500</span>
                            </div>
                        </div>
                        <div class="flex-grow-1 align-items-center  ">
                            <span style="background-color:#ECFDF5" class="label text-primary label-xl label-inline">Berhasil Verifikasi</span>
                            <span class="form-text text-muted">Silahkan menunggu konfirmasi</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Bottom-->
                </div>
            </div>
            <!--end::Card 2-->
            <!--begin::Pagination-->
            {{-- <div class="card card-custom">
                <div class="card-body py-7">
                    <!--begin::Pagination-->
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="d-flex flex-wrap mr-3">
                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                <i class="ki ki-bold-arrow-back icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                <i class="ki ki-bold-arrow-next icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                            </a>
                        </div>
                        <div class="d-flex align-items-center">
                            <select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span class="text-muted">Displaying 10 of 230 records</span>
                        </div>
                    </div>
                    <!--end:: Pagination-->
                </div>
            </div> --}}
            <!--end::Pagination-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Card Telah Memohon-->

    <!--begin::Detail Card-->
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
                            <!--begin::Header-->
                            <div class="d-flex border-0 pb-6">
                                <span class="card-icon pr-4 py-0">
                                    <i class="flaticon2-left-arrow-1 text-dark"></i>
                                </span>
                                <h6 class="font-weight-bolder m-0 py-1">
                                    Detail Permohonan
                                </h6>
                            </div>
                            <!--end::Header-->
                            <!--begin::detail-->
                            <h3 class="font-weight-bolder">Informasi Pemohon</h3>
                            <tr class="pb-6">
                                <td class="p-0 py-4">
                                    <div class="d-flex justify-content-between pt-6">
                                        <div class="d-flex flex-column flex-root">
                                            <h7 class="opacity-70 mb-3">Periode</h7>
                                            <h6 class="font-weight-bolder">2023</h6>
                                        </div>
                                        <div class="d-flex flex-column flex-root">
                                            <h7 class="opacity-70 mb-3">Jumlah Anggaran</h7>
                                            <h6 class="font-weight-bolder">Rp. 42.560.000</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="d-flex justify-content-between pt-6">
                                        <div class="d-flex flex-column flex-root">
                                            <h7 class="opacity-70 mb-3">Tujuan</h7>
                                            <h6 class="font-weight-bolder">Untuk Pengembangan Kepedulian Kemanusiaan dan Bhakti Sosial ke arah yang lebih baik. Membuka akses, peluang, sarana dan
                                                prasarana yang memadai.</h6>
                                        </div>
                                        <div class="d-flex flex-column flex-root">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!--end::detail-->
                            <!--begin::detail-->
                            <h3 class="font-weight-bolder py-6">Dokumen Pemohon</h3>
                            <div class="row m-0">
                                <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Surat Permohonan</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Buttonpreview-->
                                    <a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                    <!--end::Buttonpreview-->
                                </div>
                                <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Proposal</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Buttonpreview-->
                                    <a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                    <!--end::Buttonpreview-->
                                </div>
                            </div>
                            <div class="row mt-6 m-0">
                                <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Fotocopy KTP Ketua</span>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Buttonpreview-->
                                        <a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                        <!--end::Buttonpreview-->
                                </div>
                                <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Fotocopy KTP Sekertaris</span>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Buttonpreview-->
                                        <a href='#' class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                        <!--end::Buttonpreview-->
                                </div>
                            </div>
                            <!--end::detail-->
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
    <!--end::Detail Card-->

    <!--begin::Form Memohon-->
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
                            <!--begin::Form-->
                            <form class="form" id="kt_contact_add_form">
                                <!--begin::Form Wizard Step 1-->
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Nama Organisasi</label>
                                            <div>
                                                <input class="form-control" disabled="disabled" placeholder="Majelis Pimpinan Pemuda Pancasila"/>
                                                {{-- <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Periode</label>
                                            <input class="form-control" disabled="disabled" placeholder="2023"/>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Jumlah Anggaran Permohonan <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                                <span class="form-text text-muted">Total Anggaran yang dibutuhkan</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Tujuan Permohonan</label>
                                            <div>
                                                <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                                                {{-- <span class="form-text text-muted">Lokasi organisasi didirikan contoh: Kota Makassar</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Surat Permohonan <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-black">File dalam bentuk: pdf Max. file size: 500 MB</span>
                                                <span class="form-text text-muted">Surat Permohonan Tertulis Kepada Bupati Wajo, dilengkapi rincian rencana penggunaan belanja hibah</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Proposal <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-black">File dalam bentuk: pdf Max. file size: 500 MB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Fotocopy KTP Ketua <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-black">File dalam bentuk: pdf Max. file size: 500 MB</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Fotocopy KTP Sekertaris <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-black">File dalam bentuk: pdf Max. file size: 500 MB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between border-top pt-10">
                                        <div>
                                            <button type="button" class="btn btn-secondary font-weight-bold text-uppercase px-6 py-3 mr-2" ">Batal</button>
                                            <button type="button" class="btn btn-primary font-weight-bold text-uppercase px-6 py-3" ">Kirim Permohonan</button>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Form Wizard Step 1-->
                            </form>
                            <!--end::Form Wizard Form-->
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
    <!--end::Form Memohon-->
</div>
@endsection