@extends('master')
@section('contents')


<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Execution</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item "><a href="{{ url('/financial-Transparency') }}">Transparent accounting</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Execution</li>
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
                                <h3 class="mb-1"> <a class="stretched-link" href="javascript:void(0);">Reliable and quality execution</a></h3>
                                <h5>We are committed to execution quality and transparency.</h5>
                                <p class="mb-0">we were the first broker in the US to introduce an Execution Scorecard and today remain the only US broker to regularly disclose details of our proprietary trading platform execution quality.*</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Exceptional Trade Executions</a></h3>
                                <p class="mb-2">Fast trade execution is critical to your success, and we challenge ourselves every day to deliver the best experience.</p>

                                <h5>% OF TRADES EXECUTED IN LESS THAN 1 SECOND - 99.94%</h5>
                                <p class="mb-2">Includes all valid trade and orders requests, excluding those entered on the MetaTrader platform</p>
                                <h5>AVERAGE EXECUTION SPEED - 0.01 secs</h5>
                                <p class="mb-2">Elapsed time between order receipt and execution</p>
                                
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Improve Your Potential</a></h3>
                                <p class="mb-2">We’ve automated every aspect of the trade process with the goal of ensuring your trades are executed fast and at the price you expect – or better.</p>

                                <h5>% OF LIMIT ORDERS PRICE IMPROVED - 64.04%</h5>
                                <p class="mb-2">Limit orders executed at a price better than the requested price</p>
                                <h5>% OF LIMIT ORDERS FILLED "AT OR BETTER" - 100%</h5>
                                <p class="mb-2">Limit orders executed at the requested rate or better</p>
                                <h5>AVERAGE PRICE IMPROVEMENT (PIPS) PER FX LIMIT ORDER - 0.58</h5>
                                <p class="mb-2">Pip difference between requested and executed price of price improved limit orders in FX markets</p>
                                <h5>AVERAGE PRICE IMPROVEMENT (%) PER NON-FX LIMIT ORDER - 0.06%</h5>
                                <p class="mb-2">Percent difference between requested and executed price of price improved limit orders in non-FX markets</p>
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