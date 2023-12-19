<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Siormas | {{ $title }}</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.5') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('assets/css/pages/wizard/wizard-1.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/logokesbangpol.png') }}" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" style="background-image: url({{ asset('assets/media/bg/bg-main.jpg') }})"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    @include('sweetalert::alert')
    <div id="kt_header_mobile" class="header-mobile">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="{{ asset('assets/media/logos/logo-ormas.png') }}"
                class="logo-default max-h-30px" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container d-flex align-items-stretch justify-content-between">
                        <!--begin::Left-->
                        <div class="d-flex align-items-stretch mr-3">
                            <!--begin::Header Logo-->
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="Logo" src="{{ asset('assets/media/logos/logo-ormas.png') }}"
                                        class="logo-default max-h-40px" />
                                </a>
                            </div>
                            <!--end::Header Logo-->
                            <!--begin::Header Menu Wrapper-->
                            @include('components.partial.navbar')
                            <!--end::Header Menu Wrapper-->
                        </div>
                        <!--end::Left-->
                        <!--begin::Topbar-->
                        <div class="topbar">
                            <div class="dropdown">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                                    <div
                                        class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto">
                                        <span
                                            class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                        <span
                                            class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">{{ auth()->user()->username }}</span>
                                        <span class="symbol symbol-35">
                                            <span
                                                class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">A</span>
                                        </span>
                                    </div>
                                </div>
                                <!--end::Toggle-->
                                <!--begin::Dropdown-->
                                <div
                                    class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                                    <!--begin::Header-->
                                    <div class="d-flex align-items-center p-8 rounded-top">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
                                            <img src="{{ asset('assets/media/users/300_21.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Text-->
                                        <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">Sean Stone</div>
                                        <!-- <span class="label label-light-success label-lg font-weight-bold label-inline">3 messages</span> -->
                                        <!--end::Text-->
                                    </div>
                                    <div class="separator separator-solid"></div>
                                    <!--end::Header-->
                                    <!--begin::Nav-->
                                    <div class="navi navi-spacer-x-0 pt-5">
                                        <div class="navi-footer px-8 py-5">
                                            <a href="{{ url('/logout') }}"
                                                class="btn btn-light-primary font-weight-bold">Sign Out</a>
                                            <!-- <a href="custom/user/login-v2.html" target="_blank" class="btn btn-clean font-weight-bold">Upgrade Plan</a> -->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                @yield('content')
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2023©</span>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="text-dark-75 text-hover-primary">Kesbangpol Kabupaten Wajo</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!--begin::Demo Panel-->
    <div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
            <h4 class="font-weight-bold m-0">Select A Demo</h4>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content">
            <!--begin::Wrapper-->
            <div class="offcanvas-wrapper mb-5 scroll-pull">
                <h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo1.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo1/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo1/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo2.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo2/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo2/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo3.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo3/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo3/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo4.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo4/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo4/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo5.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo5/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo5/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo6.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo6/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo6/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo7.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo7/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo7/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo8.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo8/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo8/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo9.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo9/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo9/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo10.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo10/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo10/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo11.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo11/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo11/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo12.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo13.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo14.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo15.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo16.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo17.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo18.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo19.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo20.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo21.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo22.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo23.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo24.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo25.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo26.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo27.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo28.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo29.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo30.png" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
            </div>
            <!--end::Wrapper-->
            <!--begin::Purchase-->
            <div class="offcanvas-footer">
                <a href="https://1.envato.market/EA4JP" target="_blank"
                    class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
            </div>
            <!--end::Purchase-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Demo Panel-->
    <script>
        var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.5') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.5') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js?v=7.0.5') }}"></script>
    <script src="{{ asset('assets/js/pages/custom/wizard/wizard-1.js?v=7.0.5') }}"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
