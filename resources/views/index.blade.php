@extends('layouts.home')

@section('content')
    <section class="hero-wrap" style="background-image: url('./images/bg_4.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center">
				<div class="col-md-8 ftco-animate d-flex align-items-end">
					<div class="text w-100">
						<h1 class="mb-4 text-danger">ATKO koreys tili markazi</h1>
						<p class="mb-4 text-white p-3" style="background-color:rgba(0,0,0,0.5)">Yurtimizning eng yetakchi o‘qituvchilari tomonidan tayyorlangan videodarslarni tomosha qilib, siz nafaqat ishonchli o‘qituvchi qidirishdan holi bo‘lasiz, balki noyob metodika orqali darslarni qiziq va oson yo‘llar bilan o‘zlashtirishingiz mumkin.</p>
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
    					<h2><a href="#">Koreys tili alifbosi!</a></h2>
    					<p>Koreys alifbosi, Koreys tilida erkin o'qish, Koreys tilida yozish, Sodda so'zlarni eshitib tushunish, Sodda gaplar tuzish, Bo'g'inlarni to'g'ri o'qish va Koreys tilida sanash o'rganiladi.</p>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
	    					<div class="icon d-flex align-items-center justify-content-center">
								<span class="bi bi-calendar2-date text-secondary"></span>
	    					</div>
    					</div>
    					<h2><a href="#">Koreya ish imtixoni uchun maxsus kurslar!</a></h2>
  						<p>Ish imtixoniga kerek bo'ladigan maxsus lug'atlar, madaniyat ma'lumotlari, Ish imtixoni ehtimoliy testlar, ularni yechimi va tahlili.</p>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
	    					<div class="icon d-flex align-items-center justify-content-center">
								<span class="bi bi-book text-secondary"></span>
	    					</div>
    					</div>
    					<h2><a href="#">ATKO Koreys tili o'quv qo'llanmalari.</a></h2>
  						<p> ATKO koreys tili markazi o`quv qo'llanmalari gramatika qismi video qo'llanma tarzida yozib chiqilgan.</p>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
	    					<div class="icon d-flex align-items-center justify-content-center">
								<span class="bi bi-chevron-bar-contract text-secondary"></span>
	    					</div>
    					</div>
    					<h2><a href="#">Topik II</a></h2>
  						<p>O`rta va yuqori daraja gramatikasi va ularga sharhlar O`rta va yuqori daraja so`zlar, antonim, sinonim, omonim so`zlar O`rta va yuqori daraja testlari va u testlar tahlili o`rin olgan.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

	<section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img bg-light" id="section-counter">
    	<div class="container">
    		<div class="row">
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-4 mb-4">
						<div class="text align-items-center">
							<strong class="number" data-number="19">0</strong>
							<span>Online kurslar</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-4 mb-4">
						<div class="text align-items-center">
							<strong class="number" data-number="45">0</strong>
							<span>Kitoblar</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-4 mb-4">
						<div class="text align-items-center">
							<strong class="number" data-number="15">0</strong>
							<span>O'qituvchilar</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-4 mb-4">
						<div class="text align-items-center">
							<strong class="number" data-number="120">0</strong>
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
				<div class="col-lg-6">
					<div class="book-wrap book-wrap-2 d-md-flex">
						<div class="img img-2 d-flex justify-content-end" style="background-image: url(./images/book-1.jpg);"></div>
						<div class="text p-4">
							<p class="mb-2"><b>Narxi: </b><span class="price">150 000 so'm</span></p>
							<h2>Ish imtixoni (읽기-600) testlari</h2>
							<span class="position"><b>O'qituvchi:</b> Abbos Tulanov</span>
							<p>Koreya ish imtixoni uchun testlar.</p>
							<div>
								<a href="" class="btn btn-success">Sotib olish</a>
								<a href="" class="btn btn-warning text-white">Darsni boshlash</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="book-wrap book-wrap-2 d-md-flex">
						<div class="img img-2 d-flex justify-content-end" style="background-image: url(./images/book-1.jpg);"></div>
						<div class="text p-4">
							<p class="mb-2"><b>Narxi: </b><span class="price">150 000 so'm</span></p>
							<h2>Ish imtixoni (읽기-600) testlari</h2>
							<span class="position"><b>O'qituvchi:</b> Abbos Tulanov</span>
							<p>Koreya ish imtixoni uchun testlar.</p>
							<div>
								<a href="" class="btn btn-success">Sotib olish</a>
								<a href="" class="btn btn-warning text-white">Darsni boshlash</a>
							</div>
						</div>
					</div>
				</div>
    		</div>
    	</div>
    </section>
@endsection