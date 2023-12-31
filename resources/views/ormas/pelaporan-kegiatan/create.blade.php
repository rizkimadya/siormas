@extends('app', ['title' => 'Pelaporan Kegiatan'])
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Mobile Toggle-->
                    <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                        id="kt_subheader_mobile_toggle">
                        <span></span>
                    </button>
                    <!--end::Mobile Toggle-->
                    <!--begin::Heading-->
                    <div class="d-flex flex-column">
                        <!--begin::Title-->
                        <h2 class="text-white font-weight-bold my-2 mr-5">Pelaporan Kegiatan</h2>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <div class="d-flex align-items-center font-weight-bold my-2">
                            <!--begin::Item-->
                            <a href="#" class="opacity-75 hover-opacity-100">
                                <i class="flaticon2-shelter text-white icon-1x"></i>
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="{{ secure_url('/pelaporan-kegiatan/index') }}"
                                class="text-white text-hover-white opacity-75 hover-opacity-100">Pelaporan
                                Kegiatan</a>
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white">Tambah Pelaporan Kegiatan
                            </a>
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->

        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Form-->
                        <div class="row justify-content-center my-10 mx-8 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12">
                                <!--begin::Form-->
                                <form class="form" enctype="multipart/form-data" method="POST"
                                    action="{{ secure_url('pelaporan-kegiatan/store') }}">
                                    <!--begin::Form Wizard Step 1-->
                                    @csrf
                                    <div class="pb-5">
                                        <div class="row mt-0">
                                            <input type="hidden" name="ormas_id" value="{{ auth()->user()->id }}">
                                            <div class="form-group col-xl-6">
                                                <label>Nama Organisasi</label>
                                                <div>
                                                    <input class="form-control" disabled="disabled"
                                                        value="{{ auth()->user()->nama_organisasi }}" />
                                                    {{-- <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span> --}}
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>Jenis Kegiatan <span class="text-danger">*</span></label>
                                                <div>
                                                    <input class="form-control form-control-xl" required
                                                        name="jenis_kegiatan" type="text" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-0">
                                            <div class="form-group col-xl-6">
                                                <label>Waktu Pelaksanaan <span class="text-danger">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control form-control-xl" type="date"
                                                        name="waktu_pelaksanaan" required />
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>Lokasi Pelaksanaan <span class="text-danger">*</span></label>
                                                <div>
                                                    <input class="form-control form-control-xl" name="lokasi_pelaksanaan"
                                                        required type="text" />
                                                    <span class="form-text text-muted">Alamat Lengkap tempat Kegiatan
                                                        dilaksanakan</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-0">
                                            <div class="form-group col-xl-6">
                                                <label>Kecamatan <span class="text-danger">*</span></label>
                                                <div>
                                                    <select name="kecamatan" required
                                                        class="custom-select form-control form-control-lg"
                                                        id="kecamatanSelect" onchange="getKelurahan()">
                                                        <option value="">Pilih Kecamatan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>Kelurahan <span class="text-danger">*</span></label>
                                                <div>
                                                    <select name="kelurahan" required
                                                        class="custom-select form-control form-control-lg"
                                                        id="kelurahanSelect">
                                                        <option value="">Pilih Kelurahan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-0">
                                            <div class="form-group col-xl-6">
                                                <label>Nama Penanggung Jawab/Ketua Panitia <span
                                                        class="text-danger">*</span></label>
                                                <div>
                                                    <input required name="ketupat" class="form-control form-control-xl"
                                                        type="text" />
                                                    {{-- <span class="form-text text-muted">Alamat Lengkap tempat Kegiatan dilaksanakan</span> --}}
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>Jumlah Anggaran <span class="text-danger">*</span></label>
                                                <div>
                                                    <input required name="jumlah_anggaran"
                                                        class="form-control form-control-xl" type="number" />
                                                    {{-- <span class="form-text text-muted">Alamat Lengkap tempat Kegiatan dilaksanakan</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-0">
                                            <div class="form-group col-xl-6">
                                                <label>Deskripsi Kegiatan</label>
                                                <div>
                                                    <textarea class="form-control" name="tujuan_permohonan" id="floatingTextarea"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-0">
                                            <div class="form-group col-xl-6">
                                                <label>Laporan Kegiatan <span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                    <input name="laporan_kegiatan" required type="file"
                                                        class="custom-file-input" id="customFile" accept=".pdf" />
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                    <span class="form-text text-black">File dalam bentuk: pdf Max. file
                                                        size: 500 MB</span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>Foto Kegiatan 1 <span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                    <input name="foto_kegiatan1" required type="file"
                                                        class="custom-file-input" id="customFile"
                                                        accept="image/png, image/jpeg, image/jpg" />
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                    <span class="form-text text-black">File dalam bentuk: jpeg, png, jpg,
                                                        Max. file size: 5 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-0">
                                            <div class="form-group col-xl-6">
                                                <label>Foto Kegiatan 2 <span class="text-danger">*</span></label>
                                                <div class="custom-file">
                                                    <input name="foto_kegiatan2" required type="file"
                                                        class="custom-file-input" id="customFile"
                                                        accept="image/png, image/jpeg, image/jpg" />
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                    <span class="form-text text-black">File dalam bentuk: jpeg, png, jpg,
                                                        Max. file size: 5 MB</span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label>Foto Kegiatan 3 </label>
                                                <div class="custom-file">
                                                    <input name="foto_kegiatan3" type="file" class="custom-file-input"
                                                        id="customFile" accept="image/png, image/jpeg, image/jpg" />
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                    <span class="form-text text-black">File dalam bentuk: jpeg, png, jpg,
                                                        Max. file size: 5 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end border-top pt-10">
                                            <div>
                                                <a href="{{ secure_url('/pelaporan-kegiatan/index') }}"
                                                    class="btn btn-secondary font-weight-bold text-uppercase px-6 py-3 mr-2">Batal</a>
                                                <button type="submit"
                                                    class="btn btn-primary font-weight-bold text-uppercase px-6 py-3">Kirim
                                                    Laporan</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form Wizard Step 1-->
                                </form>
                                <!--end::Form Wizard Form-->
                            </div>
                        </div>
                        <!--end::form-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>

    </div>
    <script>
        const kecamatanSelect = document.getElementById('kecamatanSelect');
        const kelurahanSelect = document.getElementById('kelurahanSelect');

        // Event listener untuk pemilihan kecamatan
        kecamatanSelect.addEventListener('change', getKelurahan);

        function getKelurahan() {
            const selectedKecamatanId = kecamatanSelect.value;

            // Bersihkan opsi kelurahan yang sudah ada
            kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';

            // Jika kecamatan belum dipilih, hentikan eksekusi
            if (!selectedKecamatanId) {
                return;
            }

            // Ambil data kelurahan berdasarkan ID kecamatan
            fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${selectedKecamatanId}.json`)
                .then(response => response.json())
                .then(kelurahanData => {
                    // Tambahkan opsi kelurahan dari data yang diambil
                    kelurahanData.forEach(kelurahan => {
                        // Hanya tambahkan opsi jika belum ada
                        if (!kelurahanSelect.querySelector(`option[value="${kelurahan.id}"]`)) {
                            const option = document.createElement('option');
                            option.value = kelurahan.id;
                            option.text = kelurahan.name;
                            kelurahanSelect.appendChild(option);
                        }
                    });
                })
                .catch(error => {
                    console.error('Error fetching kelurahan data:', error);
                });
        }

        // Ambil data kecamatan saat halaman dimuat
        fetch('https://www.emsifa.com/api-wilayah-indonesia/api/districts/7313.json')
            .then(response => response.json())
            .then(kecamatanData => {
                // Tambahkan opsi kecamatan dari data yang diambil
                kecamatanData.forEach(kecamatan => {
                    const option = document.createElement('option');
                    option.value = kecamatan.id;
                    option.text = kecamatan.name;
                    kecamatanSelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error fetching kecamatan data:', error);
            });
    </script>
@endsection
