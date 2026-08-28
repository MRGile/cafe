<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Menampilkan daftar reservasi dan statistik di Dashboard Admin
     */
    public function index()
    {
        $reservations = Reservation::latest()->get();
        $totalReservations = $reservations->count();
        $approvedReservations = $reservations->where('status', 'approved')->count();
        $pendingReservations = $reservations->where('status', 'pending')->count();
        $totalGuests = $reservations->sum('jumlah_orang');

        return view('reservation', compact(
            'reservations',
            'totalReservations',
            'approvedReservations',
            'pendingReservations',
            'totalGuests'
        ));
    }

    /**
     * Menyimpan reservasi baru dari Pelanggan atau Admin
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'tanggal' => 'required',
            'waktu' => 'required',
            'jumlah_orang' => 'required|integer|min:1',
            'occasion' => 'nullable|string',
            'no_meja' => 'nullable|string',
            'catatan' => 'nullable|string',
        ]);

        $noMeja = $request->input('no_meja', $request->input('table_number'));
        $catatan = $request->input('catatan', $request->input('message'));
        $tanggal = $request->input('tanggal', $request->input('reservation_date'));
        $waktu = $request->input('waktu', $request->input('reservation_time'));
        $guests = $request->input('jumlah_orang', $request->input('guests', 1));

        Reservation::create([
            'nama' => $validated['nama'],
            'no_hp' => $validated['no_hp'],
            'email' => $request->email,
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'jumlah_orang' => $guests,
            'occasion' => $request->occasion ?? 'Casual Dining',
            'no_meja' => $noMeja,
            'catatan' => $catatan,
            'status' => $noMeja ? 'approved' : 'pending',
        ]);

        // Kalau dari form ADMIN
        if ($request->routeIs('reservation.store')) {
            return redirect()->route('reservation')
                ->with('success', 'Reservasi berhasil ditambahkan!');
        }

        // Kalau dari form PELANGGAN
        return redirect()->route('thankbook')
            ->with('success', 'Reservasi Anda telah diterima! Admin kami akan segera menentukan meja.');
    }

    /**
     * Admin Menyetujui Reservasi & Menentukan Nomor Meja Pelanggan
     */
    public function approve(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $request->validate([
            'no_meja' => 'required|string|max:50',
        ]);

        $reservation->update([
            'no_meja' => $request->no_meja,
            'status' => 'approved',
        ]);

        return redirect()->back()->with('success', 'Reservasi berhasil disetujui & nomor meja ' . $request->no_meja . ' telah ditugaskan!');
    }

    /**
     * Admin Menolak / Membatalkan Reservasi
     */
    public function reject($id)
    {
        $reservation = Reservation::findOrFail($id);

        $reservation->update([
            'status' => 'reject',
        ]);

        return redirect()->back()->with('success', 'Reservasi telah ditolak!');
    }

    /**
     * Update Data Reservasi oleh Admin
     */
    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'tanggal' => 'required',
            'waktu' => 'required',
            'jumlah_orang' => 'required|integer|min:1',
            'no_meja' => 'nullable|string',
            'status' => 'required|in:pending,approved,reject',
        ]);

        $reservation->update($validated);

        return redirect()->route('reservation')->with('success', 'Data reservasi berhasil diperbarui!');
    }

    /**
     * Menghapus Data Reservasi dari Database
     */
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->back()->with('success', 'Data reservasi berhasil dihapus!');
    }
}
