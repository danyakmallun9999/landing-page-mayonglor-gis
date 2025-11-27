@extends('errors.layout')

@section('title', 'Terjadi Kesalahan Server')
@section('code', '500 Error')
@section('icon')
    <i class="fa-solid fa-server"></i>
@endsection
@section('message', 'Terjadi Kesalahan Server')
@section('description', 'Maaf, terjadi kesalahan pada server kami. Silakan coba lagi nanti atau hubungi administrator.')
