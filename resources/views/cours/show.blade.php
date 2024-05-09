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
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/MzwiXK8lzBo"></iframe>
                    <h2 class="mb-3">Kursning nomi</h2>
                    <p>Kurs haqida two Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
                    
                </div> 
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories text-center">
                            <h3 class="mb-0">O'qituvchi</h3>
                            <img src="../../images/about-1.jpg" style="width:50%;border-radius:50%;margin:0 auto">
                            <h5>Elshod Musurmonov</h5>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <li>
                                <span><i class="fa fa-list-ol"></i> Mavzular soni:</span>
                                <span class="float-right"><b>31 </b></span>
                            </li>            
                            <li>
                                <span><i class=" flaticon-play-button-1"></i> Davomiyligi:</span>
                                <span class="float-right"><b>06:01:33 </b></span>
                            </li>
                            <li>
                                <span><i class="flaticon-key-1"></i> A'zolikning davomiyligi:</span>
                                <span class="float-right"><b>3 oy </b></span>
                            </li>
                            <div class="w-100 text-center text-success" style="font-size:45px;">
                                150 000 so'm
                            </div>
                            <div class="" style="display: flex; justify-content: space-around">
                                <a class="btn btn-danger" href="{{ route('cours_show_pay',1) }}" >Sotib olish</a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 


@endsection