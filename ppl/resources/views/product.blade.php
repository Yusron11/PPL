@extends('layouts.main')

@section('container')
    <div class="product-banner">
        <h2 class="banner-text">Produk Kopin.</h2>
    </div>
    
    <div class="container">
        <div class="product-container">
            <div class="product-images" style="width: 50%; float: left;">
                <img src="https://source.unsplash.com/500x400?coffeebeans" alt="Gambar Produk">
            </div>
            <div class="product-details" style="width: 50%; float: right;">
                <h2 class="product-name" style="font-size: 24px; font-weight: bold;">{{ $product->name }}</h2>
                <p class="product-price" style="font-size: 12px;">{{ $product->price }}</p>
                <p class="product-stock" style="font-size: 12px;">stok : {{ $product->stok }} Kg </p>
                <div class="order-container">
                    <a href="{{ "/products/$product->slug/order" }}" class="order-button">Pesan Sekarang</a>
                </div>
            </div>            
        </div>
    
        <hr style="border-color: #ccc;">
    
        <div class="navbar-product">
            <button class="navbar-button active" onclick="toggleSellerInfo()">Petani</button>
            <button class="navbar-button" onclick="toggleProductDescription()">Deskripsi</button>
        </div>

        <div class="seller-info active" id="seller-info">
            <img src="https://source.unsplash.com/500x400?profil" alt="Gambar Penjual" class="seller-image">
            <p class="seller-name">Nama Petani</p>
        </div>

        <div class="product-description" id="product-description">
            <h4>Deskripsi Produk</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend eros sit amet orci aliquet.</p>
        </div>
    </div>
        
@endsection

@section('scripts')
    <script>
        function toggleSellerInfo() {
            var sellerInfo = document.getElementById("seller-info");
            var productDescription = document.getElementById("product-description");

            sellerInfo.classList.add("active");
            productDescription.classList.remove("active");

            // Mengubah status "active" pada tombol navbar
            document.querySelectorAll('.navbar-button').forEach(function(btn) {
                btn.classList.remove('active');
            });
            document.querySelector('.navbar-button:nth-child(1)').classList.add('active');
        }

        function toggleProductDescription() {
            var sellerInfo = document.getElementById("seller-info");
            var productDescription = document.getElementById("product-description");

            sellerInfo.classList.remove("active");
            productDescription.classList.add("active");

            // Mengubah status "active" pada tombol navbar
            document.querySelectorAll('.navbar-button').forEach(function(btn) {
                btn.classList.remove('active');
            });
            document.querySelector('.navbar-button:nth-child(2)').classList.add('active');
        }
    </script>
@endsection
