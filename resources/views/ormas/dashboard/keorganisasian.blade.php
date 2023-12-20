@extends('ormas.dashboard.app')
@section('detail')
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header ">
            <h6 class="font-weight-bolder pt-8 m-0">
                Informasi Keorganisasian
            </h6>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-8">
            <tr>
                <td class="text-right">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column flex-root pr-8">
                            <h7 class="opacity-70 mb-3">Bidang Kegiatan</h7>
                            <h6 class="font-weight-bolder">{{ $keorganisasian->bidang_kegiatan }}</h6>
                        </div>
                        <div class="d-flex flex-column flex-root pr-8">
                            <h7 class="opacity-70 mb-3">Nomor Telepon Ketua</h7>
                            <h6 class="font-weight-bolder">{{ $keorganisasian->no_telp }}</h6>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="d-flex justify-content-between pt-6">
                        <div class="d-flex flex-column flex-root pr-8">
                            <h7 class="opacity-70 mb-3">Alamat Sekretariat/Kantor</h7>
                            <h6 class="font-weight-bolder">{{ $keorganisasian->alamat_sekretariat }}</h6>
                        </div>
                        <div class="d-flex flex-column flex-root pr-8">
                            <h7 class="opacity-70 mb-3">Kelurahan</h7>
                            <h6 class="font-weight-bolder" id="kelurahanName">{{ $keorganisasian->kelurahan }}</h6>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="d-flex justify-content-between pt-6">
                        <div class="d-flex flex-column flex-root pr-8">
                            <h7 class="opacity-70 mb-3">Kecamatan</h7>
                            <h6 class="font-weight-bolder" id="kecamatanName"> {{ $keorganisasian->kecamatan }}</h6>
                        </div>
                        <div class="d-flex flex-column flex-root pr-8">
                            <h7 class="opacity-70 mb-3">Tempat Pendirian</h7>
                            <h6 class="font-weight-bolder">{{ $keorganisasian->tempat_pendirian }}</h6>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="d-flex justify-content-between pt-6">
                        <div class="d-flex flex-column flex-root pr-8">
                            <h7 class="opacity-70 mb-3">Tahun Pendirian</h7>
                            <h6 class="font-weight-bolder">{{ $keorganisasian->tahun_pendirian }}</h6>
                        </div>
                        <div class="d-flex flex-column flex-root pr-8">
                            <h7 class="opacity-70 mb-3">No. SK Pengurus</h7>
                            <h6 class="font-weight-bolder">{{ auth()->user()->no_sk_pengurus }}</h6>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="d-flex justify-content-between pt-6">
                        <div class="d-flex flex-column flex-root pr-8">
                            <h7 class="opacity-70 mb-3">Asas Ciri Organisasi</h7>
                            <h6 class="font-weight-bolder">
                                {{ $keorganisasian->asas_organisasi }}
                            </h6>
                        </div>
                        <div class="d-flex flex-column flex-root pr-8">
                            <h7 class="opacity-70 mb-3">Tujuan Organisasi</h7>
                            <h6 class="font-weight-bolder">
                                {{ $keorganisasian->tujuan_organisasi }}
                            </h6>
                        </div>
                    </div>
                </td>
            </tr>
        </div>
        <!--end::Body-->
    </div>
@endsection
