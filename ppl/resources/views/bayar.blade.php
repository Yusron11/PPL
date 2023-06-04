<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/bayar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nucleo-svg.css') }}">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <title>KOPIN | Detail Pembayaran</title>
  </head>

  <body>

    <div class="ptf-wrapper">
        <header class="ptf-header">
            <div class="product-banner">
                <h2 class="banner-text">KOPIN</h2>
            </div>
        </header>
        <div class="ptf-body pt-60 pb-60">
            <div class="page-container">
                <div class="woocommerce">
                    <div class="woocommerce-order">
                        <div class="wwc-checkout-message">
                            <h2 class="wwc-checkout-message__title">Terima kasih telah melakukan pemesanan di website kami</h2>
                        <div class="wwc-checkout-message__desc">Untuk respons yang lebih cepat, mohon kirim bukti pembayaran Anda dengan mengklik tombol di bawah ini.</div>
                            <a href="https://wa.me/6285649258937" class="button rt-btn rt-btn--whatsapp" target="_blank">
                                <i class="fab fa-whatsapp"></i> Kirim Detail Pesanan
                            </a>
                        </div>
                        <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">Terima kasih. Pesanan Anda telah diterima.</p>
                        <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">
                            <li class="woocommerce-order-overview__order order">
                                Nomor Pesanan: <strong>{{ $order->id }}</strong>
                            </li>
                            <li class="woocommerce-order-overview__date date">
                                Tanggal: <strong>{{ $order->created_at->format('d M Y') }}</strong>
                            </li>                              
                            <li class="woocommerce-order-overview__total total">
                                Total: <strong><span class="woocommerce-Price-amount amount"><bdi>Rp {{ number_format($order->total_harga + 9000, 0, ',', '.') }}</bdi></span></strong>
                            </li>                              
                            <li class="woocommerce-order-overview__payment-method method">
                                Metode pembayaran: <strong>Transfer bank</strong>
                            </li>
                        </ul>
                        <p>Anda telah memilih untuk membayar menggunakan transfer bank. Silakan menyelesaikan pembayaran melalui salah satu rekening kami</p>
                        <section class="woocommerce-bacs-bank-details">
                            <h2 class="wc-bacs-bank-details-heading">Detail bank kami</h2>
                            <h3 class="wc-bacs-bank-details-account-name">Bank Mandiri</h3>
                            <ul class="wc-bacs-bank-details order_details bacs_details">
                                <li class="bank_name">Atas Nama : <strong>Ahmad Yusron</strong></li>
                                <li class="account_number">Nomor Rekening: <strong>56855546</strong></li>
                            </ul>
                            <h3 class="wc-bacs-bank-details-account-name">BNI</h3>
                            <ul class="wc-bacs-bank-details order_details bacs_details">
                                <li class="bank_name">Atas Nama : <strong>Ahmad Yusron</strong></li>
                                <li class="account_number">Nomor Rekening: <strong>0982472042</strong></li>
                            </ul>
                            <h3 class="wc-bacs-bank-details-account-name">BCA</h3>
                            <ul class="wc-bacs-bank-details order_details bacs_details">
                                <li class="bank_name">Atas Nama : <strong>Ahmad Yusron</strong></li>
                                <li class="account_number">Nomor Rekening: <strong>90190036643</strong></li>
                            </ul>
                        </section>
                        <section class="woocommerce-order-details">
                            <h2 class="woocommerce-order-details__title">Rincian Pesanan</h2>
                            <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
                            <thead>
                                <tr>
                                    <th class="woocommerce-table__product-name product-name">Produk</th>
                                    <th class="woocommerce-table__product-table product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="woocommerce-table__line-item order_item">
                                    <td class="woocommerce-table__product-name product-name" colspan="2" style="padding-top: 0 !important; padding-bottom: 0 !important">
                                        <div class="rt-cart-item">
                                        <div class="rt-cart-item__thumbnail rt-img rt-img-full">
                                            <img width="100" height="100" src="https://elektra.saudagarwp.com/wp-content/uploads/sites/24/2021/12/product-miband-3-100x100.webp" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy" srcset="https://elektra.saudagarwp.com/wp-content/uploads/sites/24/2021/12/product-miband-3-100x100.webp 100w, https://elektra.saudagarwp.com/wp-content/uploads/sites/24/2021/12/product-miband-3-300x300.webp 300w, https://elektra.saudagarwp.com/wp-content/uploads/sites/24/2021/12/product-miband-3.webp 501w" sizes="(max-width: 100px) 100vw, 100px">
                                        </div>
                                        <div class="rt-cart-item__body">
                                            <h5 class="rt-cart-item__title">
                                                <a href="https://elektra.saudagarwp.com/produk/ripple-blue/">{{ $order->product->name }}</a>
                                            </h5>
                                            <div class="rt-cart-item__meta">
                                                Qty: {{ $order->jumlah }}
                                            </div>
                                            <div class="rt-cart-item__price">
                                                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp {{ number_format($order->product->price, 0, ',', '.') }}</bdi></span>
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="row">Subtotal:</th>
                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">Pengiriman:</th>
                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp </span>9.000</span>&nbsp;<small class="shipped_via">via JNE Reg</small></td>
                                </tr>
                                <tr>
                                    <th scope="row">Metode pembayaran:</th>
                                    <td>Transfer bank</td>
                                </tr>
                                <tr>
                                    <th scope="row">Total:</th>
                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp {{ number_format($order->total_harga + 9000, 0, ',', '.') }}</span></td>
                                </tr>
                            </tfoot>
                            </table>
                        </section>
                        <div class="rt-thankpage-action">
                            <a href="/dashboard" class="btn-kembali">Kembali ke dashbaord</a>
                        </div>
                    </div>
                </div>
                <p></p>
            </div>
        </div>
        <footer class="ptf-footer">
            <p>Hak Cipta &copy; 2023 KOPIN</p>
        </footer>
    </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>