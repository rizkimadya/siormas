@extends('admin.permohonan-skt.index')
@section('detail')
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-body d-flex border-0">
            <h6 class="font-weight-bolder m-0 py-1">
                Ormas Terdaftar
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
                    @foreach ($ormasTerdaftar as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ormas->nama_organisasi }}</td>
                            <td>{{ $item->no_telp }}</td>
                            <td>{{ $item->bidang_kegiatan }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->kelurahan }}</td>
                            <td>{{ $item->kecamatan }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-bg-light"
                                        href="/permohonan-skt/ormas-terdaftar/detail/{{ $item->id }}"><i
                                            class="nav-icon la la-eye"></i></a>
                                    <form action="/admin/kategori/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-bg-light"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                            <i class="nav-icon la la-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
