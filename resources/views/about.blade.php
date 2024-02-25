@extends('layouts.main')

@section('container')
    <h1>Ini Adalah Halaman About</h1>
    <div>
        <h3>Nama: {{ $nama }}</h3>
        <h3>Kelas: {{ $kelas }}</h3>
    </div>
@endsection
