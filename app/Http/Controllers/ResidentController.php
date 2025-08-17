<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Http\Rule;

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
        $validated = $request->validate([
            'tanggal_lahir'     => ['required', 'date'], 
            'gender'            => ['required', Rule::in(['laki-laki', 'perempuan'])],
            'alamat'            => ['required', 'max:700'],
            'agama'             => ['nullable', 'max:100'],
            'status_pekerjaan'  => ['required', Rule::in(['bekerja', 'tidak bekerja'])],
            'status_pendidikan' => ['required', Rule::in(['Sekolah', 'Tamat Sekolah', 'Putus Sekolah'])],
            'status_hubungan'   => ['required', Rule::in(['Lajang', 'Menikah', 'Cerai', 'Janda/duda'])],
            'status_tinggal'    => ['required', Rule::in(['Tetap', 'Pindahan'])],
        ]);

        Resident::create($request->validated());

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
            $validated = $request->validate([
            'tanggal_lahir'     => ['required', 'date'], 
            'gender'            => ['required', Rule::in(['laki-laki', 'perempuan'])],
            'alamat'            => ['required', 'max:700'],
            'agama'             => ['nullable', 'max:100'],
            'status_pekerjaan'  => ['required', Rule::in(['bekerja', 'tidak bekerja'])],
            'status_pendidikan' => ['required', Rule::in(['Sekolah', 'Tamat Sekolah', 'Putus Sekolah'])],
            'status_hubungan'   => ['required', Rule::in(['Lajang', 'Menikah', 'Cerai', 'Janda/duda'])],
            'status_tinggal'    => ['required', Rule::in(['Tetap', 'Pindahan'])],
        ]);

        Resident::FindOrFail($id)-update($request->validated());

        return redirect('/resident')->with('sukses', 'Berhasil mengubah data');
    }
    
    public function destroy($id)
    {
        $resident = Resident::findOrFail($id);
        $resident->delete();

        return redirect('/recident')->with('sukses', 'berhasil menghapus data');
    }
}
