@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="/mahasiswa/create" class="btn btn-primary btn-sm">Tambah Mahasiswa</a>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $m )
                <tr>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->prodi->nama_prodi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
