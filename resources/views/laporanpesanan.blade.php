@extends('layouts.app')
@section('title', 'Laporan Penjualan Produk - Nusantara Restaurant')

@section('content')

<div class="page-heading">
    <!-- Header Title & Print Action -->
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h3 class="mb-1 font-bold text-dark">Laporan Penjualan Produk</h3>
                <p class="text-subtitle text-muted mb-0">Ringkasan performa penjualan makanan/minuman, jumlah pesanan, dan omset restoran.</p>
            </div>
            <div class="col-12 col-md-6 text-md-end mt-3 mt-md-0 d-flex gap-2 justify-content-md-end">
                <button type="button" onclick="window.print()" class="btn btn-outline-secondary font-bold shadow-sm">
                    <i class="bi bi-printer me-1"></i> Cetak Laporan (PDF)
                </button>
                <button type="button" class="btn btn-success font-bold shadow-sm">
                    <i class="bi bi-file-earmark-excel me-1"></i> Export Excel
                </button>
            </div>
        </div>
    </div>

    <!-- Quick Metric Cards -->
    <div class="row">
        <div class="col-6 col-lg-3">
            <div class="card shadow-sm">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="bi bi-cash-stack fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Total Omset Penjualan</h6>
                            <h6 class="font-extrabold mb-0 text-primary">Rp 18.650.000</h6>
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
                                <i class="bi bi-bag-check-fill fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Total Produk Terjual</h6>
                            <h6 class="font-extrabold mb-0 text-success">552 Porsi / Item</h6>
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
                                <i class="bi bi-receipt fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Transaksi Selesai</h6>
                            <h6 class="font-extrabold mb-0">148 Pesanan</h6>
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
                            <div class="stats-icon yellow">
                                <i class="bi bi-cash-stack fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Rata-rata Order</h6>
                            <h6 class="font-extrabold mb-0">Rp 126.000 / Trx</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Rentang Waktu & Live Search Bar -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row g-3 align-items-center justify-content-between">
                        <div class="col-12 col-md-7">
                            <div class="btn-group flex-wrap" id="periodFilterGroup">
                                <button class="btn btn-primary period-btn active" data-period="today">Hari Ini</button>
                                <button class="btn btn-outline-primary period-btn" data-period="week">Minggu Ini</button>
                                <button class="btn btn-outline-primary period-btn" data-period="month">Bulan Ini</button>
                                <button class="btn btn-outline-primary period-btn" data-period="year">Tahun Ini</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-search"></i></span>
                                <input type="text" id="reportSearchInput" class="form-control" placeholder="Cari nama produk atau no invoice...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel 1: Laporan Rincian Produk Terjual (Products Sales Summary) -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                    <h5 class="card-title font-bold text-dark mb-0 fs-6">
                        <i class="bi bi-trophy-fill text-warning me-2"></i>Laporan Produk Terjual (Volume & Omset)
                    </h5>
                    <span class="badge bg-light-primary text-primary font-semibold">8 Produk Teratas</span>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0" id="productReportTable">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">Rank</th>
                                    <th>Nama Produk / Menu</th>
                                    <th>Kategori</th>
                                    <th>Harga Satuan</th>
                                    <th class="text-center">Jumlah Pesanan (Qty)</th>
                                    <th>Total Omset Penjualan</th>
                                    <th>Status Performa</th>
                                    <th class="pe-4 text-center">Kontribusi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="ps-4 font-bold text-primary">#1</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?w=100&auto=format&fit=crop&q=60" class="rounded shadow-sm" alt="Nasi Goreng Wagyu" style="width: 42px; height: 42px; object-fit: cover;">
                                            <div>
                                                <h6 class="font-bold text-dark mb-0 product-title">Nasi Goreng Wagyu Special</h6>
                                                <small class="text-muted extra-small">SKU: MENU-001</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-primary text-primary">Makanan Utama</span></td>
                                    <td class="font-semibold text-dark">Rp 45.000</td>
                                    <td class="text-center font-extrabold text-dark fs-6">98 Porsi</td>
                                    <td class="font-extrabold text-primary">Rp 4.410.000</td>
                                    <td><span class="badge bg-danger">🔥 Best Seller</span></td>
                                    <td class="pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress flex-grow-1" style="height: 6px;">
                                                <div class="progress-bar bg-primary" style="width: 23.6%;"></div>
                                            </div>
                                            <small class="fw-bold extra-small">23.6%</small>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-4 font-bold text-primary">#2</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=100&auto=format&fit=crop&q=60" class="rounded shadow-sm" alt="Es Teh Manis Jumbo" style="width: 42px; height: 42px; object-fit: cover;">
                                            <div>
                                                <h6 class="font-bold text-dark mb-0 product-title">Es Teh Manis Jumbo</h6>
                                                <small class="text-muted extra-small">SKU: MENU-002</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-info text-info">Minuman Dingin</span></td>
                                    <td class="font-semibold text-dark">Rp 10.000</td>
                                    <td class="text-center font-extrabold text-dark fs-6">145 Porsi</td>
                                    <td class="font-extrabold text-primary">Rp 1.450.000</td>
                                    <td><span class="badge bg-danger">🔥 Best Seller</span></td>
                                    <td class="pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress flex-grow-1" style="height: 6px;">
                                                <div class="progress-bar bg-info" style="width: 7.8%;"></div>
                                            </div>
                                            <small class="fw-bold extra-small">7.8%</small>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-4 font-bold text-primary">#3</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=100&auto=format&fit=crop&q=60" class="rounded shadow-sm" alt="Ayam Goreng Lengkuas" style="width: 42px; height: 42px; object-fit: cover;">
                                            <div>
                                                <h6 class="font-bold text-dark mb-0 product-title">Ayam Goreng Lengkuas</h6>
                                                <small class="text-muted extra-small">SKU: MENU-003</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-primary text-primary">Makanan Utama</span></td>
                                    <td class="font-semibold text-dark">Rp 32.000</td>
                                    <td class="text-center font-extrabold text-dark fs-6">76 Porsi</td>
                                    <td class="font-extrabold text-primary">Rp 2.432.000</td>
                                    <td><span class="badge bg-warning text-dark">⭐ Favorit</span></td>
                                    <td class="pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress flex-grow-1" style="height: 6px;">
                                                <div class="progress-bar bg-warning" style="width: 13.0%;"></div>
                                            </div>
                                            <small class="fw-bold extra-small">13.0%</small>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-4 font-bold text-primary">#4</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=100&auto=format&fit=crop&q=60" class="rounded shadow-sm" alt="Paket Combo Bebek Bakar" style="width: 42px; height: 42px; object-fit: cover;">
                                            <div>
                                                <h6 class="font-bold text-dark mb-0 product-title">Paket Combo Bebek Bakar</h6>
                                                <small class="text-muted extra-small">SKU: MENU-008</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-success text-success">Paket Combo</span></td>
                                    <td class="font-semibold text-dark">Rp 55.000</td>
                                    <td class="text-center font-extrabold text-dark fs-6">34 Porsi</td>
                                    <td class="font-extrabold text-primary">Rp 1.870.000</td>
                                    <td><span class="badge bg-warning text-dark">⭐ Favorit</span></td>
                                    <td class="pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress flex-grow-1" style="height: 6px;">
                                                <div class="progress-bar bg-success" style="width: 10.0%;"></div>
                                            </div>
                                            <small class="fw-bold extra-small">10.0%</small>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-4 font-bold text-secondary">#5</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?w=100&auto=format&fit=crop&q=60" class="rounded shadow-sm" alt="Es Cendol Durian" style="width: 42px; height: 42px; object-fit: cover;">
                                            <div>
                                                <h6 class="font-bold text-dark mb-0 product-title">Es Cendol Durian</h6>
                                                <small class="text-muted extra-small">SKU: MENU-005</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-secondary text-secondary">Dessert</span></td>
                                    <td class="font-semibold text-dark">Rp 25.000</td>
                                    <td class="text-center font-extrabold text-dark fs-6">62 Porsi</td>
                                    <td class="font-extrabold text-primary">Rp 1.550.000</td>
                                    <td><span class="badge bg-warning text-dark">⭐ Favorit</span></td>
                                    <td class="pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress flex-grow-1" style="height: 6px;">
                                                <div class="progress-bar bg-secondary" style="width: 8.3%;"></div>
                                            </div>
                                            <small class="fw-bold extra-small">8.3%</small>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-4 font-bold text-secondary">#6</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=100&auto=format&fit=crop&q=60" class="rounded shadow-sm" alt="Sate Ayam Madura" style="width: 42px; height: 42px; object-fit: cover;">
                                            <div>
                                                <h6 class="font-bold text-dark mb-0 product-title">Sate Ayam Madura (10 Tusuk)</h6>
                                                <small class="text-muted extra-small">SKU: MENU-006</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-primary text-primary">Makanan Utama</span></td>
                                    <td class="font-semibold text-dark">Rp 35.000</td>
                                    <td class="text-center font-extrabold text-dark fs-6">38 Porsi</td>
                                    <td class="font-extrabold text-primary">Rp 1.330.000</td>
                                    <td><span class="badge bg-light-dark text-dark">👍 Reguler</span></td>
                                    <td class="pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress flex-grow-1" style="height: 6px;">
                                                <div class="progress-bar bg-primary" style="width: 7.1%;"></div>
                                            </div>
                                            <small class="fw-bold extra-small">7.1%</small>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-4 font-bold text-secondary">#7</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=100&auto=format&fit=crop&q=60" class="rounded shadow-sm" alt="Kopi Tubruk Toraja" style="width: 42px; height: 42px; object-fit: cover;">
                                            <div>
                                                <h6 class="font-bold text-dark mb-0 product-title">Kopi Tubruk Toraja</h6>
                                                <small class="text-muted extra-small">SKU: MENU-004</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-danger text-danger">Minuman Panas</span></td>
                                    <td class="font-semibold text-dark">Rp 18.000</td>
                                    <td class="text-center font-extrabold text-dark fs-6">44 Porsi</td>
                                    <td class="font-extrabold text-primary">Rp 792.000</td>
                                    <td><span class="badge bg-light-dark text-dark">👍 Reguler</span></td>
                                    <td class="pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress flex-grow-1" style="height: 6px;">
                                                <div class="progress-bar bg-danger" style="width: 4.2%;"></div>
                                            </div>
                                            <small class="fw-bold extra-small">4.2%</small>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-4 font-bold text-secondary">#8</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=100&auto=format&fit=crop&q=60" class="rounded shadow-sm" alt="Pisang Goreng Keju" style="width: 42px; height: 42px; object-fit: cover;">
                                            <div>
                                                <h6 class="font-bold text-dark mb-0 product-title">Pisang Goreng Keju</h6>
                                                <small class="text-muted extra-small">SKU: MENU-007</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-warning text-warning">Snack / Camilan</span></td>
                                    <td class="font-semibold text-dark">Rp 15.000</td>
                                    <td class="text-center font-extrabold text-dark fs-6">55 Porsi</td>
                                    <td class="font-extrabold text-primary">Rp 825.000</td>
                                    <td><span class="badge bg-light-dark text-dark">👍 Reguler</span></td>
                                    <td class="pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress flex-grow-1" style="height: 6px;">
                                                <div class="progress-bar bg-warning" style="width: 4.4%;"></div>
                                            </div>
                                            <small class="fw-bold extra-small">4.4%</small>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel 2: Riwayat Transaksi Penjualan Terbaru (Recent Transactions Dummy) -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                    <h5 class="card-title font-bold text-dark mb-0 fs-6">
                        <i class="bi bi-clock-history text-primary me-2"></i>Riwayat Transaksi Penjualan Terakhir
                    </h5>
                    <span class="badge bg-success">Live Cashier Feed</span>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">No. Invoice</th>
                                    <th>Waktu Transaksi</th>
                                    <th>Meja / Tipe</th>
                                    <th>Detail Rincian Produk</th>
                                    <th>Metode Bayar</th>
                                    <th>Total Pembayaran</th>
                                    <th class="text-end pe-4">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <span class="font-bold text-primary">#INV-20260826-001</span>
                                    </td>
                                    <td>
                                        <span class="fw-bold text-dark">Hari Ini, 19:42 WIB</span>
                                    </td>
                                    <td><span class="badge bg-dark">Meja 01 (Dine-in)</span></td>
                                    <td>
                                        <div class="fw-semibold text-dark small">2x Nasi Goreng Wagyu, 2x Es Teh Jumbo</div>
                                        <small class="text-muted extra-small">Kasir: Siti Rahma</small>
                                    </td>
                                    <td><span class="badge bg-light-primary text-primary font-semibold"><i class="bi bi-qr-code-scan me-1"></i> QRIS BNI</span></td>
                                    <td class="font-extrabold text-dark">Rp 110.000</td>
                                    <td class="text-end pe-4"><span class="badge bg-success">🟢 Lunas</span></td>
                                </tr>

                                <tr>
                                    <td class="ps-4">
                                        <span class="font-bold text-primary">#INV-20260826-002</span>
                                    </td>
                                    <td>
                                        <span class="fw-bold text-dark">Hari Ini, 19:35 WIB</span>
                                    </td>
                                    <td><span class="badge bg-dark">Meja 04 (Dine-in)</span></td>
                                    <td>
                                        <div class="fw-semibold text-dark small">3x Ayam Goreng Lengkuas, 3x Es Cendol Durian</div>
                                        <small class="text-muted extra-small">Kasir: Siti Rahma</small>
                                    </td>
                                    <td><span class="badge bg-light-success text-success font-semibold"><i class="bi bi-cash me-1"></i> Tunai (Cash)</span></td>
                                    <td class="font-extrabold text-dark">Rp 171.000</td>
                                    <td class="text-end pe-4"><span class="badge bg-success">🟢 Lunas</span></td>
                                </tr>

                                <tr>
                                    <td class="ps-4">
                                        <span class="font-bold text-primary">#INV-20260826-003</span>
                                    </td>
                                    <td>
                                        <span class="fw-bold text-dark">Hari Ini, 19:20 WIB</span>
                                    </td>
                                    <td><span class="badge bg-info text-dark">Takeaway (Bawa Pulang)</span></td>
                                    <td>
                                        <div class="fw-semibold text-dark small">1x Paket Combo Bebek Bakar, 1x Kopi Toraja</div>
                                        <small class="text-muted extra-small">Kasir: Siti Rahma</small>
                                    </td>
                                    <td><span class="badge bg-light-danger text-danger font-semibold"><i class="bi bi-credit-card me-1"></i> Debit Mandiri</span></td>
                                    <td class="font-extrabold text-dark">Rp 73.000</td>
                                    <td class="text-end pe-4"><span class="badge bg-success">🟢 Lunas</span></td>
                                </tr>

                                <tr>
                                    <td class="ps-4">
                                        <span class="font-bold text-primary">#INV-20260826-004</span>
                                    </td>
                                    <td>
                                        <span class="fw-bold text-dark">Hari Ini, 19:05 WIB</span>
                                    </td>
                                    <td><span class="badge bg-dark">Meja 02 (Dine-in)</span></td>
                                    <td>
                                        <div class="fw-semibold text-dark small">4x Sate Ayam Madura, 4x Es Teh Jumbo</div>
                                        <small class="text-muted extra-small">Kasir: Rian Hidayat</small>
                                    </td>
                                    <td><span class="badge bg-light-primary text-primary font-semibold"><i class="bi bi-qr-code-scan me-1"></i> QRIS BCA</span></td>
                                    <td class="font-extrabold text-dark">Rp 180.000</td>
                                    <td class="text-end pe-4"><span class="badge bg-success">🟢 Lunas</span></td>
                                </tr>

                                <tr>
                                    <td class="ps-4">
                                        <span class="font-bold text-primary">#INV-20260826-005</span>
                                    </td>
                                    <td>
                                        <span class="fw-bold text-dark">Hari Ini, 18:48 WIB</span>
                                    </td>
                                    <td><span class="badge bg-dark">Meja 06 (Dine-in)</span></td>
                                    <td>
                                        <div class="fw-semibold text-dark small">2x Pisang Goreng Keju, 2x Kopi Toraja</div>
                                        <small class="text-muted extra-small">Kasir: Rian Hidayat</small>
                                    </td>
                                    <td><span class="badge bg-light-success text-success font-semibold"><i class="bi bi-cash me-1"></i> Tunai (Cash)</span></td>
                                    <td class="font-extrabold text-dark">Rp 66.000</td>
                                    <td class="text-end pe-4"><span class="badge bg-success">🟢 Lunas</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("reportSearchInput");
        const periodBtns = document.querySelectorAll(".period-btn");
        const rows = document.querySelectorAll("#productReportTable tbody tr");

        // Live Search Filter
        if (searchInput) {
            searchInput.addEventListener("input", function () {
                const q = this.value.toLowerCase().trim();
                rows.forEach(row => {
                    const titleEl = row.querySelector(".product-title");
                    if (titleEl) {
                        const title = titleEl.textContent.toLowerCase();
                        if (title.includes(q)) {
                            row.style.display = "";
                        } else {
                            row.style.display = "none";
                        }
                    }
                });
            });
        }

        // Period Filter Toggle
        periodBtns.forEach(btn => {
            btn.addEventListener("click", function () {
                periodBtns.forEach(b => {
                    b.classList.remove("btn-primary", "active");
                    b.classList.add("btn-outline-primary");
                });
                this.classList.remove("btn-outline-primary");
                this.classList.add("btn-primary", "active");
            });
        });
    });
</script>
@endpush
