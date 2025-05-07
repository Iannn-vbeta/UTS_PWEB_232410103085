@extends('layouts.app')
@section('title','Dashboard')
@section('header')
    @include('components.navbar')
@endsection
@section('main')
    <div class="hero py-5 text-center" style="background: linear-gradient(to bottom, #f8f9fa, #ffffff);">
      <h1 class="display-4">Menu Ayam Geprek</h1>
      <p class="lead">Nikmati berbagai pilihan menu ayam geprek terbaik kami dengan harga terjangkau.</p>
    </div>

    <div class="row justify-content-center gap-4">
      @foreach($menuMakanan as $index => $item)
      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-4 d-flex justify-content-center">
      <x-card 
        :image="$item['image']" 
        :name="$item['nama']" 
        :price="'Rp ' . number_format($item['harga'], 0, ',', '.')" 
        :keterangan="$item['keterangan']" 
      />
      </div>
      @endforeach
    </div>

@endsection
@section('footer')
    @include('components.footer')
@endsection
