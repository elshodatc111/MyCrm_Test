@extends('layouts.home')

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate mb-0 text-center">
					<p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{ route('index') }}">Bosh sahifa <i class="fa fa-chevron-right"></i></a></span> <span>Kitoblar<i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Kitoblar</h1>
				</div>
			</div>
		</div>
	</section>
		
	<section class="ftco-section">
    	<div class="container-fluid px-md-5">
    		<div class="row">
				@foreach($Book as $item)
    			<div class="col-md-6 col-lg-4 d-flex">
    				<div class="book-wrap d-lg-flex">
    					<div class="img d-flex justify-content-end" style="background-image: url(images/{{ $item['image'] }});"></div>
    					<div class="text p-4">
    						<h2>{{ $item['name'] }}</h2>
    						<span class="position">{{ $item['autor'] }}</span>
							<a href="./books/{{ $item['link'] }}" class="btn btn-success text-center">Kitobni yuklash</a>
    					</div>
    				</div>
    			</div>
				@endforeach
    		</div>
    	</div>
    </section>



@endsection