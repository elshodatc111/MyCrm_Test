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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
