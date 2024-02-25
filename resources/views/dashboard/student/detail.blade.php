@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Detail Siswa</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 30%;">NIS</th>
                                <td>{{ $student->nis }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $student->nama }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $student->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>{{ $student->kelas->kelas_siswa }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $student->alamat }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
