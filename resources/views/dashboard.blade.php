@extends('layouts.app')
@section('title', 'Dashboard')

@section('header')
    @include('components.navbar')
@endsection

@section('main')
    <div class="container mt-5 text-center">
        <h2 class="text-warning">Selamat Datang, {{ $_GET['username'] ?? 'Pengunjung' }}!</h2>
        <p class="text-muted">Nikmati suasana hangat dan keramahan di tavern kami.</p>
        <p>Apakah Anda ingin memesan hidangan spesial atau mendengar kisah menarik?</p>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
