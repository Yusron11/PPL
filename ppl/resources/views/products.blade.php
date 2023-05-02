@extends('layouts.main')

@section('container')
    <h1>Halaman Produk</h1>

    <div class="container">
        <div class="row">
            @foreach ($products as $produk)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://source.unsplash.com/500x400?coffeebeans" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><a class= "text-decoration-none text-dark" href="/products/{{ $produk->slug }}">{{ $produk->name }}</a></h5>
                      <p class="card-text">{{ $produk->price }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection