@extends('layouts.home')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('../../images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate mb-0 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{ route('index') }}">Bosh sahifa <i class="fa fa-chevron-right"></i></a></span> 
                    <span class="mr-2"><a href="{{ route('cours') }}">Kurslar <i class="fa fa-chevron-right"></i></a></span> 
                    <span>Kurs <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Kursning nomi</h1>
                </div>
            </div>
        </div>
    </section>
		
	<section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p><img src="../../images/image_1.jpg" alt="" class="img-fluid"></p>
                    <h2 class="mb-3">Kurs mavzusi</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
                    
                </div> 
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Mavzular</h3>
                            <li><a href="#">Relation Problem <span class="fa fa-chevron-right"></span></a></li>
                            <li><a href="#">Couples Counseling <span class="fa fa-chevron-right"></span></a></li>
                            <li><a href="#">Depression Treatment <span class="fa fa-chevron-right"></span></a></li>
                            <li><a href="#">Family Problem <span class="fa fa-chevron-right"></span></a></li>
                            <li><a href="#">Personal Problem <span class="fa fa-chevron-right"></span></a></li>
                            <li><a href="#">Business Problem <span class="fa fa-chevron-right"></span></a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 


@endsection