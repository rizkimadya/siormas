@extends('admin.permohonan-dana.index')
@section('detail')
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-body d-flex border-0">
            <a href={{ secure_url('/permohonan-dana/ormas-pemohon') }} class="card-icon pr-4 py-0">
                <i class="flaticon2-left-arrow-1 text-dark"></i>
            </a>
            <h6 class="font-weight-bolder m-0 py-1">
                Detail Pemohon
            </h6>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-0 mb-0">
            <!--begin::Table-->
            <div class="accordion accordion-solid accordion-panel accordion-svg-toggle" id="accordionExample8">
                <div class="card">
                    <div class="card-header" id="headingOne8">
                        <div class="card-title bg-light" data-toggle="collapse" data-target="#collapseOne8">
                            <div class="card-label">Informasi Pemohon</div>
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path
                                            d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                        <path
                                            d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                                            transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) ">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div id="collapseOne8" class="collapse show" data-parent="#accordionExample8">
                        <div class="card-body">
                            <tr>
                                <td class="p-0 py-4">
                                    <div class="d-flex justify-content-between pt-6">
                                        <div class="d-flex flex-column flex-root">
                                            <h7 class="opacity-70 mb-3">Nama Organisasi</h7>
                                            <h6 class="font-weight-bolder">{{ $ormasPemohon->ormas->nama_organisasi }}</h6>
                                        </div>
                                        <div class="d-flex flex-column flex-root">
                                            <h7 class="opacity-70 mb-3">Status Permohonan Dana</h7>
                                            <div class="d-flex">
                                                @if ($ormasPemohon->status == 'Berhasil Kirim SP2P')
                                                    <h6 class="font-weight-bolder text-primary"
                                                        style="background-color: #EEFBF0; padding:6px 10px; border-radius:6px;">
                                                        Terima SP2P
                                                    </h6>
                                                @else
                                                    <h6 class="font-weight-bolder text-warning"
                                                        style="background-color: #fbfbee; padding:6px 10px; border-radius:6px;">
                                                        Menunggu SP2P
                                                    </h6>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="d-flex justify-content-between pt-6">
                                        <div class="d-flex flex-column flex-root">
                                            <h7 class="opacity-70 mb-3">Periode</h7>
                                            <h6 class="font-weight-bolder">{{ $ormasPemohon->periode }}</h6>
                                        </div>
                                        <div class="d-flex flex-column flex-root">
                                            <h7 class="opacity-70 mb-3">Jumlah Anggaran</h7>
                                            <h6 class="font-weight-bolder">
                                                Rp. {{ number_format($ormasPemohon->jumlah_anggaran, 0, ',', '.') }}
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="d-flex justify-content-between pt-6">
                                        <div class="d-flex flex-column flex-root">
                                            <h7 class="opacity-70 mb-3">Tujuan Permohonan Dana</h7>
                                            <h6 class="font-weight-bolder">
                                                {{ $ormasPemohon->tujuan_permohonan }}
                                            </h6>
                                        </div>
                                        <div class="d-flex flex-column flex-root">
                                            <h7 class="opacity-70 mb-3">Nomor Rekening</h7>
                                            <h6 class="font-weight-bolder">
                                                {{ $ormasPemohon->no_rek }}
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree8">
                        <div class="card-title bg-light collapsed" data-toggle="collapse" data-target="#collapseThree8">
                            <div class="card-label">Dokumen Pemohon</div>
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path
                                            d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                        <path
                                            d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                                            transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) ">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div id="collapseThree8" class="collapse" data-parent="#accordionExample8">
                        <div class="card-body">
                            <div class="row mt-6">
                                <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Surat
                                            Permohonan</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Buttonpreview-->
                                    <a target="_blank"
                                        href="{{ secure_asset('storage/suratPermohonan/' . $ormasPemohon->surat_permohonan) }}"
                                        class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                    <!--end::Buttonpreview-->
                                </div>
                                <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Proposal</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Buttonpreview-->
                                    <a target="_blank" href="{{ secure_asset('storage/proposal/' . $ormasPemohon->proposal) }}"
                                        class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                    <!--end::Buttonpreview-->
                                </div>
                            </div>
                            <div class="row mt-6">
                                <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Fotocopy KTP
                                            Ketua</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Buttonpreview-->
                                    <a target="_blank"
                                        href="{{ secure_asset('storage/fc_ktp_ketua/' . $ormasPemohon->fc_ktp_ketua) }}"
                                        class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                    <!--end::Buttonpreview-->
                                </div>
                                <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Fotocopy KTP
                                            Sekertaris</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Buttonpreview-->
                                    <a target="_blank"
                                        href="{{ secure_asset('storage/fc_ktp_sekertaris/' . $ormasPemohon->fc_ktp_sekertaris) }}"
                                        class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                    <!--end::Buttonpreview-->
                                </div>
                            </div>
                            <div class="row mt-6">
                                <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <span class="font-weight-bold text-dark-75 font-size-lg mb-1">FC
                                            Buku Rekening</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Buttonpreview-->
                                    <a target="_blank"
                                        href="{{ secure_asset('storage/bukuRekening/' . $ormasPemohon->fc_burek) }}"
                                        class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                                    <!--end::Buttonpreview-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Table-->
        </div>

        <!--end::Body-->
    </div>
@endsection
