<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Periksa;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return view('dokter.dashboard');
    }

    public function showMemeriksa()
    {
        $obats = Obat::latest()->get();
        $showPasien = Periksa::with('pasien')->where('id_dokter', auth()->id())->latest()->get();
        return view('dokter.memeriksa', compact('showPasien', 'obats'));
    }

    public function editMemeriksa($id)
    {
        $memeriksa = Periksa::with('pasien')->findOrFail($id);

        if ($memeriksa->id_dokter !== auth()->id()) {
            abort(403);
        }

        $obats = Obat::all();
        return view('dokter.memeriksa.edit', compact('memeriksa', 'obats'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tgl_periksa' => 'required|date',
            'catatan' => 'nullable|string',
            'biaya_periksa' => 'required|integer',
        ]);

        $memeriksa = Periksa::findOrFail($id);

        if ($memeriksa->id_dokter !== auth()->id()) {
            abort(403);
        }

        $memeriksa->update([
            'tgl_periksa' => $request->tgl_periksa,
            'catatan' => $request->catatan,
            'biaya_periksa' => $request->biaya_periksa,
        ]);

        toastr()->success('Data Periksa Pasien Berhasil Diperbarui!');
        return redirect()->route('memeriksaDokter');
    }
    
    public function showObat()
    {

        $obats = Obat::latest()->get();
        return view('dokter.obat', compact('obats'));
    }

    public function createObat(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'kemasan' => 'required|string|max:69',
            'harga' => 'required|integer',
        ]);

        Obat::create($request->all());
        toastr()->success('Obat Berhasil Ditambahkan');
        return redirect()->route('obatDokter');
    }

    public function updateObat(Request $request, $id)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'kemasan' => 'required|string|max:69',
            'harga' => 'required|integer',
        ]);

        $obat = Obat::findOrFail($id);

        $obat->update([
            'nama_obat' => $request->input('nama_obat'),
            'kemasan' => $request->input('kemasan'),
            'harga' => $request->input('harga')
        ]);
        toastr()->success('Obat berhasil diperbarui');
        return redirect()->route('obatDokter');
    }

    public function editObat($id)
    {
        $obat = Obat::findOrFail($id);
        return view('dokter.obat.edit', compact('obat'));
    }

    public function deleteObat($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();
        toastr()->success('Obat Berhasil Dihapus');
        return redirect()->route('obatDokter');
    }
}