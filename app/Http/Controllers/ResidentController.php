<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ResidentController extends Controller
{
    public function index()
    {
        $residents = Resident::all();

        return view('pages.resident.index', [
            'residents' => $residents,
        ]);
    }

    public function create()
    {
        return view('pages.resident.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_lahir'     => ['required', 'date'], 
            'gender'            => ['required', Rule::in(['Laki-laki', 'Perempuan'])],
            'alamat'            => ['required', 'max:700'],
            'agama'             => ['nullable', 'max:100'],
            'status_pekerjaan'  => ['required', Rule::in(['bekerja', 'tidak bekerja'])],
            'status_pendidikan' => ['required', Rule::in(['sekolah', 'tamat sekolah', 'putus sekolah'])],
            'status_hubungan'   => ['required', Rule::in(['belum menikah', 'menikah', 'cerai', 'janda/duda'])],
            'status_tinggal'    => ['required', Rule::in(['tetap', 'pindahan'])],
        ]);

        Resident::create($validatedData);

        return redirect('/resident')->with('sukses', 'Berhasil memasukkan data');
    }

    public function edit($id)
    {
        $resident = Resident::findOrFail($id);
        return view('pages.resident.edit', [
            'resident' => $resident,
        ]);
    }

    public function update(Request $request)
    {
            $validatedData = $request->validate([
            'tanggal_lahir'     => ['required', 'date'], 
            'gender'            => ['required', Rule::in(['Laki-laki', 'Perempuan'])],
            'alamat'            => ['required', 'max:700'],
            'agama'             => ['nullable', 'max:100'],
            'status_pekerjaan'  => ['required', Rule::in(['bekerja', 'tidak bekerja'])],
            'status_pendidikan' => ['required', Rule::in(['sekolah', 'tamat sekolah', 'putus sekolah'])],
            'status_hubungan'   => ['required', Rule::in(['belum menikah', 'menikah', 'cerai', 'janda/duda'])],
            'status_tinggal'    => ['required', Rule::in(['tetap', 'pindahan'])],
        ]);

        Resident::FindOrFail($id)-update($validatedData);

        return redirect('/resident')->with('sukses', 'Berhasil mengubah data');
    }
    
    public function destroy($id)
    {
        $resident = Resident::findOrFail($id);
        $resident->delete();

        return redirect('/recident')->with('sukses', 'berhasil menghapus data');
    }
}
