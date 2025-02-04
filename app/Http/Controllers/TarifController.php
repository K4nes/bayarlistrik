<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel tarif
        $inputtarif = Tarif::all();

        return view('halamantarif', [
            'title' => 'Halaman Input Tarif',
            'inputtarif' => $inputtarif, // Mengirim data ke view
            'tarifs' => $inputtarif, // Pastikan kita mengirimkan $tarifs ke view
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'golongan' => 'required',
            'daya' => 'required',
            'tarif_per_kwh' => 'required|numeric',
        ]);

        Tarif::create([
            'kode_tarif' => $request->golongan . '/' . $request->daya,
            'golongan' => $request->golongan,
            'daya' => $request->daya,
            'tarif_per_kwh' => $request->tarif_per_kwh,
        ]);

        return redirect()->route('halamantarif.index')->with('success', 'Tarif berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        Tarif::findOrFail($id)->delete();
        return redirect()->route('halamantarif.index')->with('success', 'Tarif berhasil dihapus.');
    }

    public function edit($id)
    {
        $tarif = Tarif::findOrFail($id);

        return view('halamantarif-edit', [
            'title' => 'Edit Tarif',
            'tarif' => $tarif
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'golongan' => 'required',
            'daya' => 'required',
            'tarif_per_kwh' => 'required|numeric',
        ]);

        $tarif = Tarif::findOrFail($id);
        $tarif->update([
            'kode_tarif' => $request->golongan . '/' . $request->daya,
            'golongan' => $request->golongan,
            'daya' => $request->daya,
            'tarif_per_kwh' => $request->tarif_per_kwh,
        ]);

        return redirect()->route('halamantarif.index')->with('success', 'Tarif berhasil diperbarui.');
    }
}
