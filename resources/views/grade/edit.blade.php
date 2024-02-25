@extends('layouts.main')

@section('container')
    <div class="container mt-5">    
        <div class="card shadow">
            <div class="card-body">
                <h1 class="card-title text-center mb-4">Edit Kelas</h1>
                <form method="post" action="/grade/update/{{ $grade->id }}">
                    @csrf
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas_siswa" placeholder="Masukkan Kelas" name="kelas_siswa" value="{{ old('kelas_siswa', $grade->kelas_siswa)}}" required>
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
                window.location.href = '/grade/all'; 
            }
        }
    </script>
@endsection
