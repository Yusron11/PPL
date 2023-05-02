<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css\style.css">

    <title>Masuk</title>
  </head>
  <body>
    <section class="login d-flex">
        <div class="login-left">
            <a href="/" class="btn-home nuxt-link-active">Kembali ke homepage</a>
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('LoginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('LoginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <div class="header">
                        <h1>
                            Selamat Datang 
                            <br>
                            Kembali di KOPIN
                        </h1>
                    </div>

                    <form action="/login" method="POST">
                        @csrf

                        <div class="login-form">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukkan Email" autofocus required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="login-form">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                        </div>
                        <div class="login-form">
                            <a href="/forgot" >Lupa Password</a>
                        </div>
                        <div class="login-form">
                            <button class="masuk" type="submit" name="submit">Masuk</button>
                        </div>
                        <div class="login-form">
                            <div class="text-center">
                                    <span class="d-inline">Belum memiliki akun? <a href="/register" class="d-inline text-decoration-none">Daftar!</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="login-right">
            <img src="img/img1.png" class="d-block w-100" alt="KOPIN">
            <a href="/" class="btn-home nuxt-link-active">Kembali ke homepage</a>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>