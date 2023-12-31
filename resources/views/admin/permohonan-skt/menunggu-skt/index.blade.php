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
                    @foreach ($menunggu as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ormas->nama_organisasi }}</td>
                            <td>{{ $item->no_telp }}</td>
                            <td>{{ $item->bidang_kegiatan }}</td>
                            <td>{{ $item->alamat_sekretariat }}</td>
                            <td class="kelurahan" data-id="{{ $loop->iteration }}">{{ $item->kelurahan }}</td>
                            <td class="kecamatan" data-id="{{ $loop->iteration }}">{{ $item->kecamatan }}</td>
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
                                <a class="btn btn-bg-primary text-white"
                                    href="/permohonan-skt/menunggu/detail/{{ $item->id }}">Kirim SKT</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
