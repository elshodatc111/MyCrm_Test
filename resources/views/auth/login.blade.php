<<<<<<< HEAD
@extends('layouts.home')

@section('content')
<hr class="m-0 p-0">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mt-2 mb-5">
                <div class="card-body">
                    <h3 class="w-100 text-center">KIRISH</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="email" class="col-form-label text-md-end">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>Login yoki parol xato.</strong>
                            </span>
                        @enderror
                        <label for="password" class="col-form-label text-md-end">Parol</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>Login yoki parol xato</strong>
                            </span>
                        @enderror
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Parolni eslab qolish</label>
                        </div>  
                        <button type="submit" class="btn btn-primary w-100">Kirish</button>
                        <div style="text-align:right">                    
                            @if (Route::has('password.request'))
                                <a class="btn btn-link pb-0" href="{{ route('password.request') }}">
                                    Parolni unitdingizmi?
                                </a>
                            @endif
                            @if (Route::has('password.request'))
                                <a class="btn btn-link mt-0 pt-0" href="{{ route('register') }}">
                                    Ro'yhatdan o'tish
                                </a>
                            @endif
                        </div>
                                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
=======
@extends('layouts.login')
@section('title', 'Kirish')
@section('content')
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
                <span class="d-none d-lg-block">MyCrm</span>
            </a>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">KIRISH</h5>
                </div>
                <form class="row g-3 needs-validation" action="{{ route('login') }}" method="POST" novalidate>
                    @csrf
                    <div class="col-12">
                        <label for="yourUsername" class="form-label">Login</label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Parol</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Parolni eslab qolish</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">KIRISH</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="credits">
            <img src="{{ env('HTTP_URL')}}assets/img/logo.png" style="width:18px;"> 
            <strong> <span> CodeStart</span></strong> Development Center
        </div>
    </div>
>>>>>>> 5288082 (Save)
@endsection
