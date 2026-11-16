<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMahasiswaRequest;

class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::with('prodi')->get();
        return view('mahasiswa.index', compact('data'));
    }
    public function show($id){
        $m = Mahasiswa::with('mataKuliah')->findOrFail($id);
        return view('mahasiswa.show', compact('m'));
    }
    public function create()
    {
        $prodi = Prodi::all();
        return view('mahasiswa.create', compact('prodi'));
    }
    public function store(StoreMahasiswaRequest $request)
    {
        Mahasiswa::create($request->validated());
        return redirect('/mahasiswa')->with('success', 'Data tersimpan');
    }
}
