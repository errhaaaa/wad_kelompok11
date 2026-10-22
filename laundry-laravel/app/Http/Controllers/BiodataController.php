<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BiodataController extends Controller
{
    public function index()
    {
        return view('biodata.index');
    }

    public function daftar()
    {
        $biodata = Biodata::orderByDesc('no')->get();

        return view('biodata.daftar', compact('biodata'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'           => 'required|max:100',
            'no_telepon'     => 'required|max:20',
            'alamat'         => 'required|max:255',
            'catatan_khusus' => 'nullable|max:255',
        ]);

        $data['catatan_khusus'] = $data['catatan_khusus'] ?? '-';

        Biodata::create($data);

        return redirect()->route('biodata.daftar')->with('success', 'Data customer berhasil ditambahkan.');
    }

    public function edit(Biodata $biodata)
    {
        return view('biodata.edit', compact('biodata'));
    }

    public function update(Request $request, Biodata $biodata)
    {
        $data = $request->validate([
            'nama'           => 'required|max:100',
            'no_telepon'     => 'required|max:20',
            'alamat'         => 'required|max:255',
            'catatan_khusus' => 'nullable|max:255',
        ]);

        $data['catatan_khusus'] = $data['catatan_khusus'] ?? '-';

        $biodata->update($data);

        return redirect()->route('biodata.daftar')->with('success', 'Data customer berhasil diperbarui.');
    }

    public function destroy(Biodata $biodata)
    {
        $biodata->delete();

        return redirect()->route('biodata.daftar')->with('success', 'Data customer berhasil dihapus.');
    }
}
