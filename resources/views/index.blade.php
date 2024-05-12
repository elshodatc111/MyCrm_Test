@extends('layouts.home')

@section('content')
    <section id="hero-wrap" class="d-flex align-items-center pt-0 mt-0" data-stellar-background-ratio="0.5">
        <video autoplay muted loop id="myVideo" class="w-100">
            <source src="./video/index.mp4" type="video/mp4">
        </video>
        <div class="container position-absolute pt-0 mt-0" data-aos="fade-up" data-aos-delay="500">
			<div class="row no-gutters slider-text align-items-center pt-0 mt-0">
				<div class="col-md-8 ftco-animate d-flex align-items-end pt-0 mb-0">
					<div class="text w-100 pt-0 mt-0">
						<h1 class="mb-1 mt-0 text-danger">ATKO koreys tili markazi</h1>
						<p class="mb-1 mt-0 text-white p-3" style="background-color:rgba(0,0,0,0.5)">@include('layouts.banner_text')</p>
						@guest
							<p><a href="{{ route('login') }}" class="btn btn-primary py-3 px-4"><i class="bi bi-person"></i>KIRISH</a> 
							<a href="{{ route('register') }}" class="btn btn-white py-3 px-4"><i class="bi bi-person-add"></i>Ro‘yhatdan o‘tish</a></p>
						@endguest
					</div>
				</div>
			</div>
        </div>
    </section>


	


    <section class="ftco-section ftco-no-pt mt-5 mt-md-0">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="bi bi-alphabet-uppercase text-secondary"></span>
	    					</div>
    					</div>
    					<h2><a href="#">{{ $Catigory[0]['name'] }}</a></h2>
    					<p>@include('layouts.text1')</p>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
	    					<div class="icon d-flex align-items-center justify-content-center">
								<span class="bi bi-calendar2-date text-secondary"></span>
	    					</div>
    					</div>
    					<h2><a href="#">{{ $Catigory[1]['name'] }}</a></h2>
  						<p>@include('layouts.text2')</p>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
	    					<div class="icon d-flex align-items-center justify-content-center">
								<span class="bi bi-book text-secondary"></span>
	    					</div>
    					</div>
    					<h2><a href="#">{{ $Catigory[2]['name'] }}</a></h2>
  						<p>@include('layouts.text3')</p>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
	    					<div class="icon d-flex align-items-center justify-content-center">
								<span class="bi bi-chevron-bar-contract text-secondary"></span>
	    					</div>
    					</div>
    					<h2><a href="#">{{ $Catigory[0]['name'] }}</a></h2>
  						<p>@include('layouts.text4')</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	<div class="containr">
	
	</div>
	<section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img bg-light" id="section-counter">
    	<div class="container">
    		<div class="row">
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-4 mb-4">
						<div class="text align-items-center">
							<strong class="number" data-number="{{ $Statistika['kurslar']+2 }}">0</strong>
							<span>Online kurslar</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-4 mb-4">
						<div class="text align-items-center">
							<strong class="number" data-number="{{ $Statistika['kitoblar']+8 }}">0</strong>
							<span>Kitoblar</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-4 mb-4">
						<div class="text align-items-center">
							<strong class="number" data-number="{{ $Statistika['techers']+3 }}">0</strong>
							<span>O'qituvchilar</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-4 mb-4">
						<div class="text align-items-center">
							<strong class="number" data-number="{{ $Statistika['student']+25 }}">0</strong>
							<span>O'quvchilar</span>
						</div>
					</div>
				</div>
        	</div>
    	</div>
    </section>

	<section class="container ftco-section ftco-no-pt">
    	<div class="container-fluid px-md-4">
    		<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading mt-3 pt-2">Online kurslar</span>
					<h2>Yangi kurslar</h2>
				</div>
        	</div>
    		<div class="row">
				@foreach($Cours as $item)
				<div class="col-lg-6">
					<div class="book-wrap book-wrap-2 d-md-flex">
						<div class="img img-2 d-flex justify-content-end" style="background-image: url(./images/{{ $item['image'] }});"></div>
						<div class="text p-4">
							<p class="mb-2"><b>Narxi: </b><span class="price">{{ $item['price1'] }} so'm</span></p>
							<h2>{{ $item['cours_name'] }}</h2>
							<span class="position"><b>O'qituvchi:</b> {{ $item['techer'] }}</span>
							<p>{{ $item['min_text'] }}</p>
							<div>
								<a href="{{ route('cours_show',$item['id'] ) }}" class="btn btn-success">Batafsil...</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
    		</div>
    	</div>
    </section>
@endsection