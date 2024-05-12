@extends('layouts.home')

@section('content')
<hr class="p-0 m-0">
		
	<section class="ftco-section ftco-degree-bg  pt-0 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate"></div>
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate  pt-0 mt-0">
                    <div class="sidebar-box ftco-animate pt-0 mt-0">
                        <p class="w-100 text-center m-0 p-0 text-danger">Kursni sotib olish</p>
                        <img src="../../../images/{{ $Cours['image'] }}" style="width:100%">
                        <h3 class="m-0 p-0 w-100 text-center">{{ $Cours['cours_name'] }}</h3>
                        <div class="categories">
                            <li>
                                <span><i class="fa fa-list-ol"></i> Mavzular soni:</span>
                                <span class="float-right"><b>{{ $Mavzu }} </b></span>
                            </li>            
                            <li>
                                <span><i class=" flaticon-play-button-1"></i> Davomiyligi:</span>
                                <span class="float-right"><b>{{ $Cours['davomiyligi'] }} </b></span>
                            </li>
                            <li>
                                <span><i class="flaticon-key-1"></i> A'zolikning davomiyligi:</span>
                                <span class="float-right"><b>{{ $Cours['azolik'] }} kun </b></span>
                            </li>
                            <div class="w-100 text-center text-success" style="font-size:45px;">
                                {{ $Cours['price1'] }} so'm
                            </div>
                            <p class="w-100 text-center">To'lov turini tanlang</p>
                            <form method="POST" action="https://checkout.paycom.uz">
                                <input type="hidden" name="merchant" value="656989b794dc4293bdd42b87"/>
                                <input type="hidden" name="amount" value="{{$Cours['price1'].'00'}}"/>
                                <input type="hidden" name="account[order_id]" value="{{$Order->id}}"/>
                                <input type="hidden" name="lang" value="uz"/>
                                <input type="hidden" name="callback" value="{https://atko.uz/}"/>
                                <input type="hidden" name="callback_timeout" value="{15}"/>
                                <input type="hidden" name="description" value="ATKO o'quv markaz online kurslari uchun to'lov"/>
                                <button type="submit" class="btn"><!---->
                                    <img src="../../../images/payme.png" style="width:50%;margin:0 auto;">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 


@endsection