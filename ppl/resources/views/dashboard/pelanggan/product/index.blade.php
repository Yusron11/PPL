@extends('dashboard.pelanggan.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produk</h1>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($products as $produk)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://source.unsplash.com/500x400?coffeebeans" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><a class= "text-decoration-none text-dark" href="/dashboard/product/{{ $produk->slug }}">{{ $produk->name }}</a></h5>
                    <p class="card-text">{{ $produk->price }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection