@extends('dashboard.pelanggan.main')

@section('container')
 
    <div class="container d-flex align-items-center justify-content-center flex-column">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <img src="img/no-data.png" class="img-fluid" alt="...">
                <p><strong>Cari Kopi Berkualitas di KOPIN</strong></p>
                <p>Pilih produk yang kamu minati untuk mendapatkan biji kopi terbaik!</p>
                <a href="/products" class="btn btn-primary">Cari Produk</a>
            </div>
        </div>
    </div>

@endsection