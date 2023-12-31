@extends('app', ['title' => 'Permohonan Dana'])
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
                                class="text-white text-hover-white opacity-75 hover-opacity-100">Permohonan
                                Dana</a>
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white">Tambah Permohonan
                            </a>
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
                                <!--begin::Form-->
                                <form class="form" action="{{ secure_url('/permohonan-dana/store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="pb-5">
                                        <input hidden name="ormas_id" value="{{ auth()->user()->id }}" />
                                        <div class="row mt-0">
                                            <div class="form-group col-xl-6">
                                                <label>Nama Organisasi</label>
                                                <div>
                                                    <input class="form-control" disabled="disabled"
                                                        placeholder="{{ auth()->user()->nama_organisasi }}" />
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>Periode</label>
                                                <input class="form-control" disabled name="periode"
                                                    value="{{ date('Y') }}" />
                                            </div>

                                        </div>
                                        <div class="row mt-0">
                                            <div class="form-group col-xl-6">
                                                <label>Jumlah Anggaran Permohonan <span class="text-danger">*</span></label>
                                                <div>
                                                    <input required class="form-control form-control-xl" type="number"
                                                        name="jumlah_anggaran" />
                                                    <span class="form-text text-muted">Total Anggaran yang dibutuhkan</span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>Tujuan Permohonan</label>
                                                <div>
                                                    <textarea name="tujuan_permohonan" class="form-control" placeholder="" id="floatingTextarea"></textarea>
                                                    {{-- <span class="form-text text-muted">Lokasi organisasi didirikan contoh: Kota Makassar</span> --}}
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>Nomor Rekening</label>
                                                <div>
                                                    <input class="form-control" name="no_rek" type="number"
                                                        placeholder="Masukkan Nomor Rekening" />
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>FC Buku Rekening <span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                    <input name="fc_burek" required type="file"
                                                        accept="image/png, image/jpeg, image/jpg" class="custom-file-input"
                                                        id="customFile" />
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                    <span class="form-text text-black">File dalam bentuk: Jpg, png, jpeg
                                                        Max. file
                                                        size: 5 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-0">
                                            <div class="form-group col-xl-6">
                                                <label>Surat Permohonan <span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                    <input name="surat_permohonan" required type="file" accept=".pdf"
                                                        class="custom-file-input" id="customFile" />
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                    <span class="form-text text-black">File dalam bentuk: pdf Max. file
                                                        size: 500 MB</span>
                                                    <span class="form-text text-muted">Surat Permohonan Tertulis Kepada
                                                        Bupati Wajo, dilengkapi rincian rencana penggunaan belanja
                                                        hibah</span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>Proposal <span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                    <input name="proposal" required type="file" accept=".pdf"
                                                        class="custom-file-input" id="customFile" />
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                    <span class="form-text text-black">File dalam bentuk: pdf Max. file
                                                        size: 500 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-0">
                                            <div class="form-group col-xl-6">
                                                <label>Fotocopy KTP Ketua <span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                    <input name="fc_ktp_ketua" required type="file" accept=".pdf"
                                                        class="custom-file-input" id="customFile" />
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                    <span class="form-text text-black">File dalam bentuk: pdf Max. file
                                                        size: 500 MB</span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>Fotocopy KTP Sekertaris <span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                    <input name="fc_ktp_sekertaris" required type="file"
                                                        accept=".pdf" class="custom-file-input" id="customFile" />
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                    <span class="form-text text-black">File dalam bentuk: pdf Max. file
                                                        size: 500 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end border-top pt-10">
                                            <div>
                                                <a href="{{ secure_url('/permohonan-dana/index') }}"
                                                    class="btn btn-secondary font-weight-bold text-uppercase px-6 py-3 mr-2">Batal</a>
                                                <button type="submit"
                                                    class="btn btn-primary font-weight-bold text-uppercase px-6 py-3">Kirim
                                                    Permohonan</a>
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
    </div>
@endsection
