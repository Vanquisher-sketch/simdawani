<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class YearController extends Controller
{
    public function index()
    {
        $years = Year::all();

        return view('pages.year.index', [
            'years' => $years,
        ]);
    }

    public function create()
    {
        return view('pages.year.create');
    }

    public function store(Request $request)
    {
        

        $validatedData = $request->validate([
            'tahun_lahir'     => ['required', 'max:100'], 
            'jumlah'          => ['required','max:100'],
        ]);

        Year::create($validatedData);

        return redirect('/year')->with('sukses', 'Berhasil memasukkan data');
    }

    public function edit($id)
    {
        $year = Year::findOrFail($id);
        return view('pages.year.edit', [
            'year' => $year,
        ]);
    }

    public function update(Request $request, $id)
    {
            $validatedData = $request->validate([
            'tahun_lahir'     => ['required', 'max:100'], 
            'jumlah'          =>['required','max:100'],
        ]);

        Year::FindOrFail($id)->update($validatedData);

        return redirect('/year')->with('sukses', 'Berhasil mengubah data');
    }
    
    public function destroy($id)
    {
        $year = Year::findOrFail($id);
        $year->delete();

        return redirect('/year')->with('sukses', 'berhasil menghapus data');
    }
}
