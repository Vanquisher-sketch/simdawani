<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
// Tambahkan ini untuk validasi
use Illuminate\Validation\Rule;
// Ganti PDF dengan Facade yang benar
use Barryvdh\DomPDF\Facade\Pdf;


class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        // KIRIMKAN VARIABEL $rooms KE VIEW
        return view('pages.room.index', compact('rooms'));
    }

    public function create()
    {
        return view('pages.room.create');
    }

    public function store(Request $request)
    {
        // Validasi disesuaikan untuk data ruangan
        $validatedData = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'kode'  => ['required', 'string', 'max:50', 'unique:rooms,kode'], // unique agar kode tidak ada yg sama
        ]);

        Room::create($validatedData);

        return redirect('/room')->with('sukses', 'Berhasil memasukkan data ruangan');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id); // Gunakan variabel tunggal ($room) agar lebih jelas
        return view('pages.room.edit', [
            'room' => $room,
        ]);
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);

        // Validasi disesuaikan untuk data ruangan saat update
        $validatedData = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            // Rule unique diupdate agar mengabaikan data yang sedang diedit
            'kode'  => ['required', 'string', 'max:50', Rule::unique('rooms', 'kode')->ignore($room->id)],
        ]);

        $room->update($validatedData);

        return redirect('/room')->with('sukses', 'Berhasil mengubah data ruangan');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect('/room')->with('sukses', 'Berhasil menghapus data');
    }

    public function printPDF()
    {
        $rooms = Room::all();
        
        // Muat view PDF dan kirimkan datanya
        $pdf = PDF::loadView('pages.room.cetak', [
            'rooms' => $rooms,
        ]);

        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream('laporan-data-ruangan.pdf');
    }
}
