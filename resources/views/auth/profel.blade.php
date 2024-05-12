@extends('layouts.home')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate mb-0 text-center">
                    <h1 class="mb-0 bread text-danger">{{ Auth::user()->name }}</h1>
                    <p class="m-0"><b class="text-primary p-0 m-0">Email:</b> {{ Auth::user()->email }}</p>
                    <p class="m-0"><b class="text-primary p-0 m-0">Telefon:</b> {{ Auth::user()->phone }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-lg-12 text-center">
                        <h3>Mening kurslarim</h3>
                    </div>
                    @forelse($Cours as $item)
					<div class="col-lg-6">
                        <div class="book-wrap book-wrap-2 d-md-flex">
                            <div class="img img-2 d-flex justify-content-end" style="background-image: url(images/{{ $item['image'] }});"></div>
                            <div class="text p-4">
                                <p class="mb-2"><b>Muddat: </b><span class="price">{{ $item['end_data'] }}</span></p>
                                <h2>{{ $item['cours_name'] }}</h2>
                                <span class="position"><b>O'qituvchi:</b> {{ $item['techer'] }}</span>
                                <p>{{ $item['min_text'] }}</p>
                                <div>
                                    <a href="{{ route('profel_show',$item['id']) }}" class="btn btn-success text-white">Darsni boshlash</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-lg-12 text-center">
                        <p>Sizning aktiv kurslaringiz mavjud emas.</p>
                    </div>
                    @endforelse
					<div class="col-lg-12 pt-5 text-center">
                        <a href="" class="btn btn-danger text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-left"></i> Chiqish
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
				</div>
			</div>	
		</section>
@endsection