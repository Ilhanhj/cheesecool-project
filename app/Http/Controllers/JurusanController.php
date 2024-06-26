<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Hapus Program Studi!';
        $text = "Yakin akan menghapus Program Studi?";
        confirmDelete($title, $text);

        return view('dashboard.jurusan.index', [
            'jurusans' => Jurusan::all(),
            'title' => 'Dashboard | Program Studi',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jurusan.create', [
            'jurusans' => Jurusan::all(),
            'title' => 'Dashboard | Form Calon Jurusan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:5|max:255',
        ]);

        Jurusan::create($validatedData);
        Alert::success(
            'Data Berhasil Ditambahkan',
            'Program Studi Baru berhasil ditambahkan'
        );
        return redirect('/dashboard/jurusan')->with(
            'success',
            'Calon Jurusan Telah Ditambahkan'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        return view('dashboard.jurusan.edit', [
            'jurusan' => $jurusan,
            'jurusans' => Jurusan::all(),
            'title' => 'Dashboard | Edit Program Studi',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $rules = [
            'nama' => 'required|min:5|max:255',
        ];

        $validatedData = $request->validate($rules);

        Jurusan::where('id', $jurusan->id)->update($validatedData);
        Alert::success(
            'Data Berhasil Diperbarui',
            'Program Studi berhasil diperbarui'
        );

        return redirect('/dashboard/jurusan')->with(
            'success',
            ' Program Studi Telah Diubah'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        Jurusan::destroy($jurusan->id);
        Alert::success(
            'Data Berhasil Dihapus',
            'Program Studi berhasil Dihapus'
        );

        return redirect('/dashboard/jurusan')->with(
            'success',
            'Program Studi Telah Dihapus'
        );
    }
}
