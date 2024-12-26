@extends('master')
@section('contents')


<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Currencies Trading</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Currencies Trading</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__shape">
                <span class="page-header__shape-item page-header__shape-item--1"><img src="{{ asset('') }}assets/images/header/2.png"
                        alt="shape-icon"></span>
            </div>
        </div>
    </div>
</section>
<!-- ================> Page header end here <================== -->

<!-- ===============>> Service section start here <<================= -->
<div class="service-details padding-bottom section-bg-color" style="margin-top:30px;">
    <div class="container">
        <div class="service-details__wrapper">
            <div class="row flex-lg-row-reverse ">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-1"> <a class="stretched-link" href="javascript:void(0);">What is currencies trading</a></h3>
                                <p class="mb-0">Currencies trading, or foreign exchange trading, involves buying and selling currencies in the global marketplace. It’s the largest financial market in the world, with trillions of dollars exchanged daily. Traders engage in currencies trading to profit from changes in currency value.</p>
                            </div>
                                <h3 class="mb-1">Here are some key points:</h3>
                                <p class="mb-1">1.	<b>Currency Pairs :</b> Currencies are traded in pairs (e.g., EUR/USD), where one currency is exchanged for another. The first currency is the base currency, and the second is the quote currency.</p>
                                <p class="mb-1">2.	<b>Exchange Rate :</b> This is the value of one currency in terms of another. It fluctuates based on supply and demand, economic factors, and geopolitical events.</p>
                                <p class="mb-1">3.	<b>Leverage :</b> Currencies trading often uses leverage, allowing traders to control larger positions with a smaller amount of capital. While this can amplify profits, it also increases the risk of losses.</p>
                                <p class="mb-1">4.	<b>Market Hours :</b> The currencies market operates 24 hours a day, five days a week, due to the global nature of currencies, with trading occurring across major financial centers.</p>
                                <p class="mb-1">5.	<b>Analysis :</b> Traders use technical analysis (charts and indicators) and fundamental analysis (economic news and events) to make informed decisions</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
           
           

        </div>
    </div>
</div>
</div>
<!-- ===============>> Service section start here <<================= -->

@endsection
