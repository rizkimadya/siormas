<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
    <!--begin::Header Menu-->
    <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
        <!--begin::Header Nav-->
        @if (auth()->user()->roles == 'admin')
            <ul class="menu-nav">
                <li
                    class="menu-item menu-item-open @if (Route::currentRouteName() == 'dashboard') menu-item-here @endif menu-item-submenu menu-item-rel menu-item-open">
                    <a href="/" class="menu-link">
                        <span class="menu-text">Dashboard</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu @if (str_contains(Route::currentRouteName(), 'permohonan-skt')) menu-item-here @endif menu-item-rel"
                    data-menu-toggle="click" aria-haspopup="true">
                    <a href="{{ secure_url('/permohonan-skt/ormas-terdaftar') }}" class="menu-link">
                        <span class="menu-text">Permohonan SKT</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu @if (str_contains(Route::currentRouteName(), 'permohonan-dana')) menu-item-here @endif menu-item-rel"
                    data-menu-toggle="click" aria-haspopup="true">
                    <a href="{{ secure_url('/permohonan-dana/ormas-pemohon') }}" class="menu-link">
                        <span class="menu-text">Permohonan Dana</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu @if (str_contains(Route::currentRouteName(), 'pelaporan-kegiatan')) menu-item-here @endif menu-item-rel"
                    data-menu-toggle="click" aria-haspopup="true">
                    <a href="{{ secure_url('/pelaporan-kegiatan/laporan-ormas') }}" class="menu-link">
                        <span class="menu-text">Pelaporan Kegiatan</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
            </ul>
        @else
            <ul class="menu-nav">
                <li class="menu-item menu-item-submenu {{ in_array($title, ['Dashboard Ormas', 'Permohonan SKT']) ? 'menu-item-here' : 'menu-item-rel' }}"
                    data-menu-toggle="click" aria-haspopup="true">
                    @php
                        $skt = \App\Models\SKT::where('ormas_id', auth()->user()->id)->first();
                    @endphp

                    <a href="{{ $skt ? secure_url('/dashboard-ormas/status-skt') : secure_url('/dashboard-ormas') }}"
                        class="menu-link">
                        <span class="menu-text">Dashboard</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu {{ $title == 'Permohonan Dana' ? 'menu-item-here' : 'menu-item-rel' }}"
                    data-menu-toggle="click" aria-haspopup="true">
                    <a href="{{ secure_url('/permohonan-dana/index') }}" class="menu-link">
                        <span class="menu-text">Permohonan Dana</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu {{ $title == 'Pelaporan Kegiatan' ? 'menu-item-here' : 'menu-item-rel' }}"
                    data-menu-toggle="click" aria-haspopup="true">
                    <a href="{{ secure_url('/pelaporan-kegiatan/index') }}" class="menu-link">
                        <span class="menu-text">Pelaporan Kegiatan</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
            </ul>
        @endif
        <!--end::Header Nav-->
    </div>
    <!--end::Header Menu-->
</div>
