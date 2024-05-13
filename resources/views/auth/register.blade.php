<<<<<<< HEAD
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
                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
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
=======
@extends('layouts.login')
@section('title',"Ro'yhatdan o'tish")
@section('content')
<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    <div class="card mb-3">
        <div class="card-body">
            <div class="pt-2 pb-2">
                <h5 class="card-title text-center pb-0 my-2 fs-4">KIRISH</h5>
            </div>
            <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}" novalidate>
                @csrf
                <label for="name" class="form-label m-0">FIO</label>
                <input type="text" name="name" class="form-control m-0" required>
                <label for="addres" class="form-label m-0 mt-1">Addres</label>
                <input type="text" name="addres" class="form-control m-0" required>
                <label for="phone" class="form-label m-0 mt-1">Phone</label>
                <input type="text" name="phone" class="form-control m-0" required>
                <label for="phone2" class="form-label m-0 mt-1">Phone2</label>
                <input type="text" name="phone2" class="form-control m-0" required>
                <label for="tkun" class="form-label m-0 mt-1">Tug'ilgan kun</label>
                <input type="date" name="tkun" class="form-control m-0" required>
                <label for="email" class="form-label m-0 mt-1">Login</label>
                <input type="text" name="email" class="form-control m-0" required>
                <label for="password" class="form-label m-0 mt-1">Parol</label>
                <input type="password" name="password" class="form-control m-0" required>
                <button class="btn btn-primary w-100" type="submit">Ro'yhatdan o'tish</button>
            </form>
        </div>
    </div>
</div>

>>>>>>> 5288082 (Save)
@endsection
