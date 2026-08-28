@extends('layouts.app')

@section('title', 'Kelola Menu - RestoNusantara Admin')

@section('content')

<!-- Header Section -->
<div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between mb-4 gap-3">
    <div>
        <h3 class="fw-bold text-dark mb-1">Manajemen Menu Makanan & Minuman</h3>
        <p class="text-muted mb-0 small">Kelola daftar hidangan, ketersediaan porsi, harga, dan penambahan menu baru.</p>
    </div>

    <div>
        <!-- Button Trigger Modal Popup Tambah Menu -->
        <button type="button" class="btn btn-primary shadow-sm fw-semibold d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#addMenuModal">
            <i class="bi bi-plus-lg fs-5"></i>
            <span>Tambah Menu Baru</span>
        </button>
    </div>
</div>

<!-- Category Pills & Filter Controls -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-body p-3">
        <div class="row g-3 align-items-center justify-content-between">
            
            <!-- Category Tabs -->
            <div class="col-12 col-lg-8">
                <div class="d-flex flex-wrap gap-2" id="categoryFilterGroup">
                    <button class="btn btn-primary btn-sm rounded-pill filter-btn active" data-category="all">Semua Menu (18)</button>
                    <button class="btn btn-outline-secondary btn-sm rounded-pill filter-btn" data-category="Makanan Utama">Makanan Utama (8)</button>
                    <button class="btn btn-outline-secondary btn-sm rounded-pill filter-btn" data-category="Minuman Dingin">Minuman Dingin (5)</button>
                    <button class="btn btn-outline-secondary btn-sm rounded-pill filter-btn" data-category="Minuman Panas">Minuman Panas (3)</button>
                    <button class="btn btn-outline-secondary btn-sm rounded-pill filter-btn" data-category="Dessert">Dessert (2)</button>
                </div>
            </div>

            <!-- Search & Status Filter -->
            <div class="col-12 col-lg-4 d-flex gap-2">
                <div class="input-group input-group-sm">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
                    <input type="text" id="searchMenuInput" class="form-control bg-light border-start-0" placeholder="Cari nama menu...">
                </div>
                <select class="form-select form-select-sm w-auto" id="statusFilterSelect">
                    <option value="all">Semua Status</option>
                    <option value="Tersedia">🟢 Tersedia</option>
                    <option value="Habis">🔴 Habis</option>
                </select>
            </div>

        </div>
    </div>
</div>

