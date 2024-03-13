<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pet Shop - Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
</head>

<body>
    <div class="navbar navigasi">
        <a class="navbar-brand" href="#">
            <img src="{{URL::asset('/images/logo-dog.png')}}" alt="logo-dog" width="36" height="36" class="mx-2 mb-1">
            <span class="title fw-bold">Pet Shop Cihuahua</span>
        </a>
    </div>
    <div class="main-bg position-relative">
        <div class="card form-sign position-absolute px-2">
            <div class="card-body">
                <form action="/login" method="POST">
                    @csrf
                    <div class="sub-title text-center fw-bold mb-3">Login</div>
                    <div class="d-flex flex-column">
                        <div class="form-group my-1">
                            <input title="Masukkan Email Anda" id='email' name="email" type="email" class="form-control mb-2" placeholder="No. Handphone/Email">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group my-1">
                            <!-- <p class="mx-1 mb-2"><b>Password</b></p> -->
                            <!-- name, id, value -->
                            <input title="Masukkan Password Anda" id='password' name="password" type="password" class="form-control mb-2" placeholder="Password">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="text-primary text-only text-end fw-bold">
                            <a href="#" class="text-decoration-none">Lupa Password?</a>
                        </div>
                        <button type="submit" class="bg-dark text-white fw-bold mx-auto mt-3 px-5 py-2 border-0 rounded">
                            <span class="me-1">Login</span>
                        </button>
                    </div>
                </form>
                <div class="text-center my-3">
                    <hr class="sep"> Atau
                    <hr class="sep">
                </div>
                <div class="d-flex flex-column">
                    <button type="submit" class="bg-light mx-auto px-3 pb-1 pt-2 border-0 rounded">
                        <img src="{{URL::asset('/images/logo-google.png')}}" alt="logo-google" width="24" height="24" class="mx-2 mb-1" style="--bs-bg-opacity: .15;">
                        <span class="text-only me-1">Masuk dengan Google</span>
                    </button>
                    <div class="text-only text-center">
                        <p class="my-3">Belum punya akun? <a href="#" class="text-danger fw-bold text-decoration-none">Daftar</a></p>
                        <br><span class="text-secondary mt-5">© Copyright 2024 All Rights Reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($message = Session::get('failed'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</body>

</html>