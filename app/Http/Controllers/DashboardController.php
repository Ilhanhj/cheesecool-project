<?php

namespace App\Http\Controllers;
use App\Models\calonMahasiswa;
use App\Models\Jurusan;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Cheesecool | Dashboard',
            'calonMahasiswa' => calonMahasiswa::all(),
            'jurusan' => Jurusan::all(),
        ]);
    }
}
