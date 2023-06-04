@extends('layouts.main')

@section('container')

    <div class="product-banner">
        <img src="{{ asset('img/biji2.png') }}" alt="Gambar Kiri" class="banner-image banner-image-left">
        <h2 class="banner-text">Dalam biji kopi terbaik, terdapat cerita petani yang menghasilkan keistimewaan luar biasa.</h2>
        <img src="{{ asset('img/biji1.png') }}" alt="Gambar Kanan" class="banner-image banner-image-right">
    </div>

    <div class="container">
        <p>
            Selamat datang di dunia biji kopi yang memikat! Kami percaya bahwa kopi terbaik berasal dari biji-biji yang ditanam dengan penuh dedikasi oleh petani kopi terampil. Inilah mengapa kami mengajak Anda untuk memilih biji kopi dengan cermat, karena di dalam setiap biji tersebut terdapat kisah perjuangan dan semangat petani yang berusaha memberikan kualitas terbaik.
        </p>
        <p>
            Melalui website kami, Anda dapat menjelajahi berbagai varietas biji kopi, mengenal petani-petani yang kami bekerja sama, dan menemukan biji kopi yang sesuai dengan selera dan preferensi Anda. Jadi, mari mulai petualangan rasa yang tak terlupakan dan pesan biji kopi berkualitas tinggi dari kami untuk menghadirkan pengalaman kopi yang luar biasa di setiap cangkir Anda.
        </p>

        <div class="row-produk">
            @foreach($products as $product)
                <div class="col-md-3 col-sm-6">
                    <a href="{{ "/products/$product->slug" }}" class="product-link">
                        <div class="products">
                            <img src="https://source.unsplash.com/500x400?coffeebeans" alt="{{ $product->name }}" class="product-image">
                            <h3 class="product-name">{{ $product->name }}</h3>
                            <p class="product-price">{{ $product->price }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection