@extends('layouts.partial.dashboard')

@section('container')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Halaman Kelas Dashboard</h1>
            <a href="/dashboard/grade/create" class="btn btn-primary">ADD</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($grades as $grade)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $grade->kelas_siswa }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="/dashboard/grade/detail/{{ $grade->id }}" class="btn btn-outline-primary">Detail</a>
                                    <a href="/dashboard/grade/edit/{{ $grade->id }}" class="btn btn-outline-warning">Edit</a>
                                    <form action="/dashboard/grade/delete/{{ $grade->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
