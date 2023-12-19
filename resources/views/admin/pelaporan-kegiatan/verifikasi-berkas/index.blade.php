@extends('admin.pelaporan-kegiatan.index')
@section('detail')
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-body d-flex border-0">
            <h6 class="font-weight-bolder m-0 py-1">
                Laporan Ormas
            </h6>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-0 mb-0">
            <table class="table table-bordered table-hover table-checkable" id="kt_datatable"
                style="margin-top: 13px !important">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Organisasi</th>
                        <th>Jenis Kegiatan</th>
                        <th>Jumlah Anggaran</th>
                        <th>Tujuan Permohonan</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($verifikasi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ormas->nama_organisasi }}</td>
                            <td>{{ $item->jenis_kegiatan }}</td>
                            <td>Rp.
                                {{ number_format($item->jumlah_anggaran, 0, ',', '.') }}</td>
                            <td>{{ $item->tujuan_permohonan }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a class="btn btn-bg-primary text-white"
                                    href="/pelaporan-kegiatan/verifikasi/detail/{{ $item->id }}">Verifikasi</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
