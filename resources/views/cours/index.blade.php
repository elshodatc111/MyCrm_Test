@extends('layouts.home')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate mb-0 text-center">
                    <p class="breadcrumbs mb-0">
                        <span class="mr-2"><a href="{{ route('index') }}">Bosh sahifa <i class="fa fa-chevron-right"></i></a></span> 
                        <span>Kurslar <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h1 class="mb-0 bread">Online kurslar</h1>
                </div>
            </div>
        </div>
    </section>
		
    <section class="ftco-section">
        <div class="container">
            <div class="row mb-5">
                @foreach($Courses as $item)
                <div class="col-lg-6">
                    <div class="book-wrap book-wrap-2 d-md-flex">
                        <div class="img img-2 d-flex justify-content-end" style="background-image: url(images/{{ $item['image'] }});"></div>
                        <div class="text p-4">
                            <p class="mb-2"><b><i class="bi bi-coin"></i> Narxi: </b><span class="price">{{ $item['price1'] }} so'm</span></p>
                            <h2>{{ $item['techer'] }}</h2>
                            <span class="position"><b>O'qituvchi:</b> {{ $item['techer'] }}</span>
                            <p>{{ $item['min_text'] }}.</p>
                            <div>
                                <a href="{{ route('cours_show',$item['id'] ) }}" 
                                    class="btn btn-success text-white">
                                    Batafsil...</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>	
    </section>


@endsection