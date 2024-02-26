@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Halaman Students</h1>

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
                        $no = 1;
                    @endphp
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $student->nis }}</td>
                            <td>{{ $student->nama }}</td>
                            <td>{{ $student->kelas->kelas_siswa ?? 'Tidak ada kelas' }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="/student/detail/{{ $student->id }}" class="btn btn-outline-primary">Detail</a>
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