<!-- Grid Menu Items -->
<div class="row g-3" id="menuGridContainer">

    <!-- Item 1: Makanan Utama -->
    <div class="col-12 col-sm-6 col-md-4 col-xl-3 menu-item-card" data-category="Makanan Utama" data-status="Tersedia" data-name="nasi goreng wagyu special">
        <div class="card border-0 shadow-sm h-100 position-relative">
            <div class="position-relative">
                <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?w=500&auto=format&fit=crop&q=60" class="card-img-top menu-card-img" alt="Nasi Goreng Wagyu">
                <span class="position-absolute top-0 start-0 m-2 badge bg-success shadow-sm">🟢 Tersedia</span>
                <span class="position-absolute top-0 end-0 m-2 badge bg-dark shadow-sm">Rp 45.000</span>
            </div>
            <div class="card-body d-flex flex-column">
                <div class="mb-2">
                    <span class="badge bg-primary-subtle text-primary extra-small">Makanan Utama</span>
                    <span class="badge bg-light text-muted extra-small ms-1"><i class="bi bi-clock me-1"></i>15 mnt</span>
                </div>
                <h6 class="fw-bold text-dark mb-1">Nasi Goreng Wagyu Special</h6>
                <p class="text-muted extra-small flex-grow-1 mb-3">Nasi goreng bumbu rempah nusantara dengan irisan daging wagyu tenderloin & telur ceplok.</p>
                <div class="pt-2 border-top d-flex align-items-center justify-content-between">
                    <small class="text-muted">HPP: Rp 22.000</small>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-secondary" title="Edit Menu"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-outline-danger" title="Hapus Menu"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Item 2: Minuman Dingin -->
    <div class="col-12 col-sm-6 col-md-4 col-xl-3 menu-item-card" data-category="Minuman Dingin" data-status="Tersedia" data-name="es teh manis jumbo special">
        <div class="card border-0 shadow-sm h-100 position-relative">
            <div class="position-relative">
                <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=500&auto=format&fit=crop&q=60" class="card-img-top menu-card-img" alt="Es Teh Jumbo">
                <span class="position-absolute top-0 start-0 m-2 badge bg-success shadow-sm">🟢 Tersedia</span>
                <span class="position-absolute top-0 end-0 m-2 badge bg-dark shadow-sm">Rp 10.000</span>
            </div>
            <div class="card-body d-flex flex-column">
                <div class="mb-2">
                    <span class="badge bg-info-subtle text-info-emphasis extra-small">Minuman Dingin</span>
                    <span class="badge bg-light text-muted extra-small ms-1"><i class="bi bi-clock me-1"></i>5 mnt</span>
                </div>
                <h6 class="fw-bold text-dark mb-1">Es Teh Manis Jumbo</h6>
                <p class="text-muted extra-small flex-grow-1 mb-3">Teh melati racikan segar dengan es batu dan gula asli porsi jumbo 500ml.</p>
                <div class="pt-2 border-top d-flex align-items-center justify-content-between">
                    <small class="text-muted">HPP: Rp 3.000</small>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-secondary" title="Edit Menu"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-outline-danger" title="Hapus Menu"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Item 3: Makanan Utama -->
    <div class="col-12 col-sm-6 col-md-4 col-xl-3 menu-item-card" data-category="Makanan Utama" data-status="Tersedia" data-name="ayam goreng lengkuas sambal terasi">
        <div class="card border-0 shadow-sm h-100 position-relative">
            <div class="position-relative">
                <img src="https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=500&auto=format&fit=crop&q=60" class="card-img-top menu-card-img" alt="Ayam Goreng Lengkuas">
                <span class="position-absolute top-0 start-0 m-2 badge bg-success shadow-sm">🟢 Tersedia</span>
                <span class="position-absolute top-0 end-0 m-2 badge bg-dark shadow-sm">Rp 32.000</span>
            </div>
            <div class="card-body d-flex flex-column">
                <div class="mb-2">
                    <span class="badge bg-primary-subtle text-primary extra-small">Makanan Utama</span>
                    <span class="badge bg-light text-muted extra-small ms-1"><i class="bi bi-clock me-1"></i>20 mnt</span>
                </div>
                <h6 class="fw-bold text-dark mb-1">Ayam Goreng Lengkuas</h6>
                <p class="text-muted extra-small flex-grow-1 mb-3">Ayam pejantan ungkep bumbu kremes lengkuas gurih disajikan dengan sambal terasi mendidih.</p>
                <div class="pt-2 border-top d-flex align-items-center justify-content-between">
                    <small class="text-muted">HPP: Rp 16.000</small>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-secondary" title="Edit Menu"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-outline-danger" title="Hapus Menu"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Item 4: Minuman Panas -->
    <div class="col-12 col-sm-6 col-md-4 col-xl-3 menu-item-card" data-category="Minuman Panas" data-status="Habis" data-name="kopi tubruk toraja mantap">
        <div class="card border-0 shadow-sm h-100 position-relative">
            <div class="position-relative">
                <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=500&auto=format&fit=crop&q=60" class="card-img-top menu-card-img opacity-75" alt="Kopi Tubruk">
                <span class="position-absolute top-0 start-0 m-2 badge bg-danger shadow-sm">🔴 Habis (Sold Out)</span>
                <span class="position-absolute top-0 end-0 m-2 badge bg-dark shadow-sm">Rp 18.000</span>
            </div>
            <div class="card-body d-flex flex-column">
                <div class="mb-2">
                    <span class="badge bg-warning-subtle text-warning-emphasis extra-small">Minuman Panas</span>
                    <span class="badge bg-light text-muted extra-small ms-1"><i class="bi bi-clock me-1"></i>7 mnt</span>
                </div>
                <h6 class="fw-bold text-dark mb-1">Kopi Tubruk Toraja</h6>
                <p class="text-muted extra-small flex-grow-1 mb-3">Single origin kopi arabika Toraja diseduh panas dengan cita rasa rempah dan keasaman seimbang.</p>
                <div class="pt-2 border-top d-flex align-items-center justify-content-between">
                    <small class="text-muted">HPP: Rp 7.000</small>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-secondary" title="Edit Menu"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-outline-success" title="Ubah ke Tersedia"><i class="bi bi-check-circle"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Item 5: Dessert -->
    <div class="col-12 col-sm-6 col-md-4 col-xl-3 menu-item-card" data-category="Dessert" data-status="Tersedia" data-name="es cendol durian musang king">
        <div class="card border-0 shadow-sm h-100 position-relative">
            <div class="position-relative">
                <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?w=500&auto=format&fit=crop&q=60" class="card-img-top menu-card-img" alt="Es Cendol Durian">
                <span class="position-absolute top-0 start-0 m-2 badge bg-success shadow-sm">🟢 Tersedia</span>
                <span class="position-absolute top-0 end-0 m-2 badge bg-dark shadow-sm">Rp 25.000</span>
            </div>
            <div class="card-body d-flex flex-column">
                <div class="mb-2">
                    <span class="badge bg-danger-subtle text-danger extra-small">Dessert</span>
                    <span class="badge bg-light text-muted extra-small ms-1"><i class="bi bi-clock me-1"></i>8 mnt</span>
                </div>
                <h6 class="fw-bold text-dark mb-1">Es Cendol Durian</h6>
                <p class="text-muted extra-small flex-grow-1 mb-3">Cendol pandan harum dengan kuah santan gurih, gula aren cair, dan topping daging durian asli.</p>
                <div class="pt-2 border-top d-flex align-items-center justify-content-between">
                    <small class="text-muted">HPP: Rp 12.000</small>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-secondary" title="Edit Menu"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-outline-danger" title="Hapus Menu"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal Popup Reusable -->
