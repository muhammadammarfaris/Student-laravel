@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <h1 class="card-title text-center mb-4">Edit Siswa</h1>
                <form method="post" action="/student/update/{{ $student->id }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis" value="{{ old('nis', $student->nis) }}" readonly required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama', $student->nama) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $student->tanggal_lahir) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select" name="kelas_id">
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}" {{ $grade->id == $student->kelas_id ? 'selected' : ''}}>{{ $grade->kelas_siswa }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ old('alamat', $student->alamat) }}" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning">Edit</button>
                        <a type="button" class="btn btn-secondary ms-2" onclick="kembali()">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function kembali() {
            if (confirm('Apakah Anda ingin kembali?')) {
                window.location.href = '/student/all'; 
            }
        }
    </script>
@endsection
