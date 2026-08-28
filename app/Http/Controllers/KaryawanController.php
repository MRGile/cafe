<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // Menampilkan semua karyawan dan statistik
    public function index()
    {
        $karyawans = Karyawan::latest()->get();
        $totalStaff = $karyawans->count();
        $activeStaff = $karyawans->where('status', 'active')->count();
        $offStaff = $karyawans->where('status', 'off')->count();

        // Jika view employeelist atau karyawan digunakan
        if (view()->exists('karyawan')) {
            return view('employeelist', compact('karyawans', 'totalStaff', 'activeStaff', 'offStaff'));
        }

        return view('employeelist', compact('karyawans', 'totalStaff', 'activeStaff', 'offStaff'));
    }

    // Menyimpan karyawan baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'jabatan' => 'required|string|max:100',
            'email' => 'nullable|email',
            'status' => 'nullable|in:active,off,break',
        ]);

        Karyawan::create([
            'nama' => $validated['nama'],
            'email' => $request->email ?? strtolower(str_replace(' ', '', $validated['nama'])) . rand(10, 99) . '@resto.com',
            'password' => bcrypt('password123'),
            'no_hp' => $validated['no_hp'],
            'jabatan' => $validated['jabatan'],
            'status' => $request->status ?? 'active',
        ]);

        return redirect()->back()->with('success', 'Karyawan berhasil ditambahkan ke database.');
    }

    // Mengubah status karyawan (active / off)
    public function updateStatus(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $newStatus = $request->input('status', $karyawan->status === 'active' ? 'off' : 'active');

        $karyawan->update([
            'status' => $newStatus,
        ]);

        return redirect()->back()->with('success', 'Status karyawan berhasil diperbarui.');
    }

    // Menghapus karyawan dari database
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        return redirect()->back()->with('success', 'Karyawan berhasil dihapus dari database.');
    }
}
