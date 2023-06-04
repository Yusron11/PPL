@extends('layouts.main')

@section('container')

    <div class="product-banner">
        <img src="img/barista.png" alt="Gambar Kiri" class="banner-image banner-image-left">
        <h2 class="banner-text">Barista, penari rasa, menghadirkan harmoni dalam setiap cangkir kopi.</h2>
        <img src="img/barista.png" alt="Gambar Kanan" class="banner-image banner-image-right">
    </div>

    <div class="container">
        <p>
            Para barista adalah para ahli seni kopi yang memadukan keterampilan teknis dan kreativitas untuk menciptakan pengalaman rasa yang luar biasa. Mereka adalah pahlawan di balik mesin kopi, dengan keahlian dalam meracik berbagai jenis kopi, mengolah susu menjadi kreasi yang menggoda, dan menghiasi minuman dengan dekorasi yang indah. Dalam setiap cangkir kopi yang mereka sajikan, terdapat sentuhan unik dan cerita rasa yang membuat pengalaman minum kopi menjadi tak terlupakan.
        </p>
        <p>
            Jika Anda ingin menjadi seorang barista yang handal, website kami adalah tempat yang tepat untuk belajar. Melalui website kami, Anda dapat menemukan berbagai pelajaran dan panduan praktis tentang teknik meracik kopi, latihan latte art, dan pemahaman mendalam tentang biji kopi yang beragam. Bergabunglah dengan komunitas kami dan mulailah petualangan Anda dalam dunia kopi dengan menjadi seorang barista yang mahir dan kreatif.
        </p>
        <div class="row-produk">
            @foreach($barista as $barista)
                <div class="col-md-3 col-sm-6">
                    <a href="{{ "/products/$barista->username" }}" class="product-link">
                        <div class="products">
                            <img src="img/barista.png" alt="{{ $barista->username }}" class="product-image w-500 h-400">
                            <h3 class="product-name">{{ $barista->name }}</h3>
                            <p class="product-price">{{ $barista->username }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
