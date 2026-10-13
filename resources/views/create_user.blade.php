@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-custom shadow-sm">
                <div class="card-header bg-success text-white fw-bold">
                    Buat Pengguna Baru
      </div>
                <div class="card-body">                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="npm" class="form-label fw-semibold">NPM</label>
                            <input type="text" class="form-control" id="npm" name="npm" required>
                        </div>
                        <div class="mb-3">
                            <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                            <select name="kelas_id" id="kelas_id" class="form-select" required>
                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                <button type="submit" class="btn btn-custom w-100 fw-bold">Simpan</button>
            </form>
        </div>            </div>
        </div>
    </div>
</div>
@endsection