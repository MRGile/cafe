@extends('layouts.app')

@section('title', 'Dashboard Main - RestoNusantara Admin')

@section('content')

<!-- Page Title & Header Actions -->
<div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between mb-4 gap-3">
    <div>
        <h3 class="fw-bold text-dark mb-1">Dashboard Restoran</h3>
        <p class="text-muted mb-0 small">Ringkasan performa penjualan, aktivitas dapur, dan karyawan aktif hari ini.</p>
    </div>
    
    <div class="d-flex align-items-center gap-2">
        <button class="btn btn-outline-secondary btn-sm bg-white shadow-sm d-flex align-items-center gap-2">
            <i class="bi bi-calendar3"></i>
            <span>Hari Ini, {{ date('d M Y') }}</span>
        </button>
        <button class="btn btn-primary btn-sm shadow-sm d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#addMenuModal">
            <i class="bi bi-plus-circle"></i>
            <span>Tambah Menu</span>
        </button>
    </div>
</div>

<!-- 4 Key Metric Cards -->
<div class="row g-3 mb-4">
    
    <!-- Card 1: Total Pendapatan -->
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-3 p-md-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="text-muted small fw-semibold">Omset Hari Ini</span>
                    <div class="bg-primary bg-opacity-10 text-primary p-2.5 rounded-3 d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
                        <i class="bi bi-wallet2 fs-5"></i>
                    </div>
                </div>
                <h4 class="fw-bold text-dark mb-2">Rp 4.850.000</h4>
                <div class="d-flex align-items-center gap-1 extra-small">
                    <span class="badge bg-success-subtle text-success fw-semibold"><i class="bi bi-arrow-up-right me-1"></i>+14.2%</span>
                    <span class="text-muted">dibanding kemarin</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2: Total Pesanan -->
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-3 p-md-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="text-muted small fw-semibold">Total Pesanan</span>
                    <div class="bg-success bg-opacity-10 text-success p-2.5 rounded-3 d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
                        <i class="bi bi-cart-check fs-5"></i>
                    </div>
                </div>
                <h4 class="fw-bold text-dark mb-2">128 Pesanan</h4>
                <div class="d-flex align-items-center gap-1 extra-small">
                    <span class="badge bg-success-subtle text-success fw-semibold"><i class="bi bi-arrow-up-right me-1"></i>+8.5%</span>
                    <span class="text-muted">18 pesanan aktif</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 3: Karyawan Aktif -->
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-3 p-md-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="text-muted small fw-semibold">Karyawan Aktif</span>
                    <div class="bg-warning bg-opacity-10 text-warning p-2.5 rounded-3 d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
                        <i class="bi bi-people fs-5"></i>
                    </div>
                </div>
                <h4 class="fw-bold text-dark mb-2">8 / 12 Staff</h4>
                <div class="d-flex align-items-center gap-2 extra-small">
                    <span class="pulse-indicator"></span>
                    <span class="fw-semibold text-success">8 On Shift Siang</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 4: Status Meja -->
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-3 p-md-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="text-muted small fw-semibold">Okupansi Meja</span>
                    <div class="bg-info bg-opacity-10 text-info p-2.5 rounded-3 d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
                        <i class="bi bi-grid-3x3-gap fs-5"></i>
                    </div>
                </div>
                <h4 class="fw-bold text-dark mb-2">14 / 20 Meja</h4>
                <div class="d-flex align-items-center gap-1 extra-small">
                    <span class="badge bg-danger-subtle text-danger fw-semibold">70% Terisi</span>
                    <span class="text-muted">6 Kosong</span>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Charts & Popular Menu Section -->
<div class="row g-3 mb-4">
    
    <!-- Penjualan Chart -->
    <div class="col-12 col-lg-8">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-white border-0 py-3 d-flex align-items-center justify-content-between">
                <h6 class="fw-bold mb-0 text-dark"><i class="bi bi-bar-chart-line text-primary me-2"></i>Grafik Penjualan Mingguan</h6>
                <select class="form-select form-select-sm w-auto">
                    <option>7 Hari Terakhir</option>
                    <option>Bulan Ini</option>
                </select>
            </div>
            <div class="card-body">
                <canvas id="salesChart" style="max-height: 270px; width: 100%;"></canvas>
            </div>
        </div>
    </div>

    <!-- Top Selling Menu -->
    <div class="col-12 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-white border-0 py-3">
                <h6 class="fw-bold mb-0 text-dark"><i class="bi bi-fire text-danger me-2"></i>Menu Terlaris Hari Ini</h6>
            </div>
            <div class="card-body">
                
                <div class="mb-3">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        <span class="fw-semibold small">Nasi Goreng Wagyu</span>
                        <span class="badge bg-primary">42 porsi</span>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        <span class="fw-semibold small">Es Teh Manis Jumbo</span>
                        <span class="badge bg-success">68 gelas</span>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 95%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        <span class="fw-semibold small">Ayam Goreng Lengkuas</span>
                        <span class="badge bg-warning text-dark">31 porsi</span>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        <span class="fw-semibold small">Kopi Susu Gula Aren</span>
                        <span class="badge bg-info">50 gelas</span>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 78%"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- Section: Status Karyawan Aktif Saat Ini -->
