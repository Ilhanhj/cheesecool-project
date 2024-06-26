<?php

namespace App\Http\Controllers;

use App\Models\CalonMahasiswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CalonMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Hapus Calon Mahasiswa!';
        $text = "Yakin akan menghapus Calon Mahasiswa?";
        confirmDelete($title, $text);

        return view('dashboard.mahasiswa.index', [
            'calonMahasiswas' => CalonMahasiswa::first()
                ->sortable()
                ->paginate(10),
            'title' => 'Dashboard | Calon Mahasiswa',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.mahasiswa.create', [
            'jurusans' => Jurusan::all(),
            'title' => 'Dashboard | Form Calon Mahasiswa',
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

        Alert::success(
            'Data Berhasil Ditambahkan',
            'Data calon mahasiswa berhasil ditambahkan'
        );
        CalonMahasiswa::create($validatedData);
        return redirect('/dashboard/mahasiswa')->with(
            'success',
            'Calon Mahasiswa Telah Ditambahkan'
        );
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
    public function edit(CalonMahasiswa $mahasiswa)
    {
        return view('dashboard.mahasiswa.edit', [
            'mahasiswa' => $mahasiswa,
            'jurusans' => Jurusan::all(),
            'title' => 'Dashboard | Edit Calon Mahasiswa',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CalonMahasiswa $mahasiswa)
    {
        $rules = [
            'nama' => 'required|min:5|max:255',
            'asal_sekolah' => 'required|min:5|max:255',
            'jurusan_id' => 'required',
            'nilai_test' => 'required|',
        ];

        $validatedData = $request->validate($rules);

        Alert::success(
            'Data Berhasil Diperbarui',
            'Data calon mahasiswa berhasil diperbarui'
        );
        CalonMahasiswa::where('id', $mahasiswa->id)->update($validatedData);

        return redirect('/dashboard/mahasiswa')->with(
            'success',
            'Calon Mahasiswa Telah Diubah'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CalonMahasiswa $mahasiswa)
    {
        Alert::success(
            'Data Berhasil Dihapus',
            'Data calon mahasiswa berhasil dihapus'
        );
        CalonMahasiswa::destroy($mahasiswa->id);

        return redirect('/dashboard/mahasiswa')->with(
            'success',
            'Calon Mahasiswa Telah Dihapus'
        );
    }
}
