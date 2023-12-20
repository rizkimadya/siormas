@extends('admin.permohonan-dana.index')
@section('detail')
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-body d-flex border-0">
            <h6 class="font-weight-bolder m-0 py-1">
                Verifikasi Berkas
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
                        <th>Periode</th>
                        <th>Jumlah Anggaran</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($verifikasi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ormas->nama_organisasi }}</td>
                            <td>{{ $item->periode }}</td>
                            <td>Rp.
                                {{ number_format($item->jumlah_anggaran, 0, ',', '.') }}</td>
                            <td>
                                <a class="btn btn-bg-primary text-white"
                                    href="/permohonan-dana/verifikasi/detail/{{ $item->id }}">Verifikasi</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
