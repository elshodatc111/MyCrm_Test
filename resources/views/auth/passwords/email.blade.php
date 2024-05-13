<<<<<<< HEAD
@extends('layouts.home')

@section('content')
<hr class="p-0 m-0 mb-3">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-5">
            <div class="card mb-5">
                <div class="card-body">
                    <h3 class="w-100 text-center">Parolni yangilash</h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            Parolni tiklash havolasini elektron pochta orqali yubordik.
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <label for="email" class="col-form-label text-md-end">Emailingizni kiriting</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                Qayta urinishdan oldin kuting.
                            </span>
                        @enderror
                        <button type="submit" class="btn btn-primary w-100 mt-3">
                        Parolni tiklash havolasini yuboring
                        </button>
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
>>>>>>> 5288082 (Save)
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
