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
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporanOrmas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ormas->nama_organisasi }}</td>
                            <td>{{ $item->jenis_kegiatan }}</td>
                            <td>Rp.
                                {{ number_format($item->jumlah_anggaran, 0, ',', '.') }}</td>
                            <td>
                                <div class="d-flex mt-2">
                                    @if ($item->status == 'Berhasil Verifikasi')
                                        <p class="text-primary"
                                            style="background-color: #EEFBF0; padding:6px 10px; border-radius:6px;">
                                            Laporan Diterima
                                        </p>
                                    @else
                                        <p class="text-warning"
                                            style="background-color: #fbfbee; padding:6px 10px; border-radius:6px;">
                                            Menunggu Verifikasi
                                        </p>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-bg-light"
                                        href="/pelaporan-kegiatan/laporan-ormas/detail/{{ $item->id }}"><i
                                            class="nav-icon la la-eye"></i></a>
                                    <form action="/pelaporan-kegiatan/destroy/{{ $item->id }}" method="POST">
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
