<h1>Daftar Program Studi</h1>
@if (session('success'))
<p>{{ session('success') }}</p>
@endif

@if (session('user_role') == 1)
<a href="{{ route('prodi.create') }}">Tambah</a>
@endif

<table border="1">
    <tr>
        <th>Kode Prodi</th>
        <th>Nama Prodi</th>
        <th>Aksi</th>
    </tr>
    @forelse ($prodis as $prodi)
    <tr>
        <td>{{ $prodi->kode_prodi }}</td>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>
            @if (session('user_role') == 1)
            <a href="{{ route('prodi.edit', $prodi->id_prodi) }}">Ubah</a>
            <form method="POST" style="display:inline" action="{{ route('prodi.destroy', $prodi->id_prodi) }}">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus
                </button>
            </form>
            @endif
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="3">Belum ada data></td>
    </tr>
    @endforelse
</table>
