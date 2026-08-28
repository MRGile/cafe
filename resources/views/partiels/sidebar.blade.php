<div id="sidebar" class="active">
    <div class="sidebar-wrapper active d-flex flex-column justify-content-between">
        <div>
            <!-- Logo Header -->
            <div class="sidebar-header">
                <a href="{{ route('dashboard') }}" class="d-flex align-items-center gap-2">
                    <img src="{{ asset('assets/images/logo/5.png') }}" alt="Logo" style="width: 42px; height: auto;">
                    <span class="fs-5 fw-bold text-primary">Resto Admin</span>
                </a>
            </div>

            <!-- Sidebar Navigation Menu -->
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu Utama</li>

                    {{-- Dashboard --}}
                    <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('dashboard') }}">
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    {{-- Master Menu Makanan & Minuman --}}
                    <li class="sidebar-item {{ request()->routeIs('Menulist') || request()->routeIs('Categories') || request()->routeIs('Addmenu') || request()->routeIs('menus') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('Menulist') }}">
                            <i class="bi bi-journal-richtext"></i>
                            <span>Master Menu</span>
                        </a>
                    </li>

                    {{-- Fitur Reservasi Meja --}}
                    <li class="sidebar-item {{ request()->routeIs('reservation') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('reservation') }}">
                            <i class="bi bi-calendar-check-fill"></i>
                            <span>Reservasi Meja</span>
                        </a>
                    </li>

                    {{-- Karyawan --}}
                    <li class="sidebar-item {{ request()->routeIs('employeelist') || request()->routeIs('attedance') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('employeelist') }}">
                            <i class="bi bi-people-fill"></i>
                            <span>Karyawan Aktif</span>
                        </a>
                    </li>

                    <li class="sidebar-title">Laporan & Sistem</li>

                    {{-- Laporan Penjualan --}}
                    <li class="sidebar-item {{ request()->routeIs('Salesreport') || request()->routeIs('laporan') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('Salesreport') }}">
                            <i class="bi bi-bar-chart-line-fill"></i>
                            <span>Laporan Penjualan</span>
                        </a>
                    </li>

                    {{-- Profile --}}
                    <li class="sidebar-item {{ request()->routeIs('profile') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('profile') }}">
                            <i class="bi bi-person-circle"></i>
                            <span>Profil Saya</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <!-- Sidebar Bottom Action / Logout Button -->
        <div class="p-3 border-top">
            <a href="{{ route('login') }}" class="btn btn-outline-danger w-100 font-bold d-flex align-items-center justify-content-center gap-2">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar (Logout)</span>
            </a>
        </div>

    </div>
</div>
