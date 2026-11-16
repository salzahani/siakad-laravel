<h1>Tambah Program Studi</h1>
@if ($errors->any())
<div style="color: red;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('prodi.store') }}" method="POST">
    @csrf
    <div>
        <label>Kode Prodi:</label><br>
        <input type="text" name="kode_prodi" value="{{ old('kode_prodi') }}" required>
    </div>
    <br>
    <div>
        <label>Nama Prodi:</label><br>
        <input type="text" name="nama_prodi" value="{{ old('nama_prodi') }}" required>
    </div>
    <br>
    <button type="submit">Simpan</button>
    <a href="{{ route('prodi.index') }}">Kembali</a>
</form>
