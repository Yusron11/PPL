<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css\style.css">

    <title>Daftar</title>
  </head>
  <body>
    <section class="register d-flex">
        <div class="register-left">
            <a href="/" class="btn-home nuxt-link-active">Kembali ke homepage</a>
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="header">
                        <h1>
                            Daftar 
                            <br>
                            Akun KOPIN
                        </h1>
                    </div>
                    <form action="/register" method="POST">
                        @csrf

                        <div class="register-form">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Masukkan Nama Lengkap" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="register-form">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Masukkan Username" value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="register-form">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="register-form">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="register-form">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Konfirmasi Password">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="register-form">
                            <button class="daftar mt-5" type="submit" name="submit">Daftar</button>
                        </div>
                        <div class="register-form">
                            <div class="text-center">
                                    <span class="d-inline">Sudah memiliki akun? <a href="/login" class="d-inline text-decoration-none">Masuk!</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="register-right">
            <img src="img/login.png" class="d-block w-100" alt="KOPIN">
            <a href="/" class="btn-home nuxt-link-active">Kembali ke homepage</a>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>