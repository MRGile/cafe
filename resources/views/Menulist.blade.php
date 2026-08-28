@extends('layouts.app')
@section('title', 'Master Menu Makanan & Minuman - Nusantara Restaurant')

@section('content')

<div class="page-heading">
    <!-- Page Header Title -->
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h3 class="mb-1 font-bold text-dark">Master Menu Restoran</h3>
                <p class="text-subtitle text-muted mb-0">Satu pusat kelola seluruh menu makanan, minuman, harga, dan ketersediaan porsi di database.</p>
            </div>
            <div class="col-12 col-md-6 text-md-end mt-3 mt-md-0">
                <!-- Trigger Button for Add Menu Modal -->
                <button type="button" class="btn btn-primary font-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#addMenuModal">
                    <i class="#"></i> + Tambah Menu Baru
                </button>
            </div>
        </div>
    </div>

    <!-- Alert Success Flash Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible show fade mb-4 shadow-sm">
            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Quick Stats Cards -->
    <div class="row">
        <div class="col-6 col-lg-3">
            <div class="card shadow-sm">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="bi bi-journal-richtext fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Total Menu</h6>
                            <h6 class="font-extrabold mb-0">{{ $totalMenu ?? $menus->count() }} Item</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="card shadow-sm">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="bi bi-check-circle-fill fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Tersedia (Ready)</h6>
                            <h6 class="font-extrabold mb-0">{{ $readyMenu ?? $menus->where('status', 'tersedia')->count() }} Menu</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="card shadow-sm">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="bi bi-x-circle-fill fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Stok Habis</h6>
                            <h6 class="font-extrabold mb-0">{{ $soldOutMenu ?? $menus->where('status', 'habis')->count() }} Menu</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="card shadow-sm">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon purple">
                                <i class="bi bi-tags-fill fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Kategori</h6>
                            <h6 class="font-extrabold mb-0">{{ $totalCategory ?? $menus->pluck('kategori')->unique()->count() }} Kategori</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter & Search Section -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row g-3 align-items-center justify-content-between">
                        <div class="col-12 col-md-8">
                            <div class="btn-group flex-wrap" id="menuFilterGroup">
                                <button class="btn btn-primary filter-btn active" data-category="all">Semua Menu</button>
                                <button class="btn btn-outline-primary filter-btn" data-category="Makanan Utama">Makanan Utama</button>
                                <button class="btn btn-outline-primary filter-btn" data-category="Minuman Dingin">Minuman Dingin</button>
                                <button class="btn btn-outline-primary filter-btn" data-category="Minuman Panas">Minuman Panas</button>
                                <button class="btn btn-outline-primary filter-btn" data-category="Dessert">Dessert</button>
                                <button class="btn btn-outline-primary filter-btn" data-category="Snack">Snack</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-search"></i></span>
                                <input type="text" id="menuSearchInput" class="form-control" placeholder="Cari nama menu makanan/minuman...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grid Menu Master (Database Connected) -->
    <div class="row g-3" id="menuGrid">

        @forelse ($menus as $menu)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 menu-card-item" data-category="{{ $menu->kategori }}" data-name="{{ strtolower($menu->nama) }}">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="{{ $menu->gambar ? asset($menu->gambar) : 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=500&auto=format&fit=crop&q=60' }}" alt="{{ $menu->nama }}" style="height: 160px; object-fit: cover;">
                        <div class="card-body d-flex flex-column p-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-light-primary text-primary extra-small">{{ $menu->kategori }}</span>
                                @if ($menu->status == 'tersedia')
                                    <span class="badge bg-success extra-small">🟢 Tersedia</span>
                                @else
                                    <span class="badge bg-danger extra-small">🔴 Habis</span>
                                @endif
                            </div>
                            <h5 class="card-title font-bold text-dark mb-1 fs-6">{{ $menu->nama }}</h5>
                            <p class="card-text text-muted extra-small mb-3 flex-grow-1">
                                {{ Str::limit($menu->deskripsi ?? 'Hidangan lezat racikan spesial Nusantara Restaurant.', 80) }}
                            </p>
                            <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                                <div>
                                    <h6 class="font-extrabold text-primary mb-0">Rp {{ number_format($menu->harga, 0, ',', '.') }}</h6>
                                    @if ($menu->modal_hpp)
                                        <small class="text-muted extra-small">HPP: Rp {{ number_format($menu->modal_hpp, 0, ',', '.') }}</small>
                                    @endif
                                </div>
                                <div class="d-inline-flex gap-1">
                                    <!-- Toggle Status Button -->
                                    <form action="{{ route('menu.status', $menu->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm btn-outline-secondary py-1 px-2" title="Ubah Status Ready/Habis">
                                            <i class="bi bi-arrow-repeat"></i>
                                        </button>
                                    </form>

                                    <!-- Delete Menu Button -->
                                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini dari database?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger py-1 px-2" title="Hapus Menu">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="card shadow-sm text-center py-5">
                    <div class="card-body">
                        <i class="bi bi-journal-x fs-1 text-muted opacity-50 mb-3 d-block"></i>
                        <h5 class="font-bold text-dark mb-1">Belum Ada Menu di Database</h5>
                        <p class="text-muted small mb-3">Silakan tambahkan menu makanan atau minuman baru dengan mengklik tombol di bawah.</p>
                        <button type="button" class="btn btn-primary font-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#addMenuModal">
                            <i class="#"></i> + Tambah Menu Pertama
                        </button>
                    </div>
                </div>
            </div>
        @endforelse

    </div>
</div>

<!-- Modal Popup Tambah Menu Makanan / Minuman (Embedded langsung di file Menulist) -->
<div class="modal fade" id="addMenuModal" tabindex="-1" aria-labelledby="addMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow">

            <!-- Modal Header -->
            <div class="modal-header bg-primary text-white py-3">
                <div class="d-flex align-items-center gap-2">
                    <i class="#"></i>
                    <div>
                        <h5 class="modal-title font-bold text-white mb-0" id="addMenuModalLabel">Tambah Menu Restoran Baru</h5>
                        <small class="opacity-75" style="font-size: 0.78rem;">Lengkapi formulir di bawah untuk menambahkan makanan/minuman ke database menu</small>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Form -->
            <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data" id="formAddMenu">
                @csrf
                <div class="modal-body p-4">
                    <div class="row g-3">

                        <!-- Nama Menu -->
                        <div class="col-12 col-md-8">
                            <label for="menuName" class="form-label font-bold text-dark small">Nama Menu <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="menuName" name="nama" placeholder="Contoh: Nasi Goreng Wagyu Special" required>
                        </div>

                        <!-- Kategori -->
                        <div class="col-12 col-md-4">
                            <label for="menuCategory" class="form-label font-bold text-dark small">Kategori <span class="text-danger">*</span></label>
                            <select class="form-select" id="menuCategory" name="kategori" required>
                                <option value="" disabled selected>-- Pilih Kategori --</option>
                                <option value="Makanan Utama">Makanan Utama</option>
                                <option value="Minuman Dingin">Minuman Dingin</option>
                                <option value="Minuman Panas">Minuman Panas</option>
                                <option value="Dessert">Dessert / Penutup</option>
                                <option value="Snack">Snack / Camilan</option>
                                <option value="Paket Combo">Paket Combo</option>
                            </select>
                        </div>

                        <!-- Harga Jual -->
                        <div class="col-12 col-md-6">
                            <label for="menuPrice" class="form-label font-bold text-dark small">Harga Jual (Rp) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-light font-semibold text-muted">Rp</span>
                                <input type="number" class="form-control" id="menuPrice" name="harga" placeholder="35000" min="0" required>
                            </div>
                        </div>

                        <!-- Modal / HPP -->
                        <div class="col-12 col-md-6">
                            <label for="menuHpp" class="form-label font-bold text-dark small">Modal HPP (Rp)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light font-semibold text-muted">Rp</span>
                                <input type="number" class="form-control" id="menuHpp" name="modal_hpp" placeholder="18000" min="0">
                            </div>
                        </div>

                        <!-- Estimasi Waktu Masak -->
                        <div class="col-12 col-md-6">
                            <label for="cookTime" class="form-label font-bold text-dark small">Estimasi Pembuatan (Menit)</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="cookTime" name="estimasi_menit" placeholder="15" min="1">
                                <span class="input-group-text bg-light text-muted">Menit</span>
                            </div>
                        </div>

                        <!-- Status Ketersediaan -->
                        <div class="col-12 col-md-6">
                            <label for="menuStatus" class="form-label font-bold text-dark small">Status Ketersediaan <span class="text-danger">*</span></label>
                            <select class="form-select" id="menuStatus" name="status" required>
                                <option value="tersedia" selected>🟢 Tersedia (Ready Stock)</option>
                                <option value="habis">🔴 Habis (Sold Out)</option>
                            </select>
                        </div>

                        <!-- Deskripsi Menu -->
                        <div class="col-12">
                            <label for="menuDescription" class="form-label font-bold text-dark small">Deskripsi & Catatan Resep</label>
                            <textarea class="form-control" id="menuDescription" name="deskripsi" rows="3" placeholder="Jelaskan bahan utama, tingkat kepedasan, atau rasa khas menu ini..."></textarea>
                        </div>

                        <!-- Upload Foto Menu & Preview -->
                        <div class="col-12">
                            <label for="menuImage" class="form-label font-bold text-dark small">Foto Menu (JPG/PNG/WEBP)</label>
                            <input type="file" class="form-control" id="menuImage" name="gambar" accept="image/*" onchange="previewMenuImage(this)">

                            <!-- Container Preview Gambar -->
                            <div id="imagePreviewContainer" class="mt-3 d-none text-center p-3 bg-light rounded border border-dashed">
                                <p class="small text-muted mb-2">Preview Foto Menu:</p>
                                <img id="menuImagePreview" src="#" alt="Preview Foto Menu" class="img-thumbnail shadow-sm" style="max-height: 180px; object-fit: cover;">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer bg-light px-4 py-3">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="reset" class="btn btn-light border" onclick="resetImagePreview()">Reset</button>
                    <button type="submit" class="btn btn-primary px-4 font-bold">
                        <i class="bi bi-check-lg me-1"></i> Simpan Menu Ke Database
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("menuSearchInput");
        const filterBtns = document.querySelectorAll(".filter-btn");
        const items = document.querySelectorAll(".menu-card-item");
        let activeCat = "all";

        function filterMenu() {
            const q = searchInput ? searchInput.value.toLowerCase().trim() : '';
            items.forEach(item => {
                const cat = item.getAttribute("data-category");
                const name = item.getAttribute("data-name");
                const matchCat = (activeCat === "all" || cat === activeCat);
                const matchSearch = name.includes(q);
                if (matchCat && matchSearch) {
                    item.style.display = "";
                } else {
                    item.style.display = "none";
                }
            });
        }

        filterBtns.forEach(btn => {
            btn.addEventListener("click", function () {
                filterBtns.forEach(b => {
                    b.classList.remove("btn-primary", "active");
                    b.classList.add("btn-outline-primary");
                });
                this.classList.remove("btn-outline-primary");
                this.classList.add("btn-primary", "active");
                activeCat = this.getAttribute("data-category");
                filterMenu();
            });
        });

        if (searchInput) {
            searchInput.addEventListener("input", filterMenu);
        }
    });

    // Vanilla JS Preview Upload Gambar
    function previewMenuImage(input) {
        const previewContainer = document.getElementById('imagePreviewContainer');
        const previewImage = document.getElementById('menuImagePreview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.classList.remove('d-none');
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            resetImagePreview();
        }
    }

    function resetImagePreview() {
        const previewContainer = document.getElementById('imagePreviewContainer');
        const previewImage = document.getElementById('menuImagePreview');
        previewImage.src = '#';
        previewContainer.classList.add('d-none');
    }
</script>
@endpush
