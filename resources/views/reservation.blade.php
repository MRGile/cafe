@extends('layouts.app')
@section('title', 'Manajemen Reservasi Meja - Nusantara Restaurant')

@section('content')

<div class="page-heading">
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h3 class="mb-1 font-bold text-dark">Manajemen Reservasi Meja</h3>
                <p class="text-subtitle text-muted mb-0">Kelola booking tempat pelanggan dan tentukan penugasan meja restoran.</p>
            </div>
            <div class="col-12 col-md-6 text-md-end mt-3 mt-md-0">
                <button type="button" class="btn btn-primary font-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#addReservationModal">
                    <i class="#"></i> + Buat Reservasi Baru
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

    <!-- Stats Counter -->
    <div class="row">
        <div class="col-6 col-lg-3">
            <div class="card shadow-sm">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="bi bi-calendar-check-fill fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Total Reservasi</h6>
                            <h6 class="font-extrabold mb-0">{{ $totalReservations ?? $reservations->count() }} Booking</h6>
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
                            <h6 class="text-muted font-semibold">Terkonfirmasi</h6>
                            <h6 class="font-extrabold mb-0">{{ $approvedReservations ?? $reservations->where('status', 'approved')->count() }} Meja</h6>
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
                                <i class="bi bi-hourglass-split fs-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Pending Konfirmasi</h6>
                            <h6 class="font-extrabold mb-0">{{ $pendingReservations ?? $reservations->where('status', 'pending')->count() }} Booking</h6>
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
                            <h6 class="text-muted font-semibold">Total Tamu / Pax</h6>
                            <h6 class="font-extrabold mb-0">{{ $totalGuests ?? $reservations->sum('jumlah_orang') }} Orang</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Layout Status Okupansi Meja Restoran (Meja 01 - 12) -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                    <h5 class="card-title font-bold text-dark mb-0 fs-6">
                        <i class="bi bi-grid-3x3-gap-fill text-primary me-2"></i>Denah Status Okupansi Meja
                    </h5>
                    <div class="d-flex gap-3 small">
                        <span><span class="badge bg-success p-1 rounded-circle"> </span> Ready Kosong</span>
                        <span><span class="badge bg-danger p-1 rounded-circle"> </span> Terisi / Terbooking</span>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        @for ($i = 1; $i <= 12; $i++)
                            @php
                                $tableName = 'Meja ' . str_pad($i, 2, '0', STR_PAD_LEFT);
                                $occupied = $reservations->where('status', 'approved')->where('no_meja', $tableName)->first();
                            @endphp
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="p-3 text-center rounded border {{ $occupied ? 'border-danger bg-light-danger' : 'border-success bg-light-success' }}">
                                    <i class="bi bi-display fs-2 {{ $occupied ? 'text-danger' : 'text-success' }}"></i>
                                    <h6 class="font-bold mb-0 mt-1 text-dark">{{ $tableName }}</h6>
                                    @if ($occupied)
                                        <span class="badge bg-danger extra-small" title="{{ $occupied->nama }} ({{ $occupied->jumlah_orang }} Pax)">
                                            Terbooking ({{ $occupied->waktu }})
                                        </span>
                                    @else
                                        <span class="badge bg-success extra-small">Ready Kosong</span>
                                    @endif
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Table List Reservasi Pelanggan -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                    <h5 class="card-title font-bold text-dark mb-0 fs-6">
                        <i class="bi bi-list-check text-primary me-2"></i>Daftar Booking Pelanggan & Penugasan Meja
                    </h5>
                    <div class="input-group input-group-sm" style="width: 250px;">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" id="resSearchInput" class="form-control" placeholder="Cari nama pemesan...">
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0" id="resTable">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">ID Booking</th>
                                    <th>Nama Pelanggan</th>
                                    <th>No. WhatsApp</th>
                                    <th>Jadwal & Jam</th>
                                    <th>Jumlah Pax</th>
                                    <th>Nomor Meja</th>
                                    <th>Status</th>
                                    <th class="text-end pe-4">Aksi Penugasan Admin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($reservations as $reservation)
                                    <tr>
                                        <td class="ps-4">
                                            <span class="font-bold text-primary">
                                                #RSV-{{ str_pad($reservation->id, 3, '0', STR_PAD_LEFT) }}
                                            </span>
                                        </td>

                                        <td>
                                            <span class="font-bold text-dark res-name">{{ $reservation->nama }}</span>
                                            @if($reservation->email)
                                                <small class="text-muted d-block extra-small">{{ $reservation->email }}</small>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $reservation->no_hp) }}" target="_blank" class="fw-bold text-dark text-decoration-none">
                                                <i class="bi bi-whatsapp text-success me-1"></i>{{ $reservation->no_hp }}
                                            </a>
                                        </td>

                                        <td>
                                            <span class="fw-semibold text-dark">{{ \Carbon\Carbon::parse($reservation->tanggal)->format('d M Y') }}</span>
                                            <small class="text-muted d-block font-bold">Jam: {{ $reservation->waktu }} WIB</small>
                                        </td>

                                        <td>
                                            <span class="badge bg-light-primary text-primary font-bold px-2.5 py-1.5">
                                                <i class="bi bi-people-fill me-1"></i>{{ $reservation->jumlah_orang }} Pax
                                            </span>
                                        </td>

                                        <td>
                                            @if ($reservation->no_meja)
                                                <span class="badge bg-primary font-bold fs-6">
                                                    <i class="bi bi-pin-map-fill me-1"></i>{{ $reservation->no_meja }}
                                                </span>
                                            @else
                                                <span class="badge bg-warning text-dark font-semibold">
                                                    ⚠️ Belum Ditentukan
                                                </span>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($reservation->status === 'pending')
                                                <span class="badge bg-warning text-dark">⏳ Menunggu Meja</span>
                                            @elseif ($reservation->status === 'approved')
                                                <span class="badge bg-success">🟢 Approved</span>
                                            @elseif ($reservation->status === 'reject')
                                                <span class="badge bg-danger">🔴 Ditolak</span>
                                            @endif
                                        </td>

                                        <td class="text-end pe-4">
                                            @if ($reservation->status === 'pending')
                                                <!-- Form Admin Menentukan Meja & Approve -->
                                                <form action="{{ route('reservation.approve', $reservation->id) }}" method="POST" class="d-inline-flex gap-1 align-items-center">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="no_meja" class="form-select form-select-sm" style="width: 110px;" required>
                                                        <option value="" disabled selected>Pilih Meja</option>
                                                        @for ($m = 1; $m <= 12; $m++)
                                                            @php $mName = 'Meja ' . str_pad($m, 2, '0', STR_PAD_LEFT); @endphp
                                                            <option value="{{ $mName }}">{{ $mName }}</option>
                                                        @endfor
                                                    </select>
                                                    <button type="submit" class="btn btn-sm btn-success font-bold" title="ACC & Berikan Meja">
                                                        <i class="bi bi-check-lg"></i> ACC
                                                    </button>
                                                </form>

                                                <!-- Form Reject -->
                                                <form action="{{ route('reservation.reject', $reservation->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Tolak Reservasi">
                                                        <i class="bi bi-x-lg"></i>
                                                    </button>
                                                </form>

                                            @else
                                                <div class="d-inline-flex gap-1">
                                                    <!-- Delete Reservation -->
                                                    <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data reservasi ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-light-danger" title="Hapus Data Reservasi">
                                                            <i class="bi bi-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            @endif
                                        </td>

                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-5 text-muted">
                                            <i class="bi bi-calendar-x fs-2 d-block mb-2 text-secondary opacity-50"></i>
                                            Belum ada data reservasi dari pelanggan.
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

