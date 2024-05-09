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
                        <img src="../../../images/about-1.jpg" style="width:100%">
                        <h3 class="m-0 p-0 w-100 text-center">Kursning nomi</h3>
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
                            <p class="w-100 text-center">To'lov turini tanlang</p>
                            <form method="POST" action="https://test.paycom.uz">
                                <input type="hidden" name="merchant" value="{Merchant ID}"/>
                                <input type="hidden" name="amount" value="{сумма чека в ТИИНАХ}"/>
                                <input type="hidden" name="account[{field_name}]" value="{field_value}"/>
                                <input type="hidden" name="lang" value="ru"/>
                                <input type="hidden" name="callback" value="{url возврата после платежа}"/>
                                <input type="hidden" name="callback_timeout" value="{miliseconds}"/>
                                <input type="hidden" name="description" value="{Описание платежа}"/>
                                <input type="hidden" name="detail" value="{JSON объект детализации в BASE64}"/>
                                <button type="submit" class="btn">
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