<div class="row g-3 mb-4">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 py-3 d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="fw-bold mb-0 text-dark">
                        <i class="bi bi-person-check-fill text-success me-2"></i>Daftar Karyawan Aktif On Shift (Hari Ini)
                    </h6>
                    <small class="text-muted">Pantau kehadiran staff dapur, barista, kasir, dan waiter yang bertugas saat ini.</small>
                </div>
                <button class="btn btn-dark btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#addStaffModal">
                    <i class="bi bi-person-plus me-1"></i> Tambah Karyawan
                </button>
            </div>
            
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">Nama Karyawan</th>
                            <th>Jabatan</th>
                            <th>Shift Kerja</th>
                            <th>Jam Masuk</th>
                            <th>Status Kehadiran</th>
                            <th class="text-end pe-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-danger text-white">R</div>
                                    <div>
                                        <div class="fw-bold text-dark">Rian Hidayat</div>
                                        <small class="text-muted">0812-3456-7891</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-dark">Head Chef</span></td>
                            <td>Shift Siang (15:00 - 23:00)</td>
                            <td>14:48 WIB</td>
                            <td>
                                <span class="badge bg-success-subtle text-success border border-success border-opacity-25 px-2 py-1">
                                    <span class="pulse-indicator me-1"></span> Active On Duty
                                </span>
                            </td>
                            <td class="text-end pe-4">
                                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-telephone"></i></button>
                                <button class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-primary text-white">S</div>
                                    <div>
                                        <div class="fw-bold text-dark">Siti Rahma</div>
                                        <small class="text-muted">0813-9876-5432</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">Kasir</span></td>
                            <td>Shift Siang (15:00 - 23:00)</td>
                            <td>14:55 WIB</td>
                            <td>
                                <span class="badge bg-success-subtle text-success border border-success border-opacity-25 px-2 py-1">
                                    <span class="pulse-indicator me-1"></span> Active On Duty
                                </span>
                            </td>
                            <td class="text-end pe-4">
                                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-telephone"></i></button>
                                <button class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-warning text-dark">B</div>
                                    <div>
                                        <div class="fw-bold text-dark">Bambang Susilo</div>
                                        <small class="text-muted">0857-1122-3344</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-info text-dark">Barista</span></td>
                            <td>Shift Siang (15:00 - 23:00)</td>
                            <td>15:02 WIB</td>
                            <td>
                                <span class="badge bg-warning-subtle text-warning-emphasis border border-warning px-2 py-1">
                                    <i class="bi bi-cup-straw me-1"></i> Break (Istirahat)
                                </span>
                            </td>
                            <td class="text-end pe-4">
                                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-telephone"></i></button>
                                <button class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-success text-white">D</div>
                                    <div>
                                        <div class="fw-bold text-dark">Dewa Pratama</div>
                                        <small class="text-muted">0819-4455-6677</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-secondary">Waiter</span></td>
                            <td>Shift Siang (15:00 - 23:00)</td>
                            <td>14:50 WIB</td>
                            <td>
                                <span class="badge bg-success-subtle text-success border border-success border-opacity-25 px-2 py-1">
                                    <span class="pulse-indicator me-1"></span> Active On Duty
                                </span>
                            </td>
                            <td class="text-end pe-4">
                                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-telephone"></i></button>
                                <button class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="card-footer bg-white text-center py-2">
                <a href="{{ url('/employees') }}" class="text-decoration-none small fw-semibold text-primary">Lihat Seluruh Data Karyawan (12 Staff) <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Popups Reusable -->
@include('components.modals.add-menu-modal')
@include('components.modals.add-staff-modal')

@endsection

@push('scripts')
<script>
    // Init Sales Chart via Chart.js
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('salesChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                datasets: [{
                    label: 'Penjualan (Rp)',
                    data: [3200000, 2900000, 3800000, 4100000, 5200000, 6800000, 4850000],
                    borderColor: '#0d6efd',
                    backgroundColor: 'rgba(13, 110, 253, 0.1)',
                    fill: true,
                    tension: 0.35,
                    borderWidth: 3,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + (value/1000) + 'k';
                            }
                        }
                    }
                }
            }
        });
    });
</script>
@endpush
