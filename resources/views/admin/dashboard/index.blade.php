@extends('app', ['title' => 'Dashboard'])
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Heading-->
                    <div class="d-flex flex-column">
                        <!--begin::Title-->
                        <h2 class="text-white font-weight-bold my-2 mr-5">Dashboard</h2>
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
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
                            <!--end::Item-->
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Dashboard-->
                <div class="row">
                    <div class="col-xl-3">
                        <!--begin::Mixed Widget 10-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body pb-3">
                                <div class="flex-grow-1">

                                    <div class="symbol symbol-50 pb-3">
                                        <span class="symbol">
                                            <img src="assets/media/svg/misc/IC-totalormas.svg"
                                                class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>

                                    <p class="text-dark font-weight-bolder font-size-h2">{{ $totalOrmas }}
                                    <p class="text-dark-50 font-weight-normal font-size-lg ">Total Ormas
                                </div>
                                <!--begin::Team-->
                                <!--end::Team-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 10-->
                    </div>
                    <div class="col-xl-3">
                        <!--begin::Mixed Widget 10-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body pb-3">
                                <div class="flex-grow-1">
                                    <!--begin::Info-->


                                    <div class="symbol symbol-50 pb-3">
                                        <span class="symbol">
                                            <img src="assets/media/svg/misc/IC-totalpermohonan.svg"
                                                class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>

                                    <!--end::Info-->
                                    <!--begin::Link-->
                                    <p class="text-dark font-weight-bolder font-size-h2">{{ $totalSkt }}
                                        <!-- <br />Generator</a> -->
                                        <!--end::Link-->
                                        <!--begin::Desc-->
                                    <p class="text-dark-50 font-weight-normal font-size-lg ">Total Permohonan SKT
                                        <!-- <br />We help to strengthen your brand
                                                                                                 <br />for your every purpose.</p> -->
                                        <!--end::Desc-->
                                </div>
                                <!--begin::Team-->
                                <!--end::Team-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 10-->
                    </div>
                    <div class="col-xl-3">
                        <!--begin::Mixed Widget 10-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body pb-3">
                                <div class="flex-grow-1">

                                    <div class="symbol symbol-50 pb-3">
                                        <span class="symbol">
                                            <img src="assets/media/svg/misc/IC-Totalperdana.svg"
                                                class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>

                                    <p class="text-dark font-weight-bolder font-size-h2">{{ $totalPermohonanDana }}
                                    <p class="text-dark-50 font-weight-normal font-size-lg ">Total Permohonan Dana
                                </div>
                                <!--begin::Team-->
                                <!--end::Team-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 10-->
                    </div>
                    <div class="col-xl-3">
                        <!--begin::Mixed Widget 10-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body pb-3">
                                <div class="flex-grow-1">
                                    <div class="symbol symbol-50 pb-3">
                                        <span class="symbol">
                                            <img src="assets/media/svg/misc/IC-Totalpelaporan.svg"
                                                class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>

                                    <p class="text-dark font-weight-bolder font-size-h2">{{ $totalPelaporanKegiatan }}
                                    <p class="text-dark-50 font-weight-normal font-size-lg ">Total Pelaporan Kegiatan
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 10-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!--begin::List Widget 10-->
                        <div class="card card-custom card-stretch gutter-b" style="height: 60vh;">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">Rekap Layanan</h3>
                                <div class="card-toolbar">

                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body mx-auto pt-0">
                                <canvas style="width: 100%;" id="chartRekapLayanan"></canvas>
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end: Card-->
                        <!--end: List Widget 10-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::List Widget 11-->
                        <div class="card card-custom card-stretch gutter-b" style="height: 60vh;">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">Total Ormas</h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                <canvas style="width: 100%;" id="jumlahOrmas"></canvas>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 11-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('chartRekapLayanan').getContext('2d');
        var chartRekapLayanan = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Pengajuan SKT', 'Permohonan Dana Hibah', 'Pelaporan Kegiatan'],
                datasets: [{
                    label: 'Jumlah',
                    data: [{{ $totalSkt }}, {{ $totalPermohonanDana }}, {{ $totalPelaporanKegiatan }}],
                    backgroundColor: [
                        'rgba(0, 142, 66, 1)',
                        'rgba(0, 110, 51, 1)',
                        'rgba(135, 192, 39, 1)'
                    ],
                    borderColor: [
                        'rgba(0, 142, 66, 1, 0.2)',
                        'rgba(0, 110, 51, 1, 0.2)',
                        'rgba(135, 192, 39, 1, 0.2)'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'bottom', // Atur posisi label menjadi 'bottom'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.label || '';
                                var value = context.parsed || 0;
                                return label + ': ' + value;
                            }
                        }
                    }
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById('jumlahOrmas').getContext('2d');
        var jumlahOrmas = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! $totalOrmasByYear->pluck('year') !!},
                datasets: [{
                    label: 'Jumlah Ormas',
                    data: {!! $totalOrmasByYear->pluck('total_ormas') !!},
                    backgroundColor: [
                        'rgba(0, 142, 66, 1)',
                        'rgba(0, 110, 51, 1)',
                        'rgba(135, 192, 39, 1)'
                    ],
                    borderColor: [
                        'rgba(0, 142, 66, 1, 0.2)',
                        'rgba(0, 110, 51, 1, 0.2)',
                        'rgba(135, 192, 39, 1, 0.2)'
                    ],
                    borderWidth: 0
                }]
            }
        });
    </script>
@endsection
