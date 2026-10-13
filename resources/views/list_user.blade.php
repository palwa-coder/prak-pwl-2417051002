@extends('layouts.app')
@section('content')
<div class="container mt-4">
    {{-- Notifikasi Alert --}}
    @if (session('success'))
        <div style="font-family: 'Times New Roman', Times, serif; background-color: #f5e6c8; color: #5c4033; border: 1px solid #d4af37; border-radius: 6px; padding: 12px 16px; margin-bottom: 20px; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold text-success">Daftar Pengguna</h3>
        <a href="{{ route('user.create') }}" class="btn btn-custom fw-semibold">Tambah User</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover border align-middle">
            <thead class="table-warning border-bottom border-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>{{ $user->nama_kelas }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning text-white fw-semibold">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger fw-semibold" onclick="return confirm('Mau menghapus user ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection