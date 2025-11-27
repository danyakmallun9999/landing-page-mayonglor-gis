@extends('errors.layout')

@section('title', 'Layanan Tidak Tersedia')
@section('code', '503 Service Unavailable')
@section('icon')
    <i class="fa-solid fa-screwdriver-wrench"></i>
@endsection
@section('message', 'Sedang Dalam Pemeliharaan')
@section('description', 'Sistem sedang dalam pemeliharaan rutin. Silakan kembali lagi nanti.')
