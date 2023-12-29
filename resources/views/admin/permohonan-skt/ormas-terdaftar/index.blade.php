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
                        <th>Alamat</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Letakkan ini sebelum loop dimulai -->
                    <script>
                        // Fungsi untuk mendapatkan nama kecamatan berdasarkan ID
                        function getKecamatanName2(kecamatanId) {
                            return fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/7313.json`)
                                .then(response => response.json())
                                .then(data => {
                                    const kecamatan = data.find(item => item.id === kecamatanId);
                                    return kecamatan ? kecamatan.name : null;
                                })
                                .catch(error => {
                                    console.error('Error fetching kecamatan data:', error);
                                    return null;
                                });
                        }

                        // Fungsi untuk mendapatkan nama kelurahan berdasarkan ID
                        function getKelurahanName2(selectedKecamatanId, kelurahanId) {
                            return fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${selectedKecamatanId}.json`)
                                .then(response => response.json())
                                .then(data => {
                                    const kelurahan = data.find(item => item.id === kelurahanId);
                                    return kelurahan ? kelurahan.name : null;
                                })
                                .catch(error => {
                                    console.error('Error fetching kelurahan data:', error);
                                    return null;
                                });
                        }
                    </script>

                    <!-- Mulai loop -->
                    @foreach ($ormasTerdaftar as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ormas->nama_organisasi }}</td>
                            <td>{{ $item->no_telp }}</td>
                            <td>{{ $item->alamat_sekretariat }}</td>
                            <td class="kelurahan" data-id="{{ $loop->iteration }}">{{ $item->kelurahan }}</td>
                            <td class="kecamatan" data-id="{{ $loop->iteration }}">{{ $item->kecamatan }}</td>

                            <!-- Kolom lainnya tetap sama -->

                            <script>
                                const kecamatanElement_{{ $loop->iteration }} = document.querySelector(
                                    '.kecamatan[data-id="{{ $loop->iteration }}"]');
                                const kelurahanElement_{{ $loop->iteration }} = document.querySelector(
                                    '.kelurahan[data-id="{{ $loop->iteration }}"]');

                                const kecamatanId_{{ $loop->iteration }} = kecamatanElement_{{ $loop->iteration }}.textContent.trim();
                                const kelurahanId_{{ $loop->iteration }} = kelurahanElement_{{ $loop->iteration }}.textContent.trim();

                                getKecamatanName2(kecamatanId_{{ $loop->iteration }})
                                    .then(kecamatanName => {
                                        if (kecamatanName) {
                                            kecamatanElement_{{ $loop->iteration }}.textContent = kecamatanName;
                                        } else {
                                            console.log('Kecamatan tidak ditemukan.');
                                        }
                                    });

                                getKelurahanName2(kecamatanId_{{ $loop->iteration }}, kelurahanId_{{ $loop->iteration }})
                                    .then(kelurahanName => {
                                        if (kelurahanName) {
                                            kelurahanElement_{{ $loop->iteration }}.textContent = kelurahanName;
                                        } else {
                                            console.log('Kelurahan tidak ditemukan.');
                                        }
                                    });
                            </script>
                            <td>
                                <div class="d-flex mt-2">
                                    @if ($item->status == 'Berhasil Kirim SKT')
                                        <p class="text-primary"
                                            style="background-color: #EEFBF0; padding:6px 10px; border-radius:6px;">
                                            SKT Aktif
                                        </p>
                                    @else
                                        <p class="text-warning"
                                            style="background-color: #fbfbee; padding:6px 10px; border-radius:6px;">
                                            Menunggu SKT
                                        </p>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-bg-light"
                                        href="/permohonan-skt/ormas-terdaftar/detail/{{ $item->id }}"><i
                                            class="nav-icon la la-eye"></i></a>
                                    <form action="/permohonan-skt/destroy/{{ $item->id }}" method="POST">
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
