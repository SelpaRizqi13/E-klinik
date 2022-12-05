<aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 ">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="" target="_blank">
            <img src="./img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">E-Klinik</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class=" w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="/dashboard">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4">

                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Master Data</h6>
            </li>
            @can('roles')

                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'user' ? 'active' : '' }}" href="/user">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'pegawai' ? 'active' : '' }}" href="/pegawai">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Pegawai</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(request()->url(), 'wilayah') == true ? 'active' : '' }}"
                        href="/wilayah">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Wilayah</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(request()->url(), 'tidakan') == true ? 'active' : '' }}"
                        href="/tindakan">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Tindakan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(request()->url(), 'dokter') == true ? 'active' : '' }}"
                        href="/dokter">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Dokter</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(request()->url(), 'poli') == true ? 'active' : '' }}" href="/poli">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Poliklinik</span>
                    </a>
                </li>
            @endcan
            @can('apoteker')
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(request()->url(), 'obat') == true ? 'active' : '' }}" href="/obat">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Obat</span>
                    </a>
                </li>
            @endcan
            @can('dokter')

                <li class="nav-item">
                    <a class="nav-link {{ str_contains(request()->url(), 'pasien') == true ? 'active' : '' }}"
                        href="/pasien">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Pasien</span>
                    </a>
                </li>
            @endcan
            @can('admin')

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pengelolaan</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'pendaftaran' ? 'active' : '' }}"
                        href="/pasien/create">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Form Pendaftaran</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'tagihan' ? 'active' : '' }}" href="/tagihan">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Tagihan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'laporan' ? 'active' : '' }}" href="/laporan">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Laporan</span>
                    </a>
                </li>
            @endcan
        </ul>
    </div>

</aside>
