@extends('errors.layout')

@section('title', 'Akses Ditolak')
@section('code', '403 Forbidden')
@section('icon')
    <i class="fa-solid fa-shield-halved"></i>
@endsection
@section('message', 'Akses Ditolak')
@section('description', 'Maaf, Anda tidak memiliki izin untuk mengakses halaman ini.')
