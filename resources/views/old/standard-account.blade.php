@extends('master')
@section('contents')

<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Standard Account</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/account-Types') }}">Account Type</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Standard Account</li>
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

            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/1.png" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <section class="faq padding-top padding-bottom of-hidden">
                                    <div class="section-header">
                                        <h2 class="mb-10 mt-minus-5"><span>Standard</span> Account</h2>
                                        <p>The Standard Account at Qorva Markets offers a balanced trading experience, ideal for both novice and experienced traders. Enjoy competitive spreads, flexible leverage options, and access to a wide range of trading instruments.</p>

                                    </div>

                                    <div class="faq__wrapper">
                                        <div class="row g-5">
                                            <div class="col-lg-9">
                                                <div class="accordion accordion--style1" id="faqAccordion1" data-aos="fade-right" data-aos-duration="1000">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <!-- FAQ 1 -->
                                                            <div class="accordion__item accordion-item">
                                                                <div class="accordion__header accordion-header" id="faq1">
                                                                    <button class="accordion__button accordion-button" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#faqBody1" aria-expanded="false" aria-controls="faqBody1">
                                                                        <span class="accordion__button-content">Benefits</span>
                                                                    </button>
                                                                </div>
                                                                <div id="faqBody1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                                                                    data-bs-parent="#faqAccordion1">
                                                                    <div class="accordion__body accordion-body">
                                                                    <p class="mb-2"><b>.</b> No commission</p>
                                                                        <p class="mb-2"><b>.</b> No minimum deposit</p>
                                                                        <p class="mb-2"><b>.</b> Leverage up to 1:500</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <!-- FAQ 2 -->
                                                            <div class="accordion__item accordion-item">
                                                                <div class="accordion__header accordion-header" id="faq2">
                                                                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#faqBody2" aria-expanded="true" aria-controls="faqBody2">
                                                                        <span class="accordion__button-content">Currencies</span>
                                                                    </button>
                                                                </div>
                                                                <div id="faqBody2" class="accordion-collapse collapse" aria-labelledby="faq2"
                                                                    data-bs-parent="#faqAccordion1">
                                                                    <div class="accordion__body accordion-body">
                                                                       <p class="mb-2"><b>.</b> USD, EUR, GBP, JPY</p>
                                                                        <p class="mb-2"><b>.</b> Access to 50+ currency pairs</p>
                                                                        <p class="mb-2"><b>.</b> Competitive spreads</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <!-- FAQ 3 -->
                                                            <div class="accordion__item accordion-item">
                                                                <div class="accordion__header accordion-header" id="faq3">
                                                                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#faqBody3" aria-expanded="false" aria-controls="faqBody3">
                                                                        <span class="accordion__button-content">Other Offers</span>
                                                                    </button>
                                                                </div>
                                                                <div id="faqBody3" class="accordion-collapse collapse" aria-labelledby="faq3"
                                                                    data-bs-parent="#faqAccordion1">
                                                                    <div class="accordion__body accordion-body">
                                                                        <p class="mb-2"><b>.</b> No withdrawal fees</p>
                                                                        <p class="mb-2"><b>.</b> Access to educational resources</p>
                                                                        <p class="mb-2"><b>.</b> Free demo account</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div> <!-- row -->
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </section>

                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <div class="row mb-15 g-5">
                <h3 class="mb-15">
                    <a class="stretched-link" href="javascript:void(0);">Standard Account Info</a>
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <ul class="list-group">
                        <li class="list-group-item feature-item" data-aos="fade-up" data-aos-duration="900">
                            <h5>Initial Deposit</h5>
                            <p>$100</p>
                        </li>
                        <li class="list-group-item feature-item" data-aos="fade-up" data-aos-duration="900">
                            <h5>Leverage</h5>
                            <p>Up to 1:500</p>
                        </li>
                        <li class="list-group-item feature-item" data-aos="fade-up" data-aos-duration="900">
                            <h5>Order Volume</h5>
                            <p>0.01 – 500 lots</p>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-12 mb-4">
                    <ul class="list-group">
                        <li class="list-group-item feature-item" data-aos="fade-up" data-aos-duration="900">
                            <h5>Spread</h5>
                            <p>Fixed from 3 pips</p>
                        </li>
                        <li class="list-group-item feature-item" data-aos="fade-up" data-aos-duration="900">
                            <h5>24/7 Support</h5>
                            <p>Yes</p>
                        </li>
                        <li class="list-group-item feature-item" data-aos="fade-up" data-aos-duration="900">
                            <h5>Multi Language CC</h5>
                            <p>Yes</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row mb-4 g-5">
                <h3 class="mt-15"><br><br>
                    <a class="stretched-link" href="javascript:void(0);">Reason for Choose</a>
                </h3>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card service-card" data-aos="fade-up" data-aos-duration="900">
                        <div class="card-body">
                            <h5>
                                <img src="{{ asset('') }}assets/images/account/icon-64.png" alt="icon" style="width: 40px; vertical-align: middle; margin-right: 8px;">
                                Friendly & Expert
                            </h5>
                            <p>Enjoy a friendly and expert team dedicated to your trading success, providing personalized support and expert guidance every step of the way.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card service-card" data-aos="fade-up" data-aos-duration="900">
                        <div class="card-body">
                            <h5>
                                <img src="{{ asset('') }}assets/images/account/icon-65.png" alt="icon" style="width: 40px; vertical-align: middle; margin-right: 8px;">
                                24/7 Support
                            </h5>
                            <p>Experience round-the-clock support at Qorva Markets, ensuring assistance and guidance whenever you need it to enhance your trading journey.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card service-card" data-aos="fade-up" data-aos-duration="900">
                        <div class="card-body">
                            <h5>
                                <img src="{{ asset('') }}assets/images/account/icon-66.png" alt="icon" style="width: 40px; vertical-align: middle; margin-right: 8px;">
                                Social Trading
                            </h5>
                            <p>With our copy trading feature, effortlessly replicate the trades of seasoned investors, leveraging their expertise to optimize your own portfolio.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card service-card" data-aos="fade-up" data-aos-duration="900">
                        <div class="card-body">
                            <h5>
                                <img src="{{ asset('') }}assets/images/account/icon-67.png" alt="icon" style="width: 40px; vertical-align: middle; margin-right: 8px;">
                                IB Rewards
                            </h5>
                            <p>With our IB Rewards program, benefit from lucrative incentives and bonuses as an Introducing Broker, unlocking exclusive perks and rewards for your successful referrals.</p>
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