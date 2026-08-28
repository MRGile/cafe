<header class="sticky-top bg-white border-bottom shadow-sm py-2 px-3 px-lg-4">
    <div class="d-flex align-items-center justify-content-between">
        
        <!-- Left Side: Mobile Menu Toggle & Brand Status -->
        <div class="d-flex align-items-center gap-2">
            <button class="btn btn-outline-secondary d-lg-none px-2 py-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
                <i class="bi bi-list fs-5"></i>
            </button>
            
            <div class="d-none d-sm-flex align-items-center gap-2 bg-light px-3 py-1.5 rounded-pill border">
                <span class="pulse-indicator"></span>
                <span class="fw-semibold text-dark small">Resto Open</span>
                <span class="text-muted opacity-50">|</span>
                <span class="text-muted small"><i class="bi bi-clock me-1"></i>Shift Siang (10:00 - 18:00)</span>
            </div>
        </div>

        <!-- Middle: Global Search Input -->
        <div class="d-none d-md-block flex-grow-1 mx-4" style="max-width: 380px;">
            <div class="input-group input-group-sm">
                <span class="input-group-text bg-light border-end-0 text-muted">
                    <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control bg-light border-start-0 ps-0" placeholder="Cari menu, pesanan, karyawan..." aria-label="Search">
            </div>
        </div>

        <!-- Right Side: Quick Action, Notifications & Profile Dropdown -->
        <div class="d-flex align-items-center gap-2 gap-md-3">
            
            <!-- Quick Add Button -->
            <button type="button" class="btn btn-primary btn-sm d-flex align-items-center gap-1 shadow-sm" data-bs-toggle="modal" data-bs-target="#addMenuModal">
                <i class="bi bi-plus-lg"></i>
                <span class="d-none d-sm-inline font-semibold">Tambah Menu</span>
            </button>

            <!-- Notifications Dropdown -->
            <div class="dropdown">
                <button class="btn btn-light position-relative btn-sm rounded-circle p-2" type="button" id="notifDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bell text-dark"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger border border-light style-badge">
                        3
                        <span class="visually-hidden">Notifikasi Baru</span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2 p-0" style="width: 320px;" aria-labelledby="notifDropdown">
                    <div class="p-3 bg-light border-bottom d-flex align-items-center justify-content-between">
                        <h6 class="mb-0 fw-bold">Notifikasi Resto</h6>
                        <span class="badge bg-primary-subtle text-primary">3 Baru</span>
                    </div>
                    <div class="list-group list-group-flush small">
                        <a href="#" class="list-group-item list-group-item-action p-3">
                            <div class="d-flex gap-2">
                                <i class="bi bi-receipt-cutoff text-success fs-5"></i>
                                <div>
                                    <p class="mb-1 fw-semibold text-dark">Pesanan Baru #ORD-8821</p>
                                    <p class="mb-0 text-muted extra-small">Meja 04 • 2 Nasi Goreng Seafood, 2 Es Teh</p>
                                    <small class="text-muted opacity-75">2 menit lalu</small>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action p-3">
                            <div class="d-flex gap-2">
                                <i class="bi bi-exclamation-triangle text-warning fs-5"></i>
                                <div>
                                    <p class="mb-1 fw-semibold text-dark">Stok Menipis!</p>
                                    <p class="mb-0 text-muted extra-small">Sirup Caramel sisa 2 botol di Bar</p>
                                    <small class="text-muted opacity-75">15 menit lalu</small>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action p-3">
                            <div class="d-flex gap-2">
                                <i class="bi bi-person-check text-info fs-5"></i>
                                <div>
                                    <p class="mb-1 fw-semibold text-dark">Absensi Karyawan</p>
                                    <p class="mb-0 text-muted extra-small">Budi (Kasir) baru saja Clock-In Shift Siang</p>
                                    <small class="text-muted opacity-75">30 menit lalu</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 text-center border-top bg-light">
                        <a href="#" class="text-decoration-none small fw-semibold text-primary">Lihat Semua Notifikasi</a>
                    </div>
                </div>
            </div>

            <div class="vr mx-1 opacity-25 d-none d-sm-block"></div>

            <!-- Profile Dropdown -->
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle gap-2" id="userProfileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar-circle bg-primary text-white shadow-sm">
                        AD
                    </div>
                    <div class="d-none d-md-block text-start">
                        <div class="fw-bold text-dark lh-1 small">Ahmad Dahlan</div>
                        <small class="text-muted extra-small">Admin Restoran</small>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2" aria-labelledby="userProfileDropdown">
                    <li class="px-3 py-2 border-bottom d-md-none">
                        <div class="fw-bold text-dark">Ahmad Dahlan</div>
                        <small class="text-muted">Admin Restoran</small>
                    </li>
                    <li><a class="dropdown-item py-2 d-flex align-items-center gap-2" href="#"><i class="bi bi-person text-muted"></i> Profil Saya</a></li>
                    <li><a class="dropdown-item py-2 d-flex align-items-center gap-2" href="#"><i class="bi bi-sliders text-muted"></i> Pengaturan Resto</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item py-2 d-flex align-items-center gap-2 text-danger" href="#"><i class="bi bi-box-arrow-right"></i> Keluar (Logout)</a></li>
                </ul>
            </div>

        </div>

    </div>
</header>
