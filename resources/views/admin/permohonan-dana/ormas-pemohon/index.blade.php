@extends('admin.permohonan-dana.index')
@section('detail')
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-body d-flex border-0">
            <h6 class="font-weight-bolder m-0 py-1">
                Ormas Pemohon
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
                        <th>Tujuan Permohonan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ormasPemohon as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ormas->nama_organisasi }}</td>
                            <td>{{ $item->periode }}</td>
                            <td>{{ $item->jumlah_anggaran }}</td>
                            <td>{{ $item->tujuan_permohonan }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-bg-light"
                                        href="/permohonan-dana/ormas-pemohon/detail/{{ $item->id }}"><i
                                            class="nav-icon la la-eye"></i></a>
                                    <form action="/permohonan-dana/destroy/{{ $item->id }}" method="POST">
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
