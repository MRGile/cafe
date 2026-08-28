@extends('layouts.app')
@section('title', 'Cek Karyawan Aktif - Nusantara Restaurant')

@section('content')

<div class="page-heading">
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h3 class="mb-1">Cek Karyawan Aktif & Presensi</h3>
                <p class="text-subtitle text-muted mb-0">Pantau kehadiran staff dapur, kasir, barista, dan waiter yang aktif bertugas.</p>
            </div>
            <div class="col-12 col-md-6 text-md-end mt-3 mt-md-0">
                <button type="button" class="btn btn-primary font-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#addKaryawan">
                    <i class="#"></i> + Tambah Karyawan
                </button>
            </div>
        </div>
    </div>

    <!-- Alert Success -->
    {{-- @if(session('success'))
        <div class="alert alert-success alert-dismissible show fade mb-4 shadow-sm">
            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}

    <!-- Metric Counter Cards -->
    <div class="row">
        <div class="col-6 col-lg-3">
            <div class="card shadow-sm">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="bi bi-person-check-fill fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Aktif On Shift</h6>
                            <h6 class="font-extrabold mb-0">{{ $activeStaff ?? $karyawans->where('status', 'active')->count() }} Staff</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-6 col-lg-3">
            <div class="card shadow-sm">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon yellow">
                                <i class="bi bi-cup-straw fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Istirahat (Break)</h6>
                            <h6 class="font-extrabold mb-0">0 Staff</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="col-6 col-lg-3">
            <div class="card shadow-sm">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="bi bi-person-fill fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Off Duty / Libur</h6>
                            <h6 class="font-extrabold mb-0">{{ $offStaff ?? $karyawans->where('status', 'off')->count() }} Staff</h6>
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
                                <i class="bi bi-people-fill fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Total Staff</h6>
                            <h6 class="font-extrabold mb-0">{{ $totalStaff ?? $karyawans->count() }} Staff</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Staff List Database -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center bg-white border-bottom py-3">
                    <h4 class="card-title font-bold text-dark mb-0 fs-6">
                        <i class="bi bi-list-stars text-primary me-2"></i>Daftar Karyawan Terdaftar
                    </h4>
                    <div class="input-group input-group-sm" style="width: 250px;">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" id="staffSearchInput" class="form-control" placeholder="Cari nama staff...">
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0" id="staffTable">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">No</th>
                                    <th>Nama Karyawan</th>
                                    <th>Email</th>
                                    <th>No. WhatsApp</th>
                                    <th>Jabatan / Role</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Status Kehadiran</th>
                                    <th class="text-end pe-4">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($karyawans as $index => $karyawan)
                                    <tr>
                                        <td class="ps-4 text-muted font-semibold">{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar avatar-md bg-primary text-white rounded-circle font-bold d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                                                    {{ strtoupper(substr($karyawan->nama, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <p class="font-bold text-dark mb-0 staff-name">{{ $karyawan->nama }}</p>
                                                    <small class="text-muted">ID: EMP-{{ str_pad($karyawan->id, 3, '0', STR_PAD_LEFT) }}</small>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <a> {{ $karyawan->email }}</a>


                                        </td>

                                        <td>
                                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $karyawan->no_hp) }}" target="_blank" class="fw-bold text-dark text-decoration-none">
                                                <i class="#"></i>{{ $karyawan->no_hp }}
                                            </a>
                                        </td>
                                        <td>
                                            <span class="badge bg-dark px-2.5 py-1.5">{{ $karyawan->jabatan ?? 'Staff' }}</span>
                                        </td>
                                        <td>
                                            <small class="text-muted font-semibold">{{ $karyawan->created_at ? $karyawan->created_at->format('d M Y') : '-' }}</small>
                                        </td>
                                        <td>
                                            @if ($karyawan->status == 'active')
                                                <span class="badge bg-success">
                                                    🟢 Active On Duty
                                                </span>
                                            @else
                                                <span class="badge bg-secondary">
                                                    🔴 Off Duty
                                                </span>
                                            @endif
                                        </td>
                                        <td class="text-end pe-4">
                                            <div class="d-inline-flex gap-1">
                                                <!-- Toggle Status -->
                                                <form action="{{ route('karyawan.status', $karyawan->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-sm btn-light-primary" title="Ubah Status Active/Off">
                                                        <i class="bi bi-arrow-repeat"></i> Status
                                                    </button>
                                                </form>

                                                <!-- Delete Karyawan -->
                                                <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data karyawan ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-light-danger" title="Hapus Karyawan">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-5 text-muted">
                                            <i class="bi bi-people fs-2 d-block mb-2 text-secondary opacity-50"></i>
                                            Belum ada data karyawan di database. Silakan klik tombol <strong>+ Tambah Karyawan</strong> di atas.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Popup Tambah Karyawan -->
<div class="modal fade" id="addKaryawan" tabindex="-1" aria-labelledby="addKaryawanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">

            <div class="modal-header bg-primary text-white py-3">
                <div class="d-flex align-items-center gap-2">
                    <i class=" fs-5"></i>
                    <div>
                        <h5 class="modal-title font-bold text-white mb-0" id="addKaryawanLabel">Tambah Karyawan Baru</h5>
                        <small class="opacity-75" style="font-size: 0.78rem;">Masukan data karyawan ke database</small>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('karyawan.store') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label font-bold text-dark small">
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="nama" placeholder="Contoh: Rian Hidayat" required>
                        </div>


                        <div class="col-12 col-md-6">
                            <label class="form-label font-bold text-dark small">
                                No. WhatsApp <span class="text-danger">*</span>
                            </label>
                            <input type="tel" class="form-control" name="no_hp" placeholder="081234567890" required>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label font-bold text-dark small">
                                Email <span class="text-danger">*</span>
                            </label>
                            <input type="tel" class="form-control" name="email" placeholder="contoh@gmail.com" required>
                        </div>

                        {{-- <div class="col-12 col-md-6">
                            <label class="form-label font-bold text-dark small">
                                Password <span class="text-danger">*</span>
                            </label>
                            <input type="tel" class="form-control" name="password" placeholder="-" required>
                        </div> --}}

                        <div class="col-12 col-md-6">
                            <label class="form-label font-bold text-dark small">
                                Jabatan / Role <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" name="jabatan" required>
                                <option value="" disabled selected>-- Pilih Jabatan --</option>
                                <option value="Head Chef">Head Chef</option>
                                <option value="Sous Chef">Sous Chef</option>
                                <option value="Kasir Utama">Kasir Utama</option>
                                <option value="Barista">Barista</option>
                                <option value="Head Waiter">Head Waiter</option>
                                <option value="Waiter">Waiter</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label font-bold text-dark small">Status Awal</label>
                            <select class="form-select" name="status">
                                <option value="active" selected>🟢 Active On Duty</option>
                                <option value="off">🔴 Off Duty (Libur)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer bg-light px-4 py-3">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary px-4 font-bold">
                        <i class="bi bi-check-lg me-1"></i> Simpan Karyawan
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
        const searchInput = document.getElementById("staffSearchInput");
        const rows = document.querySelectorAll("#staffTable tbody tr");

        if (searchInput) {
            searchInput.addEventListener("input", function () {
                const q = this.value.toLowerCase().trim();
                rows.forEach(row => {
                    const nameEl = row.querySelector(".staff-name");
                    if (nameEl) {
                        const name = nameEl.textContent.toLowerCase();
                        if (name.includes(q)) {
                            row.style.display = "";
                        } else {
                            row.style.display = "none";
                        }
                    }
                });
            });
        }
    });
</script>
@endpush
