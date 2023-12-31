@extends('app', ['title' => 'Permohonan SKT'])
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
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white">Permohonan SKT</a>
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
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="card card-custom">
                    <div class="card-body p-0">
                        <!--begin::Wizard-->
                        <div class="wizard wizard-1" id="kt_wizard_v1" data-wizard-state="step-first"
                            data-wizard-clickable="false">
                            <!--begin::Wizard Nav-->
                            <div class="wizard-nav border-bottom">
                                <div class="wizard-steps p-8 p-lg-10">
                                    <!--begin::Wizard Step 1 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-label">
                                            <span class="svg-icon svg-icon-4x wizard-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                            fill="#000000" />
                                                        <rect fill="#000000" opacity="0.3"
                                                            transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                            x="16.3255682" y="2.94551858" width="3" height="18"
                                                            rx="1" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <h4 class="wizard-title">Data Keorganisasian</h4>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3"
                                                        transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                        x="11" y="5" width="2" height="14" rx="1" />
                                                    <path
                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Wizard Step 1 Nav-->
                                    <!--begin::Wizard Step 2 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                            <span class="svg-icon svg-icon-4x wizard-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <h4 class="wizard-title">Data Kepengurusan</h4>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3"
                                                        transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                        x="11" y="5" width="2" height="14" rx="1" />
                                                    <path
                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Wizard Step 2 Nav-->
                                    <!--begin::Wizard Step 3 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                            <span class="svg-icon svg-icon-4x wizard-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
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
                                            <h4 class="wizard-title">Dokumen Ormas</h4>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3"
                                                        transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                        x="11" y="5" width="2" height="14" rx="1" />
                                                    <path
                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Wizard Step 3 Nav-->
                                    <!--begin::Wizard Step 4 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                            <span class="svg-icon svg-icon-4x wizard-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                            fill="#000000" />
                                                        <circle fill="#000000" opacity="0.3" cx="18.5"
                                                            cy="5.5" r="2.5" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <h3 class="wizard-title">Simpan</h3>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 4 Nav-->
                                </div>
                            </div>
                            <!--end::Wizard Nav-->
                            <!--begin::Wizard Body-->
                            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                <div class="col-xl-12 col-xxl-7">
                                    <div id="kt_form">
                                        <form class="form" enctype="multipart/form-data"
                                            action="{{ secure_url('/dashboard-ormas/permohonan-skt/store') }}" method="POST">
                                            @csrf
                                            <!--begin::Wizard Step 1-->
                                            <div class="pb-5" data-wizard-type="step-content"
                                                data-wizard-state="current">
                                                <h3 class="mb-10 font-weight-bold text-dark">Data Keorganisasian</h3>
                                                <div class="row mt-0">
                                                    <input type="hidden" name="ormas_id"
                                                        value="{{ auth()->user()->id }}">
                                                    <div class="form-group col-xl-6">
                                                        <label>Nama Organisasi</label>
                                                        <div>
                                                            <input class="form-control" disabled="disabled"
                                                                value="{{ auth()->user()->nama_organisasi }}" />
                                                            {{-- <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span> --}}
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>No SK Pengurus <span class="text-danger">*</span></label>
                                                        <div>
                                                            <input class="form-control form-control-xl"
                                                                disabled="disabled"
                                                                value="{{ auth()->user()->no_sk_pengurus }}"
                                                                type="text" />
                                                            {{-- <span class="form-text text-muted">Lokasi organisasi didirikan contoh: Kota Makassar</span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Nomor Telepon Ketua <span class="text-danger">*</span>
                                                        </label>
                                                        <div>
                                                            <input class="form-control form-control-xl" type="number"
                                                                required name="no_telp"
                                                                value="{{ auth()->user()->no_telp }}" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>Bidang Kegiatan <span class="text-danger">*</span></label>
                                                        <input class="form-control" required name="bidang_kegiatan"
                                                            type="text" />
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Alamat Sekretariat <span
                                                                class="text-danger">*</span></label>
                                                        <div>
                                                            <input class="form-control form-control-xl" type="text"
                                                                required name="alamat_sekretariat" />
                                                            <span class="form-text text-muted">Contoh (Jl. Arwana IV No.13,
                                                                RT/RW 001/001)</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>Kecamatan <span class="text-danger">*</span></label>
                                                        <div>
                                                            <select name="kecamatan" required
                                                                class="custom-select form-control form-control-lg"
                                                                id="kecamatanSelect" onchange="getKelurahan()">
                                                                <option value="">Pilih Kecamatan</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Kelurahan <span class="text-danger">*</span></label>
                                                        <div>
                                                            <select name="kelurahan" required
                                                                class="custom-select form-control form-control-lg"
                                                                id="kelurahanSelect">
                                                                <option value="">Pilih Kelurahan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>Tempat Pendirian <span class="text-danger">*</span></label>
                                                        <div>
                                                            <input name="tempat_pendirian" required
                                                                class="form-control form-control-xl" type="text" />
                                                            <span class="form-text text-muted">Lokasi organisasi didirikan
                                                                contoh: Kota Makassar</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Tahun Pendirian <span class="text-danger">*</span></label>
                                                        <div>
                                                            <input name="tahun_pendirian" required
                                                                class="form-control form-control-xl" type="text" />
                                                            {{-- <span class="form-text text-muted">Contoh (Jl. Arwana IV No.13, RT/RW 001/001)</span> --}}
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>Asas Organisasi</label>
                                                        <div>
                                                            <textarea name="asas_organisasi" class="form-control" placeholder="" id="floatingTextarea"></textarea>
                                                            {{-- <span class="form-text text-muted">Lokasi organisasi didirikan contoh: Kota Makassar</span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Tujuan Organisasi</label>
                                                        <div>
                                                            <textarea name="tujuan_organisasi" class="form-control" placeholder="" id="floatingTextarea"></textarea>
                                                            {{-- <span class="form-text text-muted">Lokasi organisasi didirikan contoh: Kota Makassar</span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 1-->
                                            <!--begin::Wizard Step 2-->
                                            <div class="pb-5" data-wizard-type="step-content"
                                                data-wizard-state="current">
                                                <h3 class="mb-10 font-weight-bold text-dark">Data Kepengurusan</h3>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Nama Pendiri <span class="text-danger">*</span></label>
                                                        <div>
                                                            <input name="nama_pendiri" required
                                                                class="form-control form-control-xl" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Nama Pembina <span class="text-danger">*</span></label>
                                                        <div>
                                                            <input name="nama_pembina" required
                                                                class="form-control form-control-xl" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>Nama Penasehat <span class="text-danger">*</span></label>
                                                        <div>
                                                            <input name="nama_penasehat" required
                                                                class="form-control form-control-xl" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Nama Ketua <span class="text-danger">*</span></label>
                                                        <div>
                                                            <input name="nama_ketua" required
                                                                class="form-control form-control-xl"
                                                                value="{{ auth()->user()->nama_ketua }}" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Nama Sekertaris <span class="text-danger">*</span></label>
                                                        <div>
                                                            <input name="nama_sekertaris" required
                                                                class="form-control form-control-xl" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>Nama Bendahara</label>
                                                        <div>
                                                            <input name="nama_bendahara"
                                                                class="form-control form-control-xl" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Masa Bhakti Kepengurusan <span
                                                                class="text-danger">*</span></label>
                                                        <div>
                                                            <input name="masa_bhakti" required
                                                                class="form-control form-control-xl" type="text" />
                                                            <span class="form-text text-muted">Contoh: 2021/2022</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>Keputusan Tertinggi Organisasi <span
                                                                class="text-danger">*</span></label>
                                                        <div>
                                                            <input name="keputusan_tertinggi" required
                                                                class="form-control form-control-xl" type="text" />
                                                            <span class="form-text text-muted">Contoh: Musyawarah</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Tingkatan Organisasi <span
                                                                class="text-danger">*</span></label>
                                                        <div>
                                                            <select name="bentuk_organisasi" required
                                                                class="custom-select form-control form-control-lg">
                                                                <option>Pilih</option>
                                                                <option value="Unit">Unit</option>
                                                                <option value="Satuan">Satuan</option>
                                                                <option value="Sayap">Sayap</option>
                                                                <option value="Otonom Daerah">Otonom Daerah</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>Usaha Organisasi</label>
                                                        <div>
                                                            <input name="usaha_organisasi"
                                                                class="form-control form-control-xl" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Sumber Keuangan</label>
                                                        <div>
                                                            <input name="sumber_keuangan"
                                                                class="form-control form-control-xl" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 2-->
                                            <!--begin::Wizard Step 3-->
                                            <div class="pb-5" data-wizard-type="step-content"
                                                data-wizard-state="current">
                                                <h3 class="mb-10 font-weight-bold text-dark">Data Kepengurusan</h3>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Logo Organisasi <span class="text-danger">*</span></label>
                                                        <div class="custom-file">
                                                            <input name="logo_organisasi" required type="file"
                                                                accept="image/png, image/jpeg, image/jpg"
                                                                class="custom-file-input" id="customFile" />
                                                            <label class="custom-file-label" for="customFile">Pilih
                                                                File</label>
                                                            <span class="form-text text-muted">File dalam bentuk: jpeg,
                                                                png,
                                                                jpg, Max. file size: 5 MB</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>Surat Pengantar <span class="text-danger">*</span></label>
                                                        <div class="custom-file">
                                                            <input name="surat_pengantar" required type="file"
                                                                accept=".pdf" class="custom-file-input"
                                                                id="customFile" />
                                                            <label class="custom-file-label" for="customFile">Pilih
                                                                File</label>
                                                            <span class="form-text text-muted">File dalam bentuk: pdf Max.
                                                                file
                                                                size: 500 MB</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>SK Kementrian Hukum dan Ham <span
                                                                class="text-danger">*</span></label>
                                                        <div class="custom-file">
                                                            <input name="sk_kemenkum_ham" required type="file"
                                                                accept=".pdf" class="custom-file-input"
                                                                id="customFile" />
                                                            <label class="custom-file-label" for="customFile">Pilih
                                                                File</label>
                                                            <span class="form-text text-muted">File dalam bentuk: pdf Max.
                                                                file
                                                                size: 500 MB</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>SK Pengurus <span class="text-danger">*</span></label>
                                                        <div class="custom-file">
                                                            <input name="sk_pengurus" required type="file"
                                                                accept=".pdf" class="custom-file-input"
                                                                id="customFile" />
                                                            <label class="custom-file-label" for="customFile">Pilih
                                                                File</label>
                                                            <span class="form-text text-muted">File dalam bentuk: pdf Max.
                                                                file
                                                                size: 500 MB</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Surat Keterangan Domisili <span
                                                                class="text-danger">*</span></label>
                                                        <div class="custom-file">
                                                            <input name="sk_domisili" required type="file"
                                                                accept=".pdf" class="custom-file-input"
                                                                id="customFile" />
                                                            <label class="custom-file-label" for="customFile">Pilih
                                                                File</label>
                                                            <span class="form-text text-muted">File dalam bentuk: pdf Max.
                                                                file
                                                                size: 500 MB</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>Surat Pernyataan <span class="text-danger">*</span></label>
                                                        <div class="custom-file">
                                                            <input name="surat_pernyataan" required type="file"
                                                                accept=".pdf" class="custom-file-input"
                                                                id="customFile" />
                                                            <label class="custom-file-label" for="customFile">Pilih
                                                                File</label>
                                                            <span class="form-text text-muted">File dalam bentuk: pdf Max.
                                                                file
                                                                size: 500 MB</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="form-group col-xl-6">
                                                        <label>Biodata Pengurus <span class="text-danger">*</span></label>
                                                        <div class="custom-file">
                                                            <input name="biodata_pengurus" required type="file"
                                                                accept=".pdf" class="custom-file-input"
                                                                id="customFile" />
                                                            <label class="custom-file-label" for="customFile">Pilih
                                                                File</label>
                                                            <span class="form-text text-muted">File dalam bentuk: pdf Max.
                                                                file
                                                                size: 500 MB</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xl-6">
                                                        <label>Akta Notaris dan NPWP <span
                                                                class="text-danger">*</span></label>
                                                        <div class="custom-file">
                                                            <input name="akta_notaris" required type="file"
                                                                accept=".pdf" class="custom-file-input"
                                                                id="customFile" />
                                                            <label class="custom-file-label" for="customFile">Pilih
                                                                File</label>
                                                            <span class="form-text text-muted">File dalam bentuk: pdf Max.
                                                                file
                                                                size: 500 MB</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 3-->
                                            <!--begin::Wizard Step 4-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <h3 class="mb-10 font-weight-bold text-center text-dark">Pastikan Semua
                                                    Inputan
                                                    Anda Sesuai</h3>
                                            </div>
                                            <!--end::Wizard Step 4-->
                                            <!--begin::Wizard Actions-->
                                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                <div class="mr-2">
                                                    <button type="button"
                                                        class="btn btn-light font-weight-bold text-uppercase px-9 py-4"
                                                        data-wizard-type="action-prev">Sebelumnya</button>
                                                </div>
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-primary font-weight-bold text-uppercase px-9 py-4"
                                                        data-wizard-type="action-submit">Submit</button>
                                                    <button type="button"
                                                        class="btn btn-primary font-weight-bold text-uppercase px-9 py-4"
                                                        data-wizard-type="action-next">Selanjutnya</button>
                                                </div>
                                            </div>
                                            <!--end::Wizard Actions-->
                                        </form>
                                    </div>
                                    <!--end::Wizard Form-->
                                </div>
                            </div>
                            <!--end::Wizard Body-->
                        </div>
                    </div>
                    <!--end::Wizard-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <script>
        const kecamatanSelect = document.getElementById('kecamatanSelect');
        const kelurahanSelect = document.getElementById('kelurahanSelect');

        // Event listener untuk pemilihan kecamatan
        kecamatanSelect.addEventListener('change', getKelurahan);

        function getKelurahan() {
            const selectedKecamatanId = kecamatanSelect.value;

            // Bersihkan opsi kelurahan yang sudah ada
            kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';

            // Jika kecamatan belum dipilih, hentikan eksekusi
            if (!selectedKecamatanId) {
                return;
            }

            // Ambil data kelurahan berdasarkan ID kecamatan
            fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${selectedKecamatanId}.json`)
                .then(response => response.json())
                .then(kelurahanData => {
                    // Tambahkan opsi kelurahan dari data yang diambil
                    kelurahanData.forEach(kelurahan => {
                        // Hanya tambahkan opsi jika belum ada
                        if (!kelurahanSelect.querySelector(`option[value="${kelurahan.id}"]`)) {
                            const option = document.createElement('option');
                            option.value = kelurahan.id;
                            option.text = kelurahan.name;
                            kelurahanSelect.appendChild(option);
                        }
                    });
                })
                .catch(error => {
                    console.error('Error fetching kelurahan data:', error);
                });
        }

        // Ambil data kecamatan saat halaman dimuat
        fetch('https://www.emsifa.com/api-wilayah-indonesia/api/districts/7313.json')
            .then(response => response.json())
            .then(kecamatanData => {
                // Tambahkan opsi kecamatan dari data yang diambil
                kecamatanData.forEach(kecamatan => {
                    const option = document.createElement('option');
                    option.value = kecamatan.id;
                    option.text = kecamatan.name;
                    kecamatanSelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error fetching kecamatan data:', error);
            });
    </script>
@endsection
