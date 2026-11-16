@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-md-4">
        <x-card judul="Mahasiswa"><h2>{{ $jumlahMahasiswa }}</h2></x-card>
    </div>
    <div class="col-md-4">
        <x-card judul="Program Studi"><h2>{{ $jumlahProdi }}</h2></x-card>
    </div>
    <div class="col-md-4">
       <x-card judul="Mata Kuliah"><h2>{{ $jumlahMK }}</h2></x-card>
    </div>
</div>
@endsection
@section('catatan')

@push('styles')
<style>
.card h2 { font-weight: 700; }
</style>
@endpush

@push('scripts')
<script>
console.log('Dashboard dimuat');
</script>
@endpush
