@extends('dashboard.petani.main')

@section('container')

    <h1>Halaman Produk</h1>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <a href="/dashboard/product" class="btn btn-success"><span data-feather="arrow-left"></span>Kembali</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Hapus</a>

                <img src="https://source.unsplash.com/1200x400?coffeebeans" class="img-fluid my-3" alt="...">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->price }}</p>
                <p>stok: {{ $product->stok }}</p>
                <p class="mt-3">{{ $product->description }}</p>
            </div>
        </div>
    </div>
    
@endsection