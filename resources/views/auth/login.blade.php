@extends('layouts.guest')
@section('title', 'Login')
@section('content')
<form method="POST" action="/login">
    @csrf
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="{{ old('email') }}"
               class="form-control @error('email') is-invalid @enderror">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary w-100">Masuk</button>
</form>
@endsection