@include('components.modals.add-menu-modal')

@endsection

@push('scripts')
<script>
    // Interaktivitas Filter & Pencarian Menu (Vanilla JS)
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("searchMenuInput");
        const statusSelect = document.getElementById("statusFilterSelect");
        const categoryButtons = document.querySelectorAll(".filter-btn");
        const menuCards = document.querySelectorAll(".menu-item-card");

        let activeCategory = "all";

        function applyFilter() {
            const query = searchInput.value.toLowerCase().trim();
            const statusVal = statusSelect.value;

            menuCards.forEach(card => {
                const name = card.getAttribute("data-name");
                const category = card.getAttribute("data-category");
                const status = card.getAttribute("data-status");

                const matchesSearch = name.includes(query);
                const matchesCategory = (activeCategory === "all" || category === activeCategory);
                const matchesStatus = (statusVal === "all" || status === statusVal);

                if (matchesSearch && matchesCategory && matchesStatus) {
                    card.classList.remove("d-none");
                } else {
                    card.classList.add("d-none");
                }
            });
        }

        categoryButtons.forEach(btn => {
            btn.addEventListener("click", function () {
                categoryButtons.forEach(b => {
                    b.classList.remove("btn-primary", "active");
                    b.classList.add("btn-outline-secondary");
                });
                this.classList.remove("btn-outline-secondary");
                this.classList.add("btn-primary", "active");

                activeCategory = this.getAttribute("data-category");
                applyFilter();
            });
        });

        searchInput.addEventListener("input", applyFilter);
        statusSelect.addEventListener("change", applyFilter);
    });
</script>
@endpush
