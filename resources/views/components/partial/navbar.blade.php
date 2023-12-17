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
                    <a href="{{ url('/permohonan-skt/ormas-terdaftar') }}" class="menu-link">
                        <span class="menu-text">Permohonan SKT</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu @if (str_contains(Route::currentRouteName(), 'permohonan-dana')) menu-item-here @endif menu-item-rel"
                    data-menu-toggle="click" aria-haspopup="true">
                    <a href="{{ url('/permohonan-dana/ormas-pemohon') }}" class="menu-link">
                        <span class="menu-text">Permohonan Dana</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu @if (str_contains(Route::currentRouteName(), 'pelaporan-kegiatan')) menu-item-here @endif menu-item-rel"
                    data-menu-toggle="click" aria-haspopup="true">
                    <a href="{{ url('/pelaporan-kegiatan/laporan-ormas') }}" class="menu-link">
                        <span class="menu-text">Pelaporan Kegiatan</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
            </ul>
        @else
            <ul class="menu-nav">
                <li class="menu-item menu-item-submenu @if (str_contains(Route::currentRouteName(), 'dashboard-ormas')) menu-item-here @endif menu-item-rel"
                    data-menu-toggle="click" aria-haspopup="true">
                    <a href="{{ url('/dashboard-ormas/status-skt') }}" class="menu-link">
                        <span class="menu-text">Dashboard Ormas</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu @if (str_contains(Route::currentRouteName(), 'dashboard-default')) menu-item-here @endif menu-item-rel"
                    data-menu-toggle="click" aria-haspopup="true">
                    <a href="{{ url('/dashboard-default/permohonanskt') }}" class="menu-link">
                        <span class="menu-text">Dashboard Default</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu @if (str_contains(Route::currentRouteName(), 'dana-ormas')) menu-item-here @endif menu-item-rel"
                    data-menu-toggle="click" aria-haspopup="true">
                    <a href="{{ url('/dana-ormas/permohonandana') }}" class="menu-link">
                        <span class="menu-text">Permohonan Dana</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu @if (str_contains(Route::currentRouteName(), 'kegiatan-ormas')) menu-item-here @endif menu-item-rel"
                    data-menu-toggle="click" aria-haspopup="true">
                    <a href="{{ url('/kegiatan-ormas/pelaporan') }}" class="menu-link">
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
