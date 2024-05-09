@extends('layouts.home')

@section('content')
<hr class="m-0 p-0 mb-2">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mb-5">
                <div class="card-body">
                    <h3 class="w-100 text-center">Parolni yangilash.</h3>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <label for="email" class="col-form-label text-md-end">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password" class="col-form-label text-md-end">Yangi parol</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password-confirm" class="col-form-label text-md-end">Parolni takrorlang</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <button type="submit" class="btn btn-primary w-100 mt-2">Parolni yangilash</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
