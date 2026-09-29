@extends('layouts.app')
@section('content')
<div class="container mt-4">
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
                </tr>
        </thead>
        <tbody>
                            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>{{ $user->nama_kelas }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection