@extends('master')
@section('contents')


<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Trade Markets</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="#">Markets</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Trade Markets</li>
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
            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Welcome to the global markets</a>
                                </h3>
                                <p class="mb-0">Whether it's Currrency, stock CFDs, indices, commodities, and more, you have access to thousands of the world's financial markets at your fingertips.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-2 mb-10 my-10">
                <div class="col-lg-2">
                    <div class="card text-center mx-auto" style="border-radius: 15px; height:380px;background: var(--wh-color);">
                        <img src="{{ asset('') }}assets/images/others2/forex-icon.png" class="card-img-top mx-auto mt-2" alt="service-icon" style="width:96px;height:96px; display:block;">
                        <div class="card-body">
                            <h5 class="card-title">Currrency</h5>
                            <p class="card-text">Trade over 80 FX pairs and get majors as low as 0.0 with our RAW Spread Account.</p>
                            <a href="{{ url('/Forex') }}" class="trk-btn trk-btn-custom trk-btn--login" style="border-radius: 50px; padding: 10px 20px;">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card text-center mx-auto" style="border-radius: 15px; height:380px;background: var(--wh-color);">
                        <img src="{{ asset('') }}assets/images/others/market-equities-colour.svg" class="card-img-top mx-auto mt-2" alt="service-icon" style="width:96px;height:96px; display:block;">
                        <div class="card-body">
                            <h5 class="card-title">Stock CFDs</h5>
                            <p class="card-text">Buy and sell top companies via stock CFDs such as Netflix, Amazon, and more with Qorva Markets.</p>
                            <a href="{{ url('/Stocks') }}" class="trk-btn trk-btn-custom trk-btn--login" style="border-radius: 50px; padding: 10px 20px;">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card text-center mx-auto" style="border-radius: 15px; height:380px;background: var(--wh-color);">
                        <img src="{{ asset('') }}assets/images/others2/indices-icon.png" class="card-img-top mx-auto mt-2" alt="service-icon" style="width:96px;height:96px; display:block;">
                        <div class="card-body">
                            <h5 class="card-title">Indices</h5>
                            <p class="card-text">Access the most popular global CFD indices across American, European, Asian and Australian markets.</p>
                            <a href="{{ url('/Indices') }}" class="trk-btn trk-btn-custom trk-btn--login" style="border-radius: 50px; padding: 10px 20px;">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card text-center mx-auto" style="border-radius: 15px; height:380px;background: var(--wh-color);">
                        <img src="{{ asset('') }}assets/images/others2/crypto-icon.png" class="card-img-top mx-auto mt-2" alt="service-icon" style="width:96px;height:96px; display:block;">
                        <div class="card-body">
                            <h5 class="card-title">Cryptocurrencies</h5>
                            <p class="card-text">Trade Bitcoin, Ethereum and Litecoin and more cryptocurrency CFDs.</p>
                            <a href="{{ url('/Cryptocurrency') }}" class="trk-btn trk-btn-custom trk-btn--login" style="border-radius: 50px; padding: 10px 20px;">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card text-center mx-auto" style="border-radius: 15px; height:380px;background: var(--wh-color);">
                        <img src="{{ asset('') }}assets/images/others2/commodities-icon.png" class="card-img-top mx-auto mt-2" alt="service-icon" style="width:96px;height:96px; display:block;">
                        <div class="card-body">
                            <h5 class="card-title">Commodities</h5>
                            <p class="card-text">Trade metals, energies, and softs as CFDs without having to own the underlying asset.</p>
                            <a href="{{ url('/Commodities') }}" class="trk-btn trk-btn-custom trk-btn--login" style="border-radius: 50px; padding: 10px 20px;">More</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 2 -->
            <div class="row mb-15">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Web trading</a>
                                </h3>
                                <p class="mb-5">Everything a trader needs. Trade from charts and access advanced risk management tools on this highly customizable and award-winning platform.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/web-trading.png" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 3 -->
            <div class="row mb-15">
                <div class="col-lg-3">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/m2.png" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/mobile1.png" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Mobile apps</a>
                                </h3>
                                <p class="mb-2">Designed for instant control wherever you are, enjoy one-swipe trading, intelligent buy/sell signals and a customizable layout to suit your trading style.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row mb-15">
            <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Metatrader 5</a>
                                </h3>
                                <p class="mb-2">Trade your standard account on MetaTrader’s web, mobile, or downloadable platforms.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/desktop1.jpeg" alt="service-icon">
                                </div>
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