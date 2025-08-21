<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();

        return view('pages.education.index', [
            'educations' => $educations,
        ]);
    }

    public function create()
    {
        return view('pages.education.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sekolah'     => ['required', Rule::in(['sekolah','tidak sekolah','putus sekolah'])], 
            'jumlah'          => ['required','max:100'],
        ]);

        Education::create($validatedData);

        return redirect('/education')->with('sukses', 'Berhasil memasukkan data');
    }

    public function edit($id)
    {
        $education = Education::findOrFail($id);
        return view('pages.education.edit', [
            'education' => $education,
        ]);
    }

    public function update(Request $request, $id)
    {
            $validatedData = $request->validate([
            'sekolah'         =>['required', Rule::in(['sekolah','tidak sekolah','putus sekolah'])],  
            'jumlah'          =>['required','max:100'],
        ]);

        Education::FindOrFail($id)->update($validatedData);

        return redirect('/education')->with('sukses', 'Berhasil mengubah data');
    }
    
    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect('/education')->with('sukses', 'berhasil menghapus data');
    }
}