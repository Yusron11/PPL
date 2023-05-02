@extends('layouts.main')

@section('container')

    <h1>Halaman Produk</h1>
    <hr>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="https://source.unsplash.com/1200x400?coffeebeans" class="img-fluid" alt="...">

                <h2>{{ $product->name }}</h2>
                <p>Penjual : <a href="/petani/{{ $product->user->username }}">{{ $product->user->name }}</a></p>
                <p>{{ $price }}</p>
                <p>stok: {{ $product->stok }}</p>
                <a href="#" class="btn btn-primary">Pesan</a>
                <p class="mt-3">{{ $product->description }}</p>
            </div>
        </div>
    </div>
    
@endsection