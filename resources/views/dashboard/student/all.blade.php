@extends('layouts.partial.dashboard')

@section('title', 'Halaman Students Dashboard')

@section('container')
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col">
            <h1>Halaman Students Dashboard</h1>
        </div>
        <div class="col-auto">
            <form action="{{ route('dashboard.student.search') }}" method="GET" class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari Siswa">
                <button type="submit" class="btn btn-primary">Search</button> 
            </form>
        </div>
        <div class="col-auto">  
            <a href="/dashboard/student/create" class="btn btn-primary">ADD</a> 
        </div>
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
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = ($students->currentPage() - 1) * $students->perPage() + 1;
                @endphp
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $student->nis }}</td>
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->kelas->kelas_siswa ?? 'Tidak ada kelas' }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/dashboard/student/detail/{{ $student->id }}" class="btn btn-outline-primary">Detail</a>
                                <a href="/dashboard/student/edit/{{ $student->id }}" class="btn btn-outline-warning">Edit</a>
                                <form action="/dashboard/student/delete/{{ $student->id }}" method="post">
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
    
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item {{ $students->previousPageUrl() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $students->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            @foreach ($students->getUrlRange(1, $students->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $students->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach
            <li class="page-item {{ $students->nextPageUrl() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $students->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
@endsection
