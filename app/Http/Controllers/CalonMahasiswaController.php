<?php

namespace App\Http\Controllers;

use App\Models\CalonMahasiswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class CalonMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.mahasiswa.index',[
            'calonMahasiswas' => CalonMahasiswa::all(),
            'title' => 'Dashboard | Calon Mahasiswa'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.mahasiswa.create',[
            'jurusans' => Jurusan::all(),
            'title' => 'Dashboard | Form Calon Mahasiswa'

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:5|max:255',
            'asal_sekolah' => 'required|min:5|max:255',
            'jurusan_id' => 'required',
            'nilai_test' => 'required|integer|between:1,100',
        ]);

        CalonMahasiswa::create($validatedData);
        return redirect('/dashboard/mahasiswa')->with('success', 'Calon Mahasiswa Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(CalonMahasiswa $calonMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalonMahasiswa $calonMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CalonMahasiswa $calonMahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CalonMahasiswa $calonMahasiswa)
    {
        //
    }
}
