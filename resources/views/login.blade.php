<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../../">
    <meta charset="utf-8" />
    <title>Siormas | Login </title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ secure_asset('assets/css/pages/login/classic/login-1.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ secure_asset('assets/plugins/global/plugins.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <link href="{{ secure_asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ secure_asset('assets/css/style.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ secure_asset('assets/media/logos/logokesbangpol.png') }}" />
</head>
<!--end::Head-->
<!--begin::Body-->


<body id="kt_body" style="background-image: url(assets/media/bg/bg-10.jpg)"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
    @include('sweetalert::alert')
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid bg-white"
            id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10"
                style="background-image: url({{ secure_url('assets/media/bg/bg_login1.jpg') }});">
                <!--begin: Aside Container-->
                <div class="d-flex flex-row-fluid flex-column justify-content-between">
                    <!--begin: Aside header-->
                    <a href="#" class="flex-column-auto mt-5">
                        <img src="assets/media/logos/logo-ormas.png" class="max-h-50px" alt="" />
                    </a>
                    <!--end: Aside header-->
                    <!--begin: Aside content-->
                    <div class="flex-column-fluid d-flex flex-column justify-content-center">
                        <h6 class="font-weight-lighter text-white opacity-80 pb-2">Selamat Datang</h6>
                        <h3 class="font-size-h1 mb-5 text-white">Sistem Manajemen Ormas</h3>
                    </div>
                    <!--end: Aside content-->
                    <!--begin: Aside footer for desktop-->
                    <div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
                        <div class="opacity-70 font-weight-bold text-white">© 2023 - Bankesbangpol Kabupaten Wajo</div>
                    </div>
                    <!--end: Aside footer for desktop-->
                </div>
                <!--end: Aside Container-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="flex-row-fluid d-flex flex-column position-relative p-7 overflow-hidden">
                <!--begin::Content header-->
                <div
                    class="position-absolute bottom-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">
                    <span class="font-weight-bold text-dark-50">Apakah Anda Telah Memiliki Akun?</span>
                    <a href="javascript:;" class="font-weight-bold ml-2" id="kt_login_signup">Daftar!</a>
                </div>
                <!--end::Content header-->
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center mt-10 mt-lg-0">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        <div class="text-center mb-10">
                            <h3 class="font-size-h1">Silahkan Login</h3>
                            <p class="text-muted font-weight-bold">Masukkan Username dan Password Anda</p>
                        </div>
                        <!--begin::Form-->
                        @if (session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if (session('wait'))
                            <p class="alert alert-danger">{{ session('wait') }}</p>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif
                        <div id="kt_login_signin_form">
                            <form action="{{ secure_url('/login') }}" method="POST" class="form">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-5 px-6" type="text"
                                        placeholder="Username" name="username" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-5 px-6" type="password"
                                        placeholder="Password" name="password" autocomplete="off" />
                                </div>
                                <!--begin::Action-->
                                <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                                    <button type="submit"
                                        class="btn btn-primary font-weight-bold px-9 py-4 my-3">LOGIN</button>
                                </div>
                                <!--end::Action-->
                            </form>
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                    <!--begin::Signup-->
                    <div class="login-form login-signup">
                        <div class="text-center mb-10">
                            <h3 class="font-size-h1">Silahkan Daftar</h3>
                            <p class="text-muted font-weight-bold">Masukkan Data Anda dengan Benar</p>
                        </div>
                        <!--begin::Form-->
                        <div id="kt_login_signup_form">
                            <form class="form" action="{{ secure_url('/regis') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-3 px-4" type="text"
                                        placeholder="Nama Organisasi" name="nama_organisasi" autocomplete="off" />
                                    @error('nama_organisasi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-3 px-4" type="text"
                                        placeholder="Nama Ketua" name="nama_ketua" autocomplete="off" />
                                    @error('nama_ketua')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-3 px-4" type="text"
                                        placeholder="No. SK Pengurus" name="no_sk_pengurus" autocomplete="off" />
                                    @error('no_sk_pengurus')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-3 px-4" type="number"
                                        placeholder="No. Telepon Ketua/Sekertaris" name="no_telp"
                                        autocomplete="off" />
                                    @error('no_telp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-3 px-4" type="text"
                                        placeholder="Username" name="username" autocomplete="off" />
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-3 px-4" type="password"
                                        placeholder="Password" name="password" autocomplete="off" />
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-3 px-4" type="password"
                                        placeholder="Confirm password" name="password_confirmation"
                                        autocomplete="off" />
                                    @error('password_confirmation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group d-flex flex-wrap">
                                    <button type="submit"
                                        class="btn btn-primary font-weight-bold px-9 py-4 my-3">SUBMIT</button>
                                    <button type="button" id="kt_login_signup_cancel"
                                        class="btn btn-secondary font-weight-bold px-9 py-4 my-3 mx-4">CANCEL</button>
                                </div>
                            </form>

                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Signup-->
                    <!--begin::Forgot-->
                    <div class="login-form login-forgot">
                        <div class="text-center mb-10 mb-lg-20">
                            <h3 class="font-size-h1">Forgotten Password ?</h3>
                            <p class="text-muted font-weight-bold">Enter your email to reset your password</p>
                        </div>
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-5 px-6" type="email"
                                    placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <div class="form-group d-flex flex-wrap flex-center">
                                <button type="button" id="kt_login_forgot_submit"
                                    class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Submit</button>
                                <button type="button" id="kt_login_forgot_cancel"
                                    class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancel</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Forgot-->
                </div>
                <!--end::Content body-->
                <!--begin::Content footer for mobile-->
                <div
                    class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
                    <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2020 Metronic</div>
                    <div class="d-flex order-1 order-sm-2 my-2">
                        <a href="#" class="text-dark-75 text-hover-primary">Privacy</a>
                        <a href="#" class="text-dark-75 text-hover-primary ml-4">Legal</a>
                        <a href="#" class="text-dark-75 text-hover-primary ml-4">Contact</a>
                    </div>
                </div>
                <!--end::Content footer for mobile-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
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
    <script src="{{ secure_asset('assets/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
    <script src="{{ secure_asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
    <script src="{{ secure_asset('assets/js/scripts.bundle.js?v=7.0.5') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ secure_asset('assets/js/pages/custom/login/login-general.js?v=7.0.5') }}"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
