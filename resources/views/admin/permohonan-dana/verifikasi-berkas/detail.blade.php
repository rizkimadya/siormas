@extends('admin.permohonan-dana.index')
@section('detail')
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-body d-flex border-0">
            <a href="{{ secure_url('/permohonan-dana/verifikasi') }}">
                <span class="card-icon pr-4 py-0">
                    <i class="flaticon2-left-arrow-1 text-dark"></i>
                </span>
            </a>
            <h6 class="font-weight-bolder m-0 py-1">
                Detail Verifikasi
            </h6>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-0">
            <div style="border-left: 3px solid #008E42;" class="card-title py-2 m-0 px-4">
                <h5 class="font-weight-bolder text-primary m-0">Informasi Pemohon</h5>
            </div>
            <div class="card-body p-0">
                <tr>
                    <td class="p-0 py-4">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Nama Organisasi</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->ormas->nama_organisasi }}</h6>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Periode</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->periode }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Jumlah Anggaran</h7>
                                <h6 class="font-weight-bolder">
                                    Rp. {{ number_format($verifikasi->jumlah_anggaran, 0, ',', '.') }}
                                </h6>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Nomor Rekening</h7>
                                <h6 class="font-weight-bolder">
                                    {{ $verifikasi->no_rek }}
                                </h6>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Tujuan Permohonan Dana</h7>
                                <h6 class="font-weight-bolder">
                                    {{ $verifikasi->tujuan_permohonan }}
                                </h6>
                            </div>
                        </div>
                    </td>
                </tr>

            </div>
        </div>
        <div class="card-body pt-0">
            <div style="border-left: 3px solid #008E42;" class="card-title py-2 m-0 px-4">
                <h5 class="font-weight-bolder text-primary m-0">Dokumen Pemohon</h5>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 mb-3">
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">FC
                                Buku Rekening</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank" href="{{ secure_asset('storage/bukuRekening/' . $verifikasi->fc_burek) }}"
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Surat
                                Permohonan</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank" href="{{ secure_asset('storage/suratPermohonan/' . $verifikasi->surat_permohonan) }}"
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Proposal</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank" href="{{ secure_asset('storage/proposal/' . $verifikasi->proposal) }}"
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Fotocopy
                                KTP Ketua</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank" href="{{ secure_asset('storage/fc_ktp_ketua/' . $verifikasi->fc_ktp_ketua) }}"
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Fotocopy
                                KTP Sekertaris</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank"
                            href="{{ secure_asset('storage/fc_ktp_sekertaris/' . $verifikasi->fc_ktp_sekertaris) }}"
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer justify-content-end d-flex" style="gap:10px;">

            <!-- Button trigger modal-->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                Tolak
            </button>

            <!-- Modal-->
            <div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="staticBackdrop" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Verifikasi Tolak</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/permohonan-dana/verifikasi/tolak/{{ $verifikasi->id }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleTextarea">Keterangan</label>
                                    <textarea class="form-control" name="keterangan" rows="3"></textarea>
                                </div>
                                <div class="pb-5 justify-content-end d-flex" style="gap:10px;">
                                    <button type="button" class="btn btn-light font-weight-bold"
                                        data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary px-6">KIRIM</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <a href="/permohonan-dana/verifikasi/terima/{{ $verifikasi->id }}" class="btn btn-primary px-8"
                onclick="return confirm('Anda yakin ingin memverifikasi permohonan ini?')">VERIFIKASI</a>

        </div>
        {{-- <div class="card-footer">
		<button type="reset" class="btn btn-primary px-6 mr-2">Verifikasi</button>
		<button type="reset" class="btn btn-danger">Tolak</button>
	</div> --}}
        <!--end::Body-->
    </div>
@endsection
