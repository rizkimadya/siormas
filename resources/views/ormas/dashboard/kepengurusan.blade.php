@extends('ormas.dashboard.app')
@section('detail')
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header ">
            <h6 class="font-weight-bolder pt-8 m-0">
                Informasi Kepengurusan
            </h6>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-8">
            <tr>
                <td class="p-0 py-4">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column flex-root">
                            <h7 class="opacity-70 mb-3">Nama Pendiri</h7>
                            <h6 class="font-weight-bolder">{{ $kepengurusan->nama_pendiri }}</h6>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="d-flex justify-content-between pt-6">
                        <div class="d-flex flex-column flex-root">
                            <h7 class="opacity-70 mb-3">Nama Pembina</h7>
                            <h6 class="font-weight-bolder">{{ $kepengurusan->nama_pembina }}</h6>
                        </div>
                        <div class="d-flex flex-column flex-root">
                            <h7 class="opacity-70 mb-3">Nama Penasehat</h7>
                            <h6 class="font-weight-bolder">{{ $kepengurusan->nama_penasehat }}</h6>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="d-flex justify-content-between pt-6">
                        <div class="d-flex flex-column flex-root">
                            <h7 class="opacity-70 mb-3">Nama Ketua</h7>
                            <h6 class="font-weight-bolder">{{ $kepengurusan->nama_ketua }}</h6>
                        </div>
                        <div class="d-flex flex-column flex-root">
                            <h7 class="opacity-70 mb-3">Nama Sekertaris</h7>
                            <h6 class="font-weight-bolder">{{ $kepengurusan->nama_sekertaris }}</h6>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="d-flex justify-content-between pt-6">
                        <div class="d-flex flex-column flex-root">
                            <h7 class="opacity-70 mb-3">Nama Bendahara</h7>
                            <h6 class="font-weight-bolder">{{ $kepengurusan->nama_bendahara }}</h6>
                        </div>
                        <div class="d-flex flex-column flex-root">
                            <h7 class="opacity-70 mb-3">Masa Bhakti Kepengurusan</h7>
                            <h6 class="font-weight-bolder">{{ $kepengurusan->masa_bhakti }}</h6>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="d-flex justify-content-between pt-6">
                        <div class="d-flex flex-column flex-root">
                            <h7 class="opacity-70 mb-3">Keputusan Tertinggi Organisasi</h7>
                            <h6 class="font-weight-bolder">{{ $kepengurusan->keputusan_tertinggi }}</h6>
                        </div>
                        <div class="d-flex flex-column flex-root">
                            <h7 class="opacity-70 mb-3">Tingkatan Organisasi</h7>
                            <h6 class="font-weight-bolder">{{ $kepengurusan->bentuk_organisasi }}</h6>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="d-flex justify-content-between pt-6">
                        <div class="d-flex flex-column flex-root">
                            <h7 class="opacity-70 mb-3">Usaha Organisasi</h7>
                            <h6 class="font-weight-bolder">{{ $kepengurusan->usaha_organisasi }}</h6>
                        </div>
                        <div class="d-flex flex-column flex-root">
                            <h7 class="opacity-70 mb-3">Sumber Keuangan</h7>
                            <h6 class="font-weight-bolder">{{ $kepengurusan->sumber_keuangan }}</h6>
                        </div>
                    </div>
                </td>
            </tr>
        </div>
        <!--end::Body-->
    </div>
    </div>
    </div>
@endsection
