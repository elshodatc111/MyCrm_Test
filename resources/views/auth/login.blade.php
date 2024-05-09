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
@endsection
