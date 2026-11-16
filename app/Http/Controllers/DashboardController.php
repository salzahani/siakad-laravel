<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Prodi;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard', [
        'jumlahMahasiswa' => Mahasiswa::count(),
        'jumlahProdi' => Prodi::count(),
        'jumlahMK' => MataKuliah::count(), ]);
    }
}
