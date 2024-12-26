@extends('master')
@section('contents')
<style>
    img.dark {
        width: 150px;
        height: 150px;
    }
</style>

<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Gold and Silver </h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Markets</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trade-markets') }}">Trade Markets</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gold and Silver </li>
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
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Gold and Silver trading</a></h3>
                                <p class="mb-3">Trading gold and silver involves buying and selling these precious metals in the financial markets. As historically valuable assets, gold and silver are often seen as safe-haven investments, providing protection during economic uncertainty, currency fluctuations, or inflation. Investors trade these metals in various forms, including physical bullion, futures, ETFs, and CFDs</p>
                               
                               
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <!-- 2 -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Gold and Silver explained</a>
                                </h3>
                                <h5>Diversify your investment – and your risk</h5>
                                <p class="mb-2">As historically safe haven assets, spot gold (XAU) and spot silver (XAG) can help diversify your investments and hedge against inflation.</p>
                                <h5>Go long or short</h5>
                                <p class="mb-2">When you trade commodities via CFDs with us, you can profit from both rising and falling markets.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/golden-bar.jpg" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 3 -->
            <div class="row">
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
                                <h3 class="mb-2"> <a class="stretched-link" href="javascript:void(0);">Award-Winning Mobile Applications</a>
                                </h3>
                                <p class="mb-3">Designed for instant control wherever you are, enjoy one-tap trading, intelligent market tools and a customizable layout to suit your trading style</p>
                                <h5>MetaTrader Charts</h5>
                                <p class="mb-1">38+ indicators, 3 chart types and 21 timeframes</p>
                                <h5>Performance Analytics</h5>
                                <p class="mb-1">Analyze your decision-making with the latest behavioural science technology</p>
                                <h5>Total Control</h5>
                                <p class="mb-1">Customize your notifications and alerts to stay on top of the markets</p>
                                <h5>Trading Research</h5>
                                <p class="mb-1">Access integrated market analysis, a full economic calendar</p>
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