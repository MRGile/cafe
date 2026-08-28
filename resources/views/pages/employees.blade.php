@extends('layouts.app')

@section('title', 'Karyawan Aktif & Presensi - RestoNusantara Admin')

@section('content')

<!-- Header Title -->
<div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between mb-4 gap-3">
    <div>
        <h3 class="fw-bold text-dark mb-1">Cek Karyawan Aktif & Presensi Staff</h3>
        <p class="text-muted mb-0 small">Pantau status kehadiran karyawan yang sedang bertugas (on shift), jadwal kerja, dan riwayat presensi.</p>
    </div>

    <div>
        <button type="button" class="btn btn-dark shadow-sm fw-semibold d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#addStaffModal">
            <i class="bi bi-person-plus-fill fs-5"></i>
            <span>Tambah Karyawan Baru</span>
        </button>
    </div>
</div>

<!-- Stats Counter Widgets -->
<div class="row g-3 mb-4">
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-3 d-flex align-items-center gap-3">
                <div class="bg-success bg-opacity-10 text-success p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                    <i class="bi bi-person-check-fill fs-4"></i>
                </div>
                <div>
                    <span class="text-muted extra-small fw-semibold text-uppercase">Sedang On Shift</span>
                    <h4 class="fw-bold text-dark mb-0">8 Staff</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-3 d-flex align-items-center gap-3">
                <div class="bg-warning bg-opacity-10 text-warning p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                    <i class="bi bi-cup-straw fs-4"></i>
                </div>
                <div>
                    <span class="text-muted extra-small fw-semibold text-uppercase">Sedang Istirahat</span>
                    <h4 class="fw-bold text-dark mb-0">1 Staff</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-3 d-flex align-items-center gap-3">
                <div class="bg-secondary bg-opacity-10 text-secondary p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                    <i class="bi bi-person-x-fill fs-4"></i>
                </div>
                <div>
                    <span class="text-muted extra-small fw-semibold text-uppercase">Libur / Off Duty</span>
                    <h4 class="fw-bold text-dark mb-0">3 Staff</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-3 d-flex align-items-center gap-3">
                <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                    <i class="bi bi-people-fill fs-4"></i>
                </div>
                <div>
                    <span class="text-muted extra-small fw-semibold text-uppercase">Total Seluruh Staff</span>
                    <h4 class="fw-bold text-dark mb-0">12 Staff</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Table Card: Daftar Karyawan -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-white border-0 py-3 d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between gap-2">
        <h6 class="fw-bold mb-0 text-dark">
            <i class="bi bi-list-stars text-primary me-2"></i>Daftar Seluruh Karyawan & Status Kehadiran Shift Siang
        </h6>
        
        <div class="d-flex align-items-center gap-2">
            <div class="input-group input-group-sm" style="width: 240px;">
                <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
                <input type="text" id="searchStaffInput" class="form-control bg-light border-start-0" placeholder="Cari nama staff...">
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0" id="staffTable">
            <thead class="table-light">
                <tr>
                    <th class="ps-4">Karyawan</th>
                    <th>Kontak / Email</th>
                    <th>Jabatan</th>
                    <th>Shift Kerja</th>
                    <th>Jam Masuk (Clock-In)</th>
                    <th>Status Kehadiran</th>
                    <th class="text-end pe-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Staff 1 -->
                <tr>
                    <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar-circle bg-danger text-white">R</div>
                            <div>
                                <div class="fw-bold text-dark staff-name">Rian Hidayat</div>
                                <small class="text-muted">ID: EMP-001</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="small fw-semibold text-dark"><i class="bi bi-whatsapp text-success me-1"></i>0812-3456-7891</div>
                        <small class="text-muted">rian.chef@resto.com</small>
                    </td>
                    <td><span class="badge bg-dark px-2.5 py-1.5">Head Chef</span></td>
                    <td>Shift Siang (15:00 - 23:00)</td>
                    <td>14:48 WIB</td>
                    <td>
                        <span class="badge bg-success-subtle text-success border border-success border-opacity-25 px-2.5 py-1.5">
                            <span class="pulse-indicator me-1"></span> Active On Duty
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-secondary" title="Hubungi WhatsApp"><i class="bi bi-chat-dots"></i></button>
                            <button class="btn btn-outline-primary" title="Edit Data"><i class="bi bi-pencil"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Staff 2 -->
                <tr>
                    <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar-circle bg-primary text-white">S</div>
                            <div>
                                <div class="fw-bold text-dark staff-name">Siti Rahma</div>
                                <small class="text-muted">ID: EMP-002</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="small fw-semibold text-dark"><i class="bi bi-whatsapp text-success me-1"></i>0813-9876-5432</div>
                        <small class="text-muted">siti.kasir@resto.com</small>
                    </td>
                    <td><span class="badge bg-primary px-2.5 py-1.5">Kasir Utama</span></td>
                    <td>Shift Siang (15:00 - 23:00)</td>
                    <td>14:55 WIB</td>
                    <td>
                        <span class="badge bg-success-subtle text-success border border-success border-opacity-25 px-2.5 py-1.5">
                            <span class="pulse-indicator me-1"></span> Active On Duty
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-secondary" title="Hubungi WhatsApp"><i class="bi bi-chat-dots"></i></button>
                            <button class="btn btn-outline-primary" title="Edit Data"><i class="bi bi-pencil"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Staff 3 -->
                <tr>
                    <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar-circle bg-warning text-dark">B</div>
                            <div>
                                <div class="fw-bold text-dark staff-name">Bambang Susilo</div>
                                <small class="text-muted">ID: EMP-003</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="small fw-semibold text-dark"><i class="bi bi-whatsapp text-success me-1"></i>0857-1122-3344</div>
                        <small class="text-muted">bambang.barista@resto.com</small>
                    </td>
                    <td><span class="badge bg-info text-dark px-2.5 py-1.5">Barista</span></td>
                    <td>Shift Siang (15:00 - 23:00)</td>
                    <td>15:02 WIB</td>
                    <td>
                        <span class="badge bg-warning-subtle text-warning-emphasis border border-warning px-2.5 py-1.5">
                            <i class="bi bi-cup-straw me-1"></i> Istirahat (Break)
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-secondary" title="Hubungi WhatsApp"><i class="bi bi-chat-dots"></i></button>
                            <button class="btn btn-outline-primary" title="Edit Data"><i class="bi bi-pencil"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Staff 4 -->
                <tr>
                    <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar-circle bg-success text-white">D</div>
                            <div>
                                <div class="fw-bold text-dark staff-name">Dewa Pratama</div>
                                <small class="text-muted">ID: EMP-004</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="small fw-semibold text-dark"><i class="bi bi-whatsapp text-success me-1"></i>0819-4455-6677</div>
                        <small class="text-muted">dewa.waiter@resto.com</small>
                    </td>
                    <td><span class="badge bg-secondary px-2.5 py-1.5">Head Waiter</span></td>
                    <td>Shift Siang (15:00 - 23:00)</td>
                    <td>14:50 WIB</td>
                    <td>
                        <span class="badge bg-success-subtle text-success border border-success border-opacity-25 px-2.5 py-1.5">
                            <span class="pulse-indicator me-1"></span> Active On Duty
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-secondary" title="Hubungi WhatsApp"><i class="bi bi-chat-dots"></i></button>
                            <button class="btn btn-outline-primary" title="Edit Data"><i class="bi bi-pencil"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Staff 5 -->
                <tr>
                    <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar-circle bg-secondary text-white">A</div>
                            <div>
                                <div class="fw-bold text-dark staff-name">Andi Wijaya</div>
                                <small class="text-muted">ID: EMP-005</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="small fw-semibold text-dark"><i class="bi bi-whatsapp text-success me-1"></i>0811-2233-4455</div>
                        <small class="text-muted">andi.chef@resto.com</small>
                    </td>
                    <td><span class="badge bg-dark px-2.5 py-1.5">Sous Chef</span></td>
                    <td>Shift Pagi (07:00 - 15:00)</td>
                    <td>- (Sudah Clock-Out)</td>
                    <td>
                        <span class="badge bg-secondary-subtle text-secondary border px-2.5 py-1.5">
                            <i class="bi bi-moon-stars me-1"></i> Off Duty (Libur)
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-secondary" title="Hubungi WhatsApp"><i class="bi bi-chat-dots"></i></button>
                            <button class="btn btn-outline-primary" title="Edit Data"><i class="bi bi-pencil"></i></button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

<!-- Reusable Add Staff Modal Popup -->
@include('components.modals.add-staff-modal')

@endsection

@push('scripts')
<script>
    // Live Search Filter Karyawan (Vanilla JS)
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("searchStaffInput");
        const rows = document.querySelectorAll("#staffTable tbody tr");

        searchInput.addEventListener("input", function () {
            const query = this.value.toLowerCase().trim();
            rows.forEach(row => {
                const nameText = row.querySelector(".staff-name").textContent.toLowerCase();
                if (nameText.includes(query)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    });
</script>
@endpush
