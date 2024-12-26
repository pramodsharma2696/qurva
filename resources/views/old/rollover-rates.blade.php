@extends('master')
@section('contents')


<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Rollover Rates</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item "><a href="{{ url('/financial-Transparency') }}">Transparent accounting</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rollover Rates</li>
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
<div class="service-details padding-bottom section-bg-color" >
    <div class="container">
        <div class="service-details__wrapper">
            <div class="row flex-lg-row-reverse ">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-1"> <a class="stretched-link" href="javascript:void(0);">Rollover Rates</a></h3>
                                <p class="mb-5">Rollovers are typically the interest charged or earned for holding positions overnight. We strive to keep your trading costs low by sourcing institutional rollover rates and pass them to you at a competitive price.
                                </p>
                                <h3 class="mb-5"> <a class="stretched-link" href="javascript:void(0);">Key Benefits of Rollover Rates</a></h3>
                                <p class="mb-3">You can earn or pay when a rollover is applied to your position</p>
                                <p class="mb-3">Rollovers are only applied to open trades at 5pm ET</p>
                                <p class="mb-3">Other brokers may calculate rolls continuously, raising your trading costs</p>
                                
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