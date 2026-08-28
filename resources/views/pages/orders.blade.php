@extends('layouts.app')

@section('title', 'Pesanan & Manajemen Meja - RestoNusantara Admin')

@section('content')

<!-- Header Title -->
<div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between mb-4 gap-3">
    <div>
        <h3 class="fw-bold text-dark mb-1">Pesanan & Layout Meja Restoran</h3>
        <p class="text-muted mb-0 small">Pantau denah status okupansi meja dan daftar transaksi pesanan dapur secara real-time.</p>
    </div>

    <div class="d-flex gap-2">
        <button class="btn btn-outline-secondary btn-sm bg-white shadow-sm d-flex align-items-center gap-1">
            <i class="bi bi-arrow-clockwise"></i>
            <span>Refresh Denah</span>
        </button>
        <button class="btn btn-success btn-sm shadow-sm fw-semibold d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#addMenuModal">
            <i class="bi bi-plus-circle"></i>
            <span>Pesanan Baru</span>
        </button>
    </div>
</div>

<!-- Table Occupancy Visual Grid -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-white border-0 py-3 d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between gap-2">
        <h6 class="fw-bold mb-0 text-dark">
            <i class="bi bi-grid-3x3-gap-fill text-primary me-2"></i>Denah Status Meja Restoran (20 Meja)
        </h6>
        
        <!-- Status Legends -->
        <div class="d-flex flex-wrap align-items-center gap-3 extra-small">
            <span class="d-flex align-items-center gap-1"><span class="badge bg-success rounded-circle p-1"> </span> Kosong (Available)</span>
            <span class="d-flex align-items-center gap-1"><span class="badge bg-danger rounded-circle p-1"> </span> Terisi (Occupied)</span>
            <span class="d-flex align-items-center gap-1"><span class="badge bg-warning text-dark rounded-circle p-1"> </span> Reservasi</span>
        </div>
    </div>

    <div class="card-body p-3 p-md-4">
        <div class="row g-3">
            
            <!-- Meja 01 - Terisi -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card border-danger border-2 shadow-sm text-center py-3 bg-danger bg-opacity-10 position-relative">
                    <span class="position-absolute top-0 end-0 m-1 badge bg-danger">Terisi</span>
                    <i class="bi bi-display fs-3 text-danger mb-1"></i>
                    <h6 class="fw-bold mb-0 text-dark">Meja 01</h6>
                    <small class="text-muted extra-small">4 Kursi • 35 mnt</small>
                </div>
            </div>

            <!-- Meja 02 - Kosong -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card border-success border-2 shadow-sm text-center py-3 bg-success bg-opacity-10 position-relative">
                    <span class="position-absolute top-0 end-0 m-1 badge bg-success">Kosong</span>
                    <i class="bi bi-display fs-3 text-success mb-1"></i>
                    <h6 class="fw-bold mb-0 text-dark">Meja 02</h6>
                    <small class="text-muted extra-small">2 Kursi • Ready</small>
                </div>
            </div>

            <!-- Meja 03 - Terisi -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card border-danger border-2 shadow-sm text-center py-3 bg-danger bg-opacity-10 position-relative">
                    <span class="position-absolute top-0 end-0 m-1 badge bg-danger">Terisi</span>
                    <i class="bi bi-display fs-3 text-danger mb-1"></i>
                    <h6 class="fw-bold mb-0 text-dark">Meja 03</h6>
                    <small class="text-muted extra-small">6 Kursi • 12 mnt</small>
                </div>
            </div>

            <!-- Meja 04 - Reservasi -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card border-warning border-2 shadow-sm text-center py-3 bg-warning bg-opacity-10 position-relative">
                    <span class="position-absolute top-0 end-0 m-1 badge bg-warning text-dark">Reservasi</span>
                    <i class="bi bi-display fs-3 text-warning mb-1"></i>
                    <h6 class="fw-bold mb-0 text-dark">Meja 04</h6>
                    <small class="text-muted extra-small">Jam 19.00</small>
                </div>
            </div>

            <!-- Meja 05 - Kosong -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card border-success border-2 shadow-sm text-center py-3 bg-success bg-opacity-10 position-relative">
                    <span class="position-absolute top-0 end-0 m-1 badge bg-success">Kosong</span>
                    <i class="bi bi-display fs-3 text-success mb-1"></i>
                    <h6 class="fw-bold mb-0 text-dark">Meja 05</h6>
                    <small class="text-muted extra-small">4 Kursi • Ready</small>
                </div>
            </div>

            <!-- Meja 06 - Terisi -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card border-danger border-2 shadow-sm text-center py-3 bg-danger bg-opacity-10 position-relative">
                    <span class="position-absolute top-0 end-0 m-1 badge bg-danger">Terisi</span>
                    <i class="bi bi-display fs-3 text-danger mb-1"></i>
                    <h6 class="fw-bold mb-0 text-dark">Meja 06</h6>
                    <small class="text-muted extra-small">8 Kursi • 50 mnt</small>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Active Orders Table -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-white border-0 py-3 d-flex align-items-center justify-content-between">
        <h6 class="fw-bold mb-0 text-dark">
            <i class="bi bi-receipt-cutoff text-success me-2"></i>Daftar Pesanan Dapur Hari Ini (Live Orders)
        </h6>
        <span class="badge bg-primary">5 Pesanan Aktif</span>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th class="ps-4">No. Order</th>
                    <th>Meja / Tipe</th>
                    <th>Detail Pesanan</th>
                    <th>Total Harga</th>
                    <th>Status Dapur</th>
                    <th class="text-end pe-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="ps-4">
                        <span class="fw-bold text-primary">#ORD-8821</span>
                        <div class="extra-small text-muted">15:42 WIB</div>
                    </td>
                    <td><span class="badge bg-dark">Meja 01</span></td>
                    <td>
                        <div class="fw-semibold text-dark small">2x Nasi Goreng Wagyu, 2x Es Teh Jumbo</div>
                        <small class="text-muted">Catatan: Pedas sedang, es dikit</small>
                    </td>
                    <td class="fw-bold text-dark">Rp 110.000</td>
                    <td><span class="badge bg-warning text-dark"><i class="bi bi-fire me-1"></i> Sedang Dimasak</span></td>
                    <td class="text-end pe-4">
                        <button class="btn btn-success btn-sm"><i class="bi bi-check-lg me-1"></i> Siap Saji</button>
                    </td>
                </tr>

                <tr>
                    <td class="ps-4">
                        <span class="fw-bold text-primary">#ORD-8820</span>
                        <div class="extra-small text-muted">15:35 WIB</div>
                    </td>
                    <td><span class="badge bg-dark">Meja 03</span></td>
                    <td>
                        <div class="fw-semibold text-dark small">1x Ayam Goreng Lengkuas, 1x Kopi Toraja</div>
                        <small class="text-muted">Catatan: Tanpa penyedap</small>
                    </td>
                    <td class="fw-bold text-dark">Rp 50.000</td>
                    <td><span class="badge bg-info text-dark"><i class="bi bi-bell me-1"></i> Siap Disajikan</span></td>
                    <td class="text-end pe-4">
                        <button class="btn btn-outline-primary btn-sm"><i class="bi bi-cash-stack me-1"></i> Bayar Kasir</button>
                    </td>
                </tr>

                <tr>
                    <td class="ps-4">
                        <span class="fw-bold text-primary">#ORD-8819</span>
                        <div class="extra-small text-muted">15:10 WIB</div>
                    </td>
                    <td><span class="badge bg-dark">Meja 06</span></td>
                    <td>
                        <div class="fw-semibold text-dark small">4x Nasi Goreng, 4x Es Cendol Durian</div>
                        <small class="text-muted">Catatan: -</small>
                    </td>
                    <td class="fw-bold text-dark">Rp 280.000</td>
                    <td><span class="badge bg-success"><i class="bi bi-check-all me-1"></i> Selesai & Lunas</span></td>
                    <td class="text-end pe-4">
                        <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-printer me-1"></i> Cetak Struk</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@include('components.modals.add-menu-modal')

@endsection
