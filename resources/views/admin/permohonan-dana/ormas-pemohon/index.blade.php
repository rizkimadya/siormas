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
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ormasPemohon as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ormas->nama_organisasi }}</td>
                            <td>{{ $item->periode }}</td>
                            <td>Rp.
                                {{ number_format($item->jumlah_anggaran, 0, ',', '.') }}</td>
                            <td>
                                <div class="d-flex mt-2">
                                    @if ($item->status == 'Berhasil Kirim SP2P')
                                        <p class="text-primary"
                                            style="background-color: #EEFBF0; padding:6px 10px; border-radius:6px;">
                                            Terima SP2P
                                        </p>
                                    @else
                                        <p class="text-warning"
                                            style="background-color: #fbfbee; padding:6px 10px; border-radius:6px;">
                                            Menunggu T2D
                                        </p>
                                    @endif
                                </div>
                            </td>
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
