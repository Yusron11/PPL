@extends('layouts.main')

@section('container')

    <div class="product-banner">
        <img src="img/roaster.png" alt="Gambar Kiri" class="banner-image banner-image-left">
        <h2 class="banner-text">Roaster kopi, penyulut semangat, menggoreng biji menjadi karya cita rasa.</h2>
        <img src="img/roaster.png" alt="Gambar Kanan" class="banner-image banner-image-right">
    </div>

    <div class="container">
        <p>
            Para roaster kopi adalah para ahli dalam seni pemanggangan biji kopi. Dengan keahlian mereka, biji kopi mentah diubah menjadi produk akhir yang memiliki rasa yang luar biasa. Dalam setiap proses pemanggangan, mereka menguji dan mengendalikan suhu dengan presisi untuk menciptakan profil rasa yang unik dan memikat.
        </p>
        <p>
            Jika Anda memiliki minat dalam dunia pemanggangan kopi dan ingin menguasai seni ini, kami mengundang Anda untuk bergabung dengan kami di website kami. Di sana, Anda akan menemukan berbagai sumber daya, panduan praktis, dan pelajaran yang akan membantu Anda mempelajari teknik pemanggangan kopi yang terbaik.
        </p>
        <div class="row-produk">
            @foreach($roaster as $roaster)
                <div class="col-md-3 col-sm-6">
                    <a href="{{ "/products/$roaster->username" }}" class="product-link">
                        <div class="products">
                            <img src="img/roaster.png" alt="{{ $roaster->username }}" class="product-image w-500 h-400">
                            <h3 class="product-name">{{ $roaster->name }}</h3>
                            <p class="product-price">{{ $roaster->username }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
