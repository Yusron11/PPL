@extends('layouts.main')

@section('container')

    <div class="banner">
        <div class="banner-wrap">
        <div class="banner-left">
            <h1>Kopi, cermin hidup, pahit dan manis, membangkitkan semangat sejati.</h1>
            <p>Saatnya merangkul keajaiban kopi dan menggali ilmu baru.<br>
            Mari belajar mengolah kopi dan menjelajahi dunia rasa yang tak terhingga.</p>
            <a href="/petani" class="cta">Daftar Sekarang</a>
        </div>
        <div class="banner-right">
            <img src="img/home.png" alt="gambar kopin" class="d-block w-100">
        </div>
        </div>
    </div>
      
    <div class="layanans">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h2>Layanan Kami, Untuk Kamu</h2>
                    <div class="layanan-wrapper">
                        <div class="layanan-card layanan-1">
                            <a href="/products">
                            <img src="img/layanan1.png" alt="Produk">
                            <h3>Produk</h3>
                            </a>
                            <p>
                            Kegiatan pembelajaran melalui platform Zoom mengenai berbagai topik pengembangan diri bersama Mentor dan Psikolog Satu Persen.
                            </p>
                        </div>
                        <div class="layanan-card layanan-2">
                            <a href="/layanan/konsultasi/online-mentoring">
                            <img src="img/barista.png" alt="Barista">
                            <h3>Barista</h3>
                            </a>
                            <p>
                            Layanan konsultasi dengan mentor untuk membantu mengidentifikasi dan menemukan solusi mengenai masalah kehidupan.
                            </p>
                        </div>
                        <div class="layanan-card layanan-3">
                            <a href="/layanan/konsultasi/konseling">
                            <img src="img/roaster.png" alt="Roaster">
                            <h3>Roaster</h3>
                            </a>
                            <p>
                            Layanan konsultasi dengan psikolog untuk mengatasi masalah klinis yang membahayakan diri sendiri maupun orang lain.
                            </p>
                        </div>
                        <div class="layanan-card layanan-4">
                            <a href="/kelas-online">
                            <img src="img/layanan4.png" alt="Kelas Online">
                            <h3>Kelas Online</h3>
                            </a>
                            <p>
                            Layanan belajar online di mana peserta mendapatkan pembahasan mendalam terkait pengembangan diri yang bisa diakses kapan saja.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      
      
@endsection

<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