<!-- Modal Popup Buat Reservasi Baru (Admin View) -->
<div class="modal fade" id="addReservationModal" tabindex="-1" aria-labelledby="addReservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow">

            <div class="modal-header bg-primary text-white py-3">
                <div class="d-flex align-items-center gap-2">
                    <i class="#"></i>
                    <div>
                        <h5 class="modal-title font-bold text-white mb-0" id="addReservationModalLabel">Buat Reservasi Meja Baru</h5>
                        <small class="opacity-75" style="font-size: 0.78rem;">Input booking pelanggan langsung dari sistem kasir/admin</small>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('reservation.store') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label font-bold text-dark small">Nama Pemesan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" placeholder="Contoh: Bapak Hendra" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label font-bold text-dark small">No. WhatsApp <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" name="no_hp" placeholder="081234567890" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label font-bold text-dark small">Tanggal Reservasi <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="tanggal" value="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label font-bold text-dark small">Jam Reservasi <span class="text-danger">*</span></label>
                            <input type="time" class="form-control" name="waktu" value="19:00" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label font-bold text-dark small">Jumlah Tamu (Pax) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="jumlah_orang" placeholder="4" min="1" max="30" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label font-bold text-dark small">Penugasan Nomor Meja</label>
                            <select class="form-select" name="no_meja">
                                <option value="" selected>-- Pilih Nanti / Otomatis --</option>
                                @for ($m = 1; $m <= 12; $m++)
                                    @php $mName = 'Meja ' . str_pad($m, 2, '0', STR_PAD_LEFT); @endphp
                                    <option value="{{ $mName }}">{{ $mName }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label font-bold text-dark small">Catatan Khusus / Acara</label>
                            <textarea class="form-control" name="catatan" rows="3" placeholder="Contoh: Minta meja dekat jendela, acara ulang tahun..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer bg-light px-4 py-3">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary px-4 font-bold">
                        <i class="bi bi-check-lg me-1"></i> Simpan Reservasi
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
        const searchInput = document.getElementById("resSearchInput");
        const rows = document.querySelectorAll("#resTable tbody tr");

        if (searchInput) {
            searchInput.addEventListener("input", function () {
                const q = this.value.toLowerCase().trim();
                rows.forEach(row => {
                    const nameEl = row.querySelector(".res-name");
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
