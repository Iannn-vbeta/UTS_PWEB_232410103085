@extends('layouts.app')
@section('title','Dashboard')
@section('header')
    @include('components.navbar')
@endsection

@section('main')
        <div class="container mt-4 text-center">
            <h1 class="display-4">Selamat Datang di Kedai Ayam Geprek Kerajaan!</h1>
            <p class="lead">Halo, <strong>{{ htmlspecialchars($_GET['username'], ENT_QUOTES, 'UTF-8') }}</strong>! Nikmati sensasi ayam geprek dengan cita rasa kerajaan yang tiada duanya.</p>
            <hr class="my-4">
            <p>Rasakan kelezatan ayam geprek yang diracik dengan rempah-rempah rahasia dari dunia fantasi. Temukan pengalaman kuliner yang akan membawa Anda ke zaman kerajaan penuh keajaiban.</p>
        </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
