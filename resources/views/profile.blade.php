@extends('layouts.app')
@section('title', 'Profil Owner - Nusantara Restaurant')

@section('content')

<div class="page-heading">
    <!-- Header Title -->
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h3 class="mb-1 font-bold text-dark">Profil Owner</h3>
                <p class="text-subtitle text-muted mb-0">Informasi ringkas akun dan hak akses pemilik restoran.</p>
            </div>
            {{-- <div class="col-12 col-md-6 text-md-end mt-3 mt-md-0">
                <button class="btn btn-outline-primary font-bold shadow-sm px-3" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                    <i class="bi bi-pencil-square me-1"></i> Edit Informasi
                </button>
            </div> --}}
        </div>
    </div>

    <div class="page-content">
        <!-- Main Card: Ringkasan Owner -->
        <div class="card shadow-sm mb-4">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <!-- Avatar Owner -->
                    <div class="col-12 col-md-auto text-center mb-3 mb-md-0">
                        <div class="position-relative d-inline-block">
                            <img src="{{ asset('assets/images/faces/9.jpg') }}" class="rounded-circle shadow-sm" alt="Owner Avatar" style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #435ebe;">
                            <span class="position-absolute bottom-0 end-0 bg-success border border-white rounded-circle p-1.5" title="Online" style="width: 16px; height: 16px;"></span>
                        </div>
                    </div>

                    <!-- Identitas Utama -->
                    <div class="col-12 col-md text-center text-md-start mb-3 mb-md-0 ps-md-3">
                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start gap-2 mb-1">
                            <h4 class="font-bold text-dark mb-0">Muhamad Lizam Muhtar</h4>
                            <span class="badge bg-light-primary text-primary font-semibold px-2.5 py-1.5 ms-md-1">
                                <i class="bi bi-shield-fill-check me-1"></i> Cafe Owner
                            </span>
                        </div>
                        <p class="text-muted small mb-2">@lizam_mhtr &bull; Head Operations & General Management</p>
                        <p class="text-secondary extra-small mb-0">Memegang hak akses penuh sistem operasional, keuangan, dan seluruh cabang Nusantara Restaurant.</p>
                    </div>

                    <!-- Ringkasan Nilai Cepat -->
                    <div class="col-12 col-md-auto text-center border-start-md ps-md-4 mt-3 mt-md-0">
                        <div class="d-flex justify-content-center gap-4 text-center">
                            <div>
                                <h5 class="font-extrabold text-primary mb-0">20</h5>
                                <small class="text-muted extra-small">Cabang</small>
                            </div>
                            <div class="vr"></div>
                            <div>
                                <h5 class="font-extrabold text-success mb-0">100+</h5>
                                <small class="text-muted extra-small">Staff</small>
                            </div>
                            <div class="vr"></div>
                            <div>
                                <h5 class="font-extrabold text-warning mb-0">4.9</h5>
                                <small class="text-muted extra-small">Rating</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grid 2 Kolom Seimbang -->
        <div class="row g-4">

            <!-- Kartu 1: Detail Kontak & Biodata -->
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm h-100 mb-0">
                    <div class="card-header bg-white border-bottom py-3 px-4">
                        <h6 class="card-title font-bold text-dark mb-0 d-flex align-items-center gap-2">
                            <i class="bi bi-person-lines-fill text-primary fs-5"></i>
                            <span>Detail Kontak & Informasi</span>
                        </h6>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-group list-group-flush">

                            <!-- Email -->
                            <li class="list-group-item px-0 py-2.5 border-bottom d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-light-primary text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block extra-small">Email Utama</small>
                                        <span class="fw-bold text-dark small">lizamganteng602@gmail.com</span>
                                    </div>
                                </div>
                                <span class="badge bg-light-success text-success extra-small">Terverifikasi</span>
                            </li>

                            <!-- No WhatsApp -->
                            <li class="list-group-item px-0 py-2.5 border-bottom d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-light-success text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block extra-small">No. WhatsApp</small>
                                        <span class="fw-bold text-dark small">+62 857-1148-9232</span>
                                    </div>
                                </div>
                                <a href="https://wa.me/6285711489232" target="_blank" class="btn btn-sm btn-light-success px-2 py-1 extra-small">
                                    <i class="bi bi-chat-dots me-1"></i> Chat
                                </a>
                            </li>

                            <!-- Lokasi -->
                            <li class="list-group-item px-0 py-2.5 border-bottom d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-light-danger text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block extra-small">Lokasi Utama</small>
                                        <span class="fw-bold text-dark small">Jakarta, Indonesia</span>
                                    </div>
                                </div>
                                <span class="text-muted extra-small">HQ Resto</span>
                            </li>

                            <!-- Member Since -->
                            <li class="list-group-item px-0 py-2.5 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-light-warning text-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="bi bi-calendar-check-fill"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block extra-small">Terdaftar Sejak</small>
                                        <span class="fw-bold text-dark small">4 Juni 2018</span>
                                    </div>
                                </div>
                                <span class="badge bg-light text-secondary extra-small">5+ Tahun</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Kartu 2: Privilese & Hak Akses System -->
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm h-100 mb-0">
                    <div class="card-header bg-white border-bottom py-3 px-4">
                        <h6 class="card-title font-bold text-dark mb-0 d-flex align-items-center gap-2">
                            <i class="bi bi-shield-lock-fill text-success fs-5"></i>
                            <span>Hak Akses & Otoritas System</span>
                        </h6>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex flex-column gap-3">

                            <div class="p-3 bg-light rounded d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="bi bi-key-fill"></i>
                                    </div>
                                    <div>
                                        <h6 class="font-bold text-dark mb-0 small">Super Admin Access</h6>
                                        <small class="text-muted extra-small">Akses penuh tambah, edit, hapus seluruh data resto</small>
                                    </div>
                                </div>
                                <span class="badge bg-primary">Full Control</span>
                            </div>

                            <div class="p-3 bg-light rounded d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div>
                                        <h6 class="font-bold text-dark mb-0 small">Laporan Keuangan & Omset</h6>
                                        <small class="text-muted extra-small">Otoritas melihat seluruh transaksi & profit laba rugi</small>
                                    </div>
                                </div>
                                <span class="badge bg-success">Aktif</span>
                            </div>

                            <div class="p-3 bg-light rounded d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <div>
                                        <h6 class="font-bold text-dark mb-0 small">Manajemen Staff & Gaji</h6>
                                        <small class="text-muted extra-small">Mengelola shift, presensi, dan data karyawan</small>
                                    </div>
                                </div>
                                <span class="badge bg-info text-dark">Aktif</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal Edit Ringkas (Opsional jika ingin ubah data) -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-primary text-white py-3">
                <h5 class="modal-title font-bold text-white mb-0" id="editProfileModalLabel">
                    <i class="bi bi-pencil-square me-2"></i>Edit Informasi Owner
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form action="#" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label font-bold small">Nama Lengkap</label>
                            <input type="text" class="form-control" value="Muhamad Lizam Muhtar" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label font-bold small">Email</label>
                            <input type="email" class="form-control" value="lizamganteng602@gmail.com" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label font-bold small">No. WhatsApp</label>
                            <input type="tel" class="form-control" value="+62 857-1148-9232" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label font-bold small">Lokasi Utama</label>
                            <input type="text" class="form-control" value="Jakarta, Indonesia">
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light px-4 py-3">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary font-bold px-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
