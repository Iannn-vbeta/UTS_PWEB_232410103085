@extends('layouts.app')
@section('title','Dashboard')
@section('header')
    @include('components.navbar')
@endsection
@section('main')
    <div class="hero bg-light py-5 text-center">
      <h1 class="display-4">Menu Ayam Geprek Paha Yae Miko</h1>
      <p class="lead">Nikmati berbagai pilihan menu ayam geprek terbaik kami dengan harga terjangkau.</p>
    </div>

    <div class="row justify-content-center gap-4">
      @foreach($menuMakanan as $index => $item)
      <div class="col-lg-2 col-md-3 mb-4 d-flex">
        @component('components.card', [
        'image' => $item['image'], 
        'name' => $item['nama'],
        'price' => 'Rp ' . number_format($item['harga'], 0, ',', '.'),
        'keterangan' => $item['keterangan']
        ])
        @endcomponent
      </div>
      @endforeach
    </div>

@endsection
@section('footer')
    @include('components.footer')
@endsection
