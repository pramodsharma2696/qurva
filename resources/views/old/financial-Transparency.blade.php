@extends('master')
@section('contents')


<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Account</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Transparent accounting</li>
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
                                <h3 class="mb-15"> <a class="stretched-link" href="service-details.html">We’re transparent with our pricing</a>
                                </h3>
                                <p class="mb-0">We always strive to be as open and clear as possible. On this page you can see exactly how our prices work and what we do with your funds.</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- 1 -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/service/bg.png" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="service-details.html">Consistently fast and accurate pricing</a>
                                </h3>
                                <p class="mb-5">We strive to deliver the best execution available in the market, with the highest speed and quality of execution, so you can be confident of consistently fast and accurate pricing.</p>
                                <p>*Execution speed represents the time it takes our execution engine to execute your trade once it has been received by the execution engine. This does not represent the time it take from when a customer clicks trade on the platform and when they receive their confirmation.</p>
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
                                <h3 class="mb-15"> <a class="stretched-link" href="service-details.html">Where we source our prices</a>
                                </h3>
                                <p class="mb-5">In Currency, the underlying asset is an OTC (over the counter) instrument, so to enable seamless trading we maintain relationships with several Tier 1 Banks as well as multiple Electronic Communication Networks (ECNs). They provide us with liquidity from around the globe (including London and New York), and in some cases the total number of providers can reach up to 12 liquidity sources.

                                    Furthermore, we periodically review our liquidity sources to ensure that we continue to offer you the best prices.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others/where-we-source-our-prices.jpg" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 3 -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others/how-we-deliver-our-prices.webp" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="service-details.html">How we deliver our prices</a>
                                </h3>
                                <p class="mb-5">Whether it’s for our professional, retail or institutional clients, we have a variety of channels to deliver prices. They include:

                                    <b> Mobile app (iPhone and Android),</b>
                                    <b> Our web trading platform,</b>
                                    <b>MetaTrader for technical users,</b>
                                    <b>FIX API for institutions</b>
                                    Our delivery mechanisms push prices out rapidly and automatically adapt to the connection speed of each client. This enables us to provide the highest possible frequency of updates without jamming the communication line. For our mobile and web offering, we use LightStreamer technology.
                                </p>
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