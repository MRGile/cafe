<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Menampilkan daftar master menu dan statistik
     */
    public function index()
    {
        $menus = Menu::latest()->get();
        $totalMenu = $menus->count();
        $readyMenu = $menus->where('status', 'tersedia')->count();
        $soldOutMenu = $menus->where('status', 'habis')->count();
        $totalCategory = $menus->pluck('kategori')->unique()->count();

        return view('Menulist', compact('menus', 'totalMenu', 'readyMenu', 'soldOutMenu', 'totalCategory'));
    }

    /**
     * Menyimpan menu baru ke database beserta file gambar
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'harga' => 'required|numeric|min:0',
            'modal_hpp' => 'required|numeric|min:0',
            'estimasi_menit' => 'nullable|integer|min:1',
            'deskripsi' => 'nullable|string',
            'gambar' =>'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'nullable|in:tersedia,habis',
        ]);

        $gambarPath = null;
        
        // Handle Upload Foto Menu
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/menus'), $filename);
            $gambarPath = 'uploads/menus/' . $filename;
        } elseif ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/menus'), $filename);
            $gambarPath = 'uploads/menus/' . $filename;
        }

        Menu::create([
            'nama' => $validated['nama'],
            'kategori' => $validated['kategori'],
            'harga' => $validated['harga'],
            'modal_hpp' => $request->input('modal_hpp', $request->input('cost_price')),
            'estimasi_menit' => $request->input('estimasi_menit', $request->input('cook_time')),
            'deskripsi' => $request->input('deskripsi', $request->input('description')),
            'gambar' => $gambarPath,
            'status' => $request->input('status', 'tersedia'),
        ]);

        return redirect()->back()->with('success', 'Menu baru berhasil ditambahkan ke database!');
    }

    /**
     * Mengubah status ketersediaan menu (tersedia / habis)
     */
    public function updateStatus(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $newStatus = $request->input('status', $menu->status === 'tersedia' ? 'habis' : 'tersedia');
        
        $menu->update([
            'status' => $newStatus,
        ]);

        return redirect()->back()->with('success', 'Status ketersediaan menu berhasil diperbarui!');
    }

    /**
     * Menghapus menu dari database
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        
        if ($menu->gambar && file_exists(public_path($menu->gambar))) {
            @unlink(public_path($menu->gambar));
        }

        $menu->delete();

        return redirect()->back()->with('success', 'Menu berhasil dihapus dari database!');
    }
}
