@extends('layouts.home')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('../../../images/bg_3.jpg');" data-stellar-background-ratio="0.5">
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
                    <h2 class="mb-3">{{ $Mavzus['mavzu_name'] }}</h2>
                    <div class="video" style="width:100%">
                        <video src="{{ $Mavzus['video'] }}" style="width:100%" id="myvideo" controls muted controlsList="nodownload"></video>
                    </div>
                    <p>{{ $Mavzus['text'] }}</p>
                </div> 
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Mavzular</h3>
                            @foreach($Mavzu as $item)
                            <li class="@if($item['id']==$Mavzus['id']) active @endif"><a href="{{ route('profel_show_video',$item['id']) }}">{{ $item['mavzu_name'] }}<span class="fa fa-chevron-right"></span></a></li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 


@endsection