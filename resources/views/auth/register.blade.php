@extends('layouts.home')

@section('content')
<hr class="p-0 m-0 mb-3">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="w-100 text-center">Ro'yhatdan o'tish</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label for="name" class="col-form-label text-md-end">Ismingiz</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="phone" class="col-form-label text-md-end">Telefon raqam (9X XXX 1234)</label>
                        <input id="phone" type="number" max=12 min=9 class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="email" class="col-form-label text-md-end">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password" class="col-form-label text-md-end">Parol</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password-confirm" class="col-form-label text-md-end">Parolni takrorlang</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <button type="submit" class="btn btn-primary mt-3">Ro'yhatdan o'tish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
