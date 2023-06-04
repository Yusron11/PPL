@extends('layouts.main')

@section('container')

    <div class="product-banner">
        <h2 class="banner-text">Pesan Produk Kopin.</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-container">
                    <form action="/products/{{ $product->slug }}/order" method="POST" id="form-order" class="mb-5">
                        @csrf
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" required>
                            @error('jumlah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="number" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ old('telepon') }}" required>
                            @error('telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn-pesan">Pesan</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="produk-container">
                    <div class="produk-images">
                        <img src="https://source.unsplash.com/500x400?coffeebeans" alt="Gambar Produk">
                    </div>
                    <div class="produk-details">
                        <h3 class="produk-name">{{ $product->name }}</h3>
                        <div class="produk-price-stock">
                            <p class="produk-price">{{ $price }}</p>
                            <p class="produk-stock">Stok: {{ $product->stok }} Kg</p>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>

    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rincian Pembelian</h5>
                </div>
                <div class="modal-body">
                    <h4><span id="modal-produk"></span></h4> <br>
                    <p><span id="modal-alamat"></span></p> <br>
                    <p>Jumlah     : <span id="modal-jumlah"></span></p>
                    <p>Harga      : <span id="modal-harga"></span></p>
                    <p>Pengiriman : <span> Rp. 9.000 via JNE reg</span></p>
                    <p>Total      : <span id="modal-total"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-batal" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn-bayar" id="modal-submit">Bayar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            // Ketika button "Bayar" diklik
            $('#form-order').on('submit', function (e) {
                e.preventDefault(); // Mencegah form submit secara default
                var produk = '{{ $product->name }}';
                var jumlah = parseInt($('#jumlah').val());
                var alamat = $('#alamat').val();
                var harga = parseInt('{{ $product->price }}');
                var total = harga * jumlah + 9000; // Menghitung total

                var formattedHarga = 'Rp ' + harga.toLocaleString('id-ID');
                var formattedTotal = 'Rp ' + total.toLocaleString('id-ID');

                $('#modal-produk').text(produk);
                $('#modal-jumlah').text(jumlah);
                $('#modal-alamat').text(alamat);
                $('#modal-harga').text(formattedHarga);
                $('#modal-total').text(formattedTotal);

                $('#exampleModal').modal('show'); // Menampilkan modal
            });

            // Ketika button "Selesai" di modal diklik
            $('#modal-submit').on('click', function () {
                // Menghapus kode $('#form-order').off('submit').submit();
                // Menggunakan kode berikut untuk mengirimkan formulir
                var form = $('#form-order');
                form.unbind('submit').submit(); // Mengirimkan form
            });
        });
    </script>
@endsection

