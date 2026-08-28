<!-- Sidebar Navigation (Desktop Fixed & Mobile Offcanvas) -->
<aside class="offcanvas-lg offcanvas-start app-sidebar-desktop text-white" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
    
    <!-- Header Logo & Brand -->
    <div class="p-3 p-lg-4 border-bottom border-secondary border-opacity-25 d-flex align-items-center justify-content-between">
        <a href="{{ url('/dashboard') }}" class="d-flex align-items-center gap-2 text-decoration-none text-white">
            <div class="bg-primary text-white rounded-3 p-2 d-flex align-items-center justify-content-center shadow-sm" style="width: 38px; height: 38px;">
                <i class="bi bi-cup-hot-fill fs-5"></i>
            </div>
            <div>
                <h6 class="mb-0 fw-bold tracking-wide text-white">RestoNusantara</h6>
                <small class="text-secondary opacity-75 extra-small" style="font-size: 0.72rem;">ADMIN DASHBOARD</small>
            </div>
        </a>
        
        <!-- Mobile Close Button -->
        <button type="button" class="btn-close btn-close-white d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#mobileSidebar" aria-label="Close"></button>
    </div>

    <!-- Sidebar Body / Navigation Links -->
    <div class="offcanvas-body d-flex flex-column justify-content-between p-3">
        
        <div class="w-100">
            <div class="text-uppercase text-secondary opacity-50 fw-bold extra-small mb-2 px-2" style="font-size: 0.68rem; letter-spacing: 1px;">
                Menu Utama
            </div>
            
            <ul class="nav nav-pills flex-column gap-1 mb-4">
                
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link d-flex align-items-center gap-3 py-2 px-3 {{ request()->is('dashboard') || request()->is('/') ? 'active bg-primary text-white fw-semibold shadow-sm' : 'text-secondary-emphasis text-white-50 hover-white' }}">
                        <i class="bi bi-grid-1x2-fill fs-5"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Kelola Menu Makanan/Minuman -->
                <li class="nav-item">
                    <a href="{{ url('/menus') }}" class="nav-link d-flex align-items-center gap-3 py-2 px-3 {{ request()->is('menus*') ? 'active bg-primary text-white fw-semibold shadow-sm' : 'text-white-50' }}">
                        <i class="bi bi-journal-richtext fs-5"></i>
                        <span class="flex-grow-1">Kelola Menu</span>
                        <span class="badge bg-danger rounded-pill extra-small">New</span>
                    </a>
                </li>

                <!-- Karyawan Aktif -->
                <li class="nav-item">
                    <a href="{{ url('/employees') }}" class="nav-link d-flex align-items-center gap-3 py-2 px-3 {{ request()->is('employees*') ? 'active bg-primary text-white fw-semibold shadow-sm' : 'text-white-50' }}">
                        <i class="bi bi-people-fill fs-5"></i>
                        <span class="flex-grow-1">Karyawan Aktif</span>
                        <span class="badge bg-success rounded-pill extra-small">8 Aktif</span>
                    </a>
                </li>

                <!-- Pesanan & Meja -->
                <li class="nav-item">
                    <a href="{{ url('/orders') }}" class="nav-link d-flex align-items-center gap-3 py-2 px-3 {{ request()->is('orders*') ? 'active bg-primary text-white fw-semibold shadow-sm' : 'text-white-50' }}">
                        <i class="bi bi-ui-checks-grid fs-5"></i>
                        <span>Pesanan & Meja</span>
                    </a>
                </li>

            </ul>

            <div class="text-uppercase text-secondary opacity-50 fw-bold extra-small mb-2 px-2" style="font-size: 0.68rem; letter-spacing: 1px;">
                Laporan & Sistem
            </div>

            <ul class="nav nav-pills flex-column gap-1">
                <li class="nav-item">
                    <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 text-white-50">
                        <i class="bi bi-graph-up-arrow fs-5"></i>
                        <span>Laporan Penjualan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 text-white-50">
                        <i class="bi bi-gear-fill fs-5"></i>
                        <span>Pengaturan Resto</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Bottom Sidebar Card -->
        <div class="mt-4 p-3 bg-secondary bg-opacity-10 rounded-3 border border-secondary border-opacity-25">
            <div class="d-flex align-items-center gap-2 mb-2">
                <i class="bi bi-info-circle text-primary"></i>
                <span class="fw-semibold text-white small">Resto Status</span>
            </div>
            <p class="text-white-50 extra-small mb-2" style="font-size: 0.78rem;">Sistem POS & Admin berjalan normal tanpa kendala server.</p>
            <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

    </div>
</aside>
