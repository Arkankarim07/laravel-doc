{{-- extends digunakan untuk menghubungkan (meng-extend) tampilan anak (child view) ke tampilan dasar --}}
@extends('layout.main')

{{-- section digunakan untuk mengisi konten ke dalam yield yang telah Anda definisikan dalam tampilan dasar. --}}
@section('title', 'Halaman Utama')
@section('content')
    <h1>Halo</h1>
@endsection