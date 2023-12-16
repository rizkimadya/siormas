@extends("components.kegiatan-ormas.index")
@section("detail")
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <!--begin::Body-->
            <div class="card-body p-0">
                <!--begin::Wizard-->
                <div class="wizard wizard-1" id="kt_contact_add" data-wizard-state="step-first" data-wizard-clickable="true">
                    <div class="kt-grid__item">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav border-bottom">
                            <div class="wizard-steps p-8 p-lg-10">
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"/>
                                                    <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <h4 class="wizard-title">Data Keorganisasian</h4>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <h4 class="wizard-title">Data Kepengurusan</h4>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <h4 class="wizard-title">Dokumen Ormas</h4>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
                                                    <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <h3 class="wizard-title">Review dan Simpan</h3>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow last">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Wizard Nav-->
                    </div>
                    <div class="row justify-content-center my-10 mx-8 px-8 my-lg-15 px-lg-10">
                        <div class="col-xl-12">
                            <!--begin::Form Wizard Form-->
                            <form class="form" id="kt_contact_add_form">
                                <!--begin::Form Wizard Step 1-->
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark">Data Keorganisasian</h3>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Nama Organisasi</label>
                                            <div>
                                                <input class="form-control" disabled="disabled" placeholder="Majelis Pimpinan Pemuda Pancasila"/>
                                                {{-- <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Bidang Kegiatan</label>
                                            <input class="form-control" disabled="disabled" placeholder="Sosial dan Kemanusian"/>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Nomor Telepon Ketua  <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                                <span class="form-text text-muted">Nomor Telepon Ketua/Sekertaris yang bertanggung jawab dalam organisasi</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Alamat Sekretariat  <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                                <span class="form-text text-muted">Contoh (Jl. Arwana IV No.13, RT/RW 001/001)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Keluruhan  <span class="text-danger" >*</span></label>
                                            <div>
                                                <select class="custom-select form-control form-control-lg">
                                                    <option>Pilih</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Kecamatan  <span class="text-danger" >*</span></label>
                                            <div>
                                                <select class="custom-select form-control form-control-lg">
                                                    <option>Pilih</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Tempat Pendirian  <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                                <span class="form-text text-muted">Lokasi organisasi didirikan contoh: Kota Makassar</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Tahun Pendirian  <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                                {{-- <span class="form-text text-muted">Contoh (Jl. Arwana IV No.13, RT/RW 001/001)</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Asas Organisasi</label>
                                            <div>
                                                <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                                                {{-- <span class="form-text text-muted">Lokasi organisasi didirikan contoh: Kota Makassar</span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Tujuan Organisasi</label>
                                            <div>
                                                <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                                                {{-- <span class="form-text text-muted">Lokasi organisasi didirikan contoh: Kota Makassar</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>No SK Pengurus  <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" disabled="disabled" placeholder="5674 7654" type="text" />
                                                {{-- <span class="form-text text-muted">Lokasi organisasi didirikan contoh: Kota Makassar</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Form Wizard Step 1-->
                                <!--begin::Form Wizard Step 2-->
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark">Data Kepengurusan</h3>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Nama Pendiri  <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Nama Pembina  <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Nama Penasehat  <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Nama Ketua  <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" disabled="disabled" placeholder="Fadhil Muhaimin" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Nama Sekertaris  <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Nama Bendahara</label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Masa Bhakti Kepengurusan  <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                                <span class="form-text text-muted">Contoh: 2021/2022</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Keputusan Tertinggi Organisasi <span class="text-danger" >*</span></label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                                <span class="form-text text-muted">Contoh: Musyawarah</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Bentuk Organisasi  <span class="text-danger" >*</span></label>
                                            <div>
                                                <select class="custom-select form-control form-control-lg">
                                                    <option>Pilih</option>
                                                    <option value="1">Unit</option>
                                                    <option value="2">Satuan</option>
                                                    <option value="3">Sayap</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Status Kepengurusan  <span class="text-danger" >*</span></label>
                                            <div>
                                                <select class="custom-select form-control form-control-lg">
                                                    <option>Pilih</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Usaha Organisasi</label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Sumber Keuangan</label>
                                            <div>
                                                <input class="form-control form-control-xl" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Form Wizard Step 2-->
                                <!--begin::Form Wizard Step 3-->
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark">Data Kepengurusan</h3>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Logo Organisasi  <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-muted">File dalam bentuk: jpeg, png, jpg, Max. file size: 5 MB</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Surat Pengantar  <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-muted">File dalam bentuk: pdf Max. file size: 500 MB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>SK Kementrian Hukum dan Ham <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-muted">File dalam bentuk: pdf Max. file size: 500 MB</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>SK Pengurus  <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-muted">File dalam bentuk: pdf Max. file size: 500 MB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Surat Keterangan Domisili <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-muted">File dalam bentuk: pdf Max. file size: 500 MB</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Surat Pernyataan  <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-muted">File dalam bentuk: pdf Max. file size: 500 MB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-0">
                                        <div class="form-group col-xl-6">
                                            <label>Foto Kantor/Sekretariat <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-muted">File dalam bentuk: jpeg, png, jpg, Max. file size: 5 MB</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Akta Notaris dan NPWP  <span class="text-danger" >*</span></label>
                                            <div class="custom-file">
                                                <input name="file" type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                <span class="form-text text-muted">File dalam bentuk: pdf Max. file size: 500 MB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Form Wizard Step 3-->

                                <!--begin::Form Wizard Step 2-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group row">
                                                <div class="col-lg-9 col-xl-6">
                                                    <h3 class="mb-10 font-weight-bold text-dark">User's Account Details</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Form Wizard Step 2-->
                                <!--begin::Form Wizard Step 3-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <h3 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h3>
                                    <div class="form-group">
                                        <label>Address Line 1</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="address1" placeholder="Address Line 1" value="Address Line 1" />
                                        <span class="form-text text-muted">Please enter your Address.</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Address Line 2</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="address2" placeholder="Address Line 2" value="Address Line 2" />
                                        <span class="form-text text-muted">Please enter your Address.</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Postcode</label>
                                                <input type="text" class="form-control form-control-lg form-control-solid" name="postcode" placeholder="Postcode" value="3000" />
                                                <span class="form-text text-muted">Please enter your Postcode.</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control form-control-lg form-control-solid" name="city" placeholder="City" value="Melbourne" />
                                                <span class="form-text text-muted">Please enter your City.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control form-control-lg form-control-solid" name="state" placeholder="State" value="VIC" />
                                                <span class="form-text text-muted">Please enter your State.</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select name="country" class="form-control form-control-lg form-control-solid">
                                                    <option value="">Select</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU" selected="selected">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia, Plurinational State of</option>
                                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei Darussalam</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Côte d'Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Curaçao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                                    <option value="KR">Korea, Republic of</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia, Federated States of</option>
                                                    <option value="MD">Moldova, Republic of</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Réunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="BL">Saint Barthélemy</option>
                                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="UM">United States Minor Outlying Islands</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN">Viet Nam</option>
                                                    <option value="VG">Virgin Islands, British</option>
                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Form Wizard Step 3-->
                                <!--begin::Form Wizard Step 4-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <h4 class="mb-10 font-weight-bold">Review your Details and Submit</h4>
                                    <h6 class="font-weight-bold mb-3">Project Details:</h6>
                                    <table class="w-100">
                                        <tr>
                                            <td class="font-weight-bold text-muted">Name:</td>
                                            <td class="font-weight-bold text-right">Loop Inc CRM App</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-muted">Phone:</td>
                                            <td class="font-weight-bold text-right">+61412345678</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-muted">Email:</td>
                                            <td class="font-weight-bold text-right">johnwick@reeves.com</td>
                                        </tr>
                                    </table>
                                    <div class="separator separator-dashed my-5"></div>
                                    <h6 class="font-weight-bold mb-3">Delivery Info:</h6>
                                    <table class="w-100">
                                        <tr>
                                            <td class="font-weight-bold text-muted">Address Line 1:</td>
                                            <td class="font-weight-bold text-right">Fox Avenue 5-6B</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-muted">Address Line 2:</td>
                                            <td class="font-weight-bold text-right">Melbourne VIC</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-muted">Post:</td>
                                            <td class="font-weight-bold text-right">3000</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-muted">Country:</td>
                                            <td class="font-weight-bold text-right">Australia</td>
                                        </tr>
                                    </table>
                                    <div class="separator separator-dashed my-5"></div>
                                    <h6 class="font-weight-bold mb-3">Payment Details:</h6>
                                    <table class="w-100">
                                        <tr>
                                            <td class="font-weight-bold text-muted">Card Number:</td>
                                            <td class="font-weight-bold text-right">xxxx xxxx xxxx 1111</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-muted">Card Name:</td>
                                            <td class="font-weight-bold text-right">John Wick</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-muted">Card Expiry:</td>
                                            <td class="font-weight-bold text-right">01/21</td>
                                        </tr>
                                    </table>
                                </div>
                                <!--end::Form Wizard Step 4-->
                                <!--begin::Wizard Actions-->
                                <div class="d-flex justify-content-between border-top pt-10">
                                    <div class="mr-2">
                                        <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                        <button type="button" class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
                                    </div>
                                </div>
                                <!--end::Wizard Actions-->
                            </form>
                            <!--end::Form Wizard Form-->
                        </div>
                    </div>
                </div>
                <!--end::Wizard-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
@endsection