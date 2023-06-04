@extends('layouts.main')

@section('container')

    <div class="product-banner">
        <img src="img/petani1.png" alt="Gambar Kiri" class="banner-image banner-image-left">
        <h2 class="banner-text">Petani kopi, penuh kegigihan, memupuk kenikmatan dari biji yang tumbuh.</h2>
        <img src="img/petani2.png" alt="Gambar Kanan" class="banner-image banner-image-right">
    </div>

    <div class="container">
        <p>
            Petani kopi adalah pahlawan tanah yang menghasilkan biji-biji nikmat yang menyeduh kebahagiaan dalam setiap cangkir. Mereka berjuang dengan dedikasi yang luar biasa, menghadapi cuaca yang keras dan mengolah tanah subur menjadi ladang keajaiban rasa. Mereka adalah penjaga warisan cita rasa, menghiasi dunia dengan aroma harum yang menenangkan dan cita rasa yang memikat.
        </p>
        <p>
            Untuk mengenal lebih jauh tentang petani kopi dan menghargai perjuangan mereka, mari kunjungi halaman petani kopi. Di sana, kita dapat melihat kehidupan sehari-hari mereka, belajar tentang teknik bercocok tanam yang unik, dan terhubung langsung dengan mereka. Mari mendukung mereka dan menjalin kedekatan dengan petani kopi, sehingga kita dapat lebih menghargai setiap tegukan yang kita nikmati dan menghormati perjuangan mereka dalam menyajikan biji kopi yang luar biasa.
        </p>
        <div class="row-produk">
            @foreach($petani as $petani)
                <div class="col-md-3 col-sm-6">
                    <a href="{{ "/petani/$petani->username" }}" class="product-link">
                        <div class="products">
                            <img src="img/petani1.png" alt="{{ $petani->username }}" class="product-image w-500 h-400">
                            <h3 class="product-name">{{ $petani->name }}</h3>
                            <p class="product-price">{{ $petani->username }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
