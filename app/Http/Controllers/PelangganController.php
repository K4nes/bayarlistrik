<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarPelanggan;

class PelangganController extends Controller
{
    // Menampilkan daftar pelanggan
    public function index()
    {
        $daftarpelanggan = DaftarPelanggan::all(); // Mengambil data pelanggan
        return view('daftarpelanggan', [
            'title' => 'Daftar Pelanggan',
            'daftarpelanggan' => $daftarpelanggan,
        ]);
    }

    // Menampilkan form input pelanggan
    public function create()
    {
        return view('form_pelanggan', [
            'title' => 'Tambah Pelanggan',
        ]);
    }

    // Menyimpan data pelanggan
    public function store(Request $request)
    {
        // Validasi input data
        $validated = $request->validate([
            'no_meter' => 'required|string|max:20',
            'nama_pelanggan' => 'required|string|max:100',
            'alamat' => 'required|string',
            'tgl_bayar' => 'required|date',
            'id_tarif' => 'required|string',
        ]);

        // Menyimpan data pelanggan ke database
        DaftarPelanggan::create([
            'no_meter' => $validated['no_meter'],
            'nama_pelanggan' => $validated['nama_pelanggan'],
            'alamat' => $validated['alamat'],
            'tgl_bayar' => $validated['tgl_bayar'],
            'id_tarif' => $validated['id_tarif'],
        ]);

        // Redirect atau memberi response
        return redirect('/daftarpelanggan')->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    // Menampilkan form edit pelanggan
    public function edit($id)
    {
        $pelanggan = DaftarPelanggan::findOrFail($id); // Find pelanggan by ID
        return view('form_pelanggan', [
            'title' => 'Edit Pelanggan',
            'pelanggan' => $pelanggan,
        ]);
    }

    // Mengupdate data pelanggan
    public function update(Request $request, $id)
    {
        // Validasi input data
        $validated = $request->validate([
            'no_meter' => 'required|string|max:20',
            'nama_pelanggan' => 'required|string|max:100',
            'alamat' => 'required|string',
            'tgl_bayar' => 'required|date',
            'id_tarif' => 'required|string',
        ]);

        // Update data pelanggan
        $pelanggan = DaftarPelanggan::findOrFail($id);
        $pelanggan->update($validated);

        return redirect('/daftarpelanggan')->with('success', 'Pelanggan berhasil diupdate!');
    }

    // Menghapus data pelanggan
    public function destroy($id)
    {
        DaftarPelanggan::destroy($id);
        return redirect('/daftarpelanggan')->with('success', 'Pelanggan berhasil dihapus!');
    }
}

