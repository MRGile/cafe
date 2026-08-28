@extends('layouts.app')
@section('title', 'Nusantara Restaurant - Dashboard Admin')

@section('content')

<!-- Header Section -->
<div class="page-heading d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
    <div>
        <h3 class="mb-1 font-bold text-dark">Dashboard Restoran</h3>
        <p class="text-subtitle text-muted mb-0">Selamat datang kembali! Ringkasan aktivitas dan performa restoran hari ini.</p>
    </div>
    {{-- <div class="d-flex align-items-center gap-2">
        <button class="btn btn-primary font-bold shadow-sm d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#addMenuModal">
            <i class="bi bi-plus-circle-fill"></i>
            <span>+ Tambah Menu Baru</span>
        </button>
        <button class="btn btn-dark font-bold shadow-sm d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#addStaffModal">
            <i class="bi bi-person-plus-fill"></i>
            <span>+ Tambah Karyawan</span>
        </button>
    </div> --}}
</div>

<div class="page-content">
    <section class="row">

        <!-- Left Main Content Column (9 Cols) -->
        <div class="col-12 col-lg-9">

            <!-- 4 Stats Cards -->
            <div class="row g-3 mb-4">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card shadow-sm h-100 mb-0">
                        <div class="card-body p-3">
                            <div class="row align-items-center">
                                <div class="col-4 text-center">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldWallet"></i>
                                    </div>
                                </div>
                                <div class="col-8 ps-0">
                                    <h6 class="text-muted font-semibold mb-1 small">Omset Hari Ini</h6>
                                    <h6 class="font-extrabold text-dark mb-0">Rp 12.850K</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card shadow-sm h-100 mb-0">
                        <div class="card-body p-3">
                            <div class="row align-items-center">
                                <div class="col-4 text-center">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldBuy"></i>
                                    </div>
                                </div>
                                <div class="col-8 ps-0">
                                    <h6 class="text-muted font-semibold mb-1 small">Total Pesanan</h6>
                                    <h6 class="font-extrabold text-dark mb-0">128 Order</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card shadow-sm h-100 mb-0">
                        <div class="card-body p-3">
                            <div class="row align-items-center">
                                <div class="col-4 text-center">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldUser"></i>
                                    </div>
                                </div>
                                <div class="col-8 ps-0">
                                    <h6 class="text-muted font-semibold mb-1 small">Karyawan Aktif</h6>
                                    <h6 class="font-extrabold text-dark mb-0">{{ $activeStaff ?? $karyawans->where('status', 'active')->count() }} Staff</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card shadow-sm h-100 mb-0">
                        <div class="card-body p-3">
                            <div class="row align-items-center">
                                <div class="col-4 text-center">
                                    <div class="stats-icon purple">
                                        <i class="bi bi-shop text-white"></i>
                                    </div>
                                </div>
                                <div class="col-8 ps-0">
                                    <h6 class="text-muted font-semibold mb-1 small">Status Meja</h6>
                                    <h6 class="font-extrabold mb-0">{{ $approvedReservations ?? $reservations->where('status', 'approved')->count() }} Meja</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Table: Karyawan Aktif On Shift -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card shadow-sm mb-0">
                        <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                            <h4 class="card-title font-bold text-dark mb-0 fs-6">
                                <i class="bi bi-person-badge text-success me-2"></i>Karyawan Aktif On Shift (Hari Ini)
                            </h4>
                            {{-- <button class="btn btn-sm btn-outline-primary font-bold" data-bs-toggle="modal" data-bs-target="#addStaffModal">
                                <i class="bi bi-plus-lg me-1"></i> Tambah Karyawan
                            </button> --}}
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4">Nama Karyawan</th>
                                            <th>No HP</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            {{-- <th class="text-center pe-4">Aksi</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($karyawans as $karyawans)
                                        <tr>
                                            <td class="ps-4">
                                                {{$karyawans->nama}}
                                            </td>
                                            <td>
                                                {{$karyawans->no_hp}}
                                            </td>
                                            <td>
                                                {{$karyawans->jabatan}}
                                            </td>
                                            <td>
                                                @if ($karyawans->status == 'active')
                                                <span class="badge bg-success">
                                                    Active
                                                </span>

                                                @else
                                                    <span class="badge bg-secondary">
                                                     Off
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                        @empty

                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top Selling Menu Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm mb-0">
                        <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                            <h4 class="card-title font-bold text-dark mb-0 fs-6">
                                <i class="bi bi-fire text-danger me-2"></i>Menu Terlaris Hari Ini
                            </h4>
                            {{-- <button class="btn btn-sm btn-primary font-bold" data-bs-toggle="modal" data-bs-target="#addMenuModal">
                                <i class="bi bi-plus-lg me-1"></i> Tambah Menu
                            </button> --}}
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4">Nama Menu</th>
                                            <th>Kategori</th>
                                            <th>Harga Jual</th>
                                            <th>Terjual</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-4"><p class="font-bold text-dark mb-0">Nasi Goreng Wagyu Special</p></td>
                                            <td><span class="badge bg-light-primary text-primary">Makanan Utama</span></td>
                                            <td><p class="font-bold text-dark mb-0">Rp 45.000</p></td>
                                            <td><p class="font-bold text-dark mb-0">42 Porsi</p></td>
                                            <td><span class="badge bg-success">🟢 Tersedia</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4"><p class="font-bold text-dark mb-0">Es Teh Manis Jumbo</p></td>
                                            <td><span class="badge bg-light-info text-info">Minuman Dingin</span></td>
                                            <td><p class="font-bold text-dark mb-0">Rp 10.000</p></td>
                                            <td><p class="font-bold text-dark mb-0">68 Gelas</p></td>
                                            <td><span class="badge bg-success">🟢 Tersedia</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4"><p class="font-bold text-dark mb-0">Kopi Tubruk Toraja</p></td>
                                            <td><span class="badge bg-light-warning text-warning">Minuman Panas</span></td>
                                            <td><p class="font-bold text-dark mb-0">Rp 18.000</p></td>
                                            <td><p class="font-bold text-dark mb-0">30 Gelas</p></td>
                                            <td><span class="badge bg-danger">🔴 Habis</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Column: Clean Aligned Profile & Tim Admin (3 Cols) -->
        <div class="col-12 col-lg-3 mt-4 mt-lg-0">

            <!-- Profile Card -->
            <div class="card shadow-sm mb-4">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar avatar-xl bg-primary text-white font-bold d-flex align-items-center justify-content-center rounded-circle shadow-sm" style="width: 52px; height: 52px; font-size: 1.2rem;">
                            LM
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="font-bold text-dark mb-0 text-truncate">Muhamad Lizam M.</h6>
                            <small class="text-muted d-block text-truncate">@lizam_mhtr</small>
                            <span class="badge bg-light-primary text-primary mt-1 font-semibold" style="font-size: 0.72rem;">Head Manager</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tim Administrasi Card (Clean & Flush) -->
            <div class="card shadow-sm">
                <div class="card-header bg-white border-bottom py-3 px-3">
                    <h5 class="card-title font-bold text-dark mb-0 fs-6">
                        <i class="bi bi-shield-lock-fill text-primary me-2"></i>Tim Administrasi
                    </h5>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item p-3 border-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar bg-info text-white font-bold d-flex align-items-center justify-content-center rounded-circle" style="width: 38px; height: 38px; font-size: 0.85rem;">
                                    MG
                                </div>
                                <div>
                                    <h6 class="font-bold text-dark mb-0 small">M. Gustian Alvaro</h6>
                                    <small class="text-muted extra-small">@clesss_</small>
                                </div>
                            </div>
                            <span class="badge bg-light-success text-success font-semibold" style="font-size: 0.68rem;">Admin</span>
                        </li>

                        <li class="list-group-item p-3 border-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar bg-warning text-dark font-bold d-flex align-items-center justify-content-center rounded-circle" style="width: 38px; height: 38px; font-size: 0.85rem;">
                                    ML
                                </div>
                                <div>
                                    <h6 class="font-bold text-dark mb-0 small">M. Lukmansyah</h6>
                                    <small class="text-muted extra-small">@manszz1k</small>
                                </div>
                            </div>
                            <span class="badge bg-light-success text-success font-semibold" style="font-size: 0.68rem;">Admin</span>
                        </li>

                        <li class="list-group-item p-3 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar bg-secondary text-white font-bold d-flex align-items-center justify-content-center rounded-circle" style="width: 38px; height: 38px; font-size: 0.85rem;">
                                    MA
                                </div>
                                <div>
                                    <h6 class="font-bold text-dark mb-0 small">Milan Abizar A.R.</h6>
                                    <small class="text-muted extra-small">@jarrst12</small>
                                </div>
                            </div>
                            <span class="badge bg-light-success text-success font-semibold" style="font-size: 0.68rem;">Admin</span>
                        </li>

                    </ul>
                </div>
                <div class="card-footer bg-light p-3 text-center border-top">
                    <a href="{{ route('Adminlist') }}" class="btn btn-outline-primary btn-sm font-bold w-100">
                        <i class="bi bi-people me-1"></i> Lihat Semua Admin
                    </a>
                </div>
            </div>

        </div>

    </section>
</div>

<!-- Modal Popups Reusable -->
{{-- @include('components.modals.add-menu-modal')
@include('components.modals.add-staff-modal') --}}

@endsection
