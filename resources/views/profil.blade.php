@extends('layouts.app')
@section('title', 'Profil Pengguna')
@section('content')
<div class="row">
    <div class="col-md-6">
        <x-card judul="Informasi Akun Profil">
            <p><strong>Nama:</strong>{{ Auth::user()->name }}</p>
            <p><strong>Email:</strong>{{ Auth::user()->email }}</p>
            <p><strong>Role ID:</strong>{{ Auth::user()->role_id ?? 'User'}}</p>
        </x-card>
    </div>
</div>
@endsection
