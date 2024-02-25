@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Detail Kelas</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 30%;">Kelas</th>
                                <td>{{ $grade->kelas_siswa }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
