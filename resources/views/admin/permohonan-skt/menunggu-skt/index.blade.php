@extends('admin.permohonan-skt.index')
@section('detail')
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-body d-flex border-0">
            <h6 class="font-weight-bolder m-0 py-1">
                Menunggu SKT
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
                        <th>No Telp</th>
                        <th>Bidang Kegiatan</th>
                        <th>Alamat</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menunggu as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ormas->nama_organisasi }}</td>
                            <td>{{ $item->no_telp }}</td>
                            <td>{{ $item->bidang_kegiatan }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->kelurahan }}</td>
                            <td>{{ $item->kecamatan }}</td>
                            <td>
                                <a class="btn btn-bg-primary text-white" href="#">Kirim SKT</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
