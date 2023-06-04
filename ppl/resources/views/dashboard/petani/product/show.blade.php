@extends('dashboard.petani.main')

@section('container')

    <h1>Halaman Produk</h1>
    <hr>

    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 class="text-capitalize">Produk Saya</h6>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <a href="/dashboard/product" class="btn btn-success"><span data-feather="arrow-left"></span>Kembali</a>
                            <a href="/dashboard/product/{{ $product->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                            <form action="/dashboard/product/{{ $product->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?')">Hapus<span data-feather="x-circle"></span></button>
                            </form>
            
                            <img src="https://source.unsplash.com/1200x400?coffeebeans" class="img-fluid my-3" alt="...">
                            <h2>{{ $product->name }}</h2>
                            <p>{{ $price }}</p>
                            <p>stok: {{ $product->stok }}</p>
                            <article class="mt-3">
                                <strong>Deskripsi :</strong>
                                {!! $product->description !!}
                            </article>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    
@endsection