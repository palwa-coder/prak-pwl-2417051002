@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="fw-bold text-success mb-3">Edit User</h3>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label font-weight-bold">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $user->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label font-weight-bold">NPM / NIM:</label>
            <input type="text" class="form-control" id="npm" name="npm" value="{{ $user->nim }}" required>
        </div>

        <div class="mb-3">
            <label for="kelas_id" class="form-label font-weight-bold">Kelas:</label>
            <select class="form-select" id="kelas_id" name="kelas_id" required>
                @foreach ($kelas as $item)
                    <option value="{{ $item->id }}" {{ $user->kelas_id == $item->id ? 'selected' : '' }}>
                        {{ $item->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success fw-semibold">Update User</button>
        <a href="{{ url('/user') }}" class="btn btn-secondary fw-semibold">Batal</a>
    </form>
</div>
@endsection