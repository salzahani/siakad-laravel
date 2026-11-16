@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="/mahasiswa">
            @csrf
            <h4>Form Mahasiswa - {{ $namaSistem }}</h4>
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" value="{{ old('nim') }}" class="form-control @error('nim') is-invalid @enderror">
                @error('nim') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Program Studi</label>
                <select name="id_prodi" class="form-control">
                    @foreach($prodi as $p)
                    <option value="{{ $p->id_prodi }}">{{ $p->nama_prodi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3 text-muted">
                SPP: {{ numberToRupiah(3500000) }}
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection

