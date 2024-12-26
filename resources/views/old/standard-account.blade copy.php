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
            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Standard trading account</a>
                                </h3>
                                <p class="mb-0">Ideal for traders looking for the traditional trading experience, our standard account offers competitive spreads, advanced trading platforms, and all our markets.</p>
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
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">The standard account: simple, flexible control of your trading</a>
                                </h3>
                                <p class="mb-5">Our most popular account comes with clear, transparent pricing and superior trade execution speeds on a powerful, fully capable platform with a highly customizable layout. With no hidden fees, your only trading cost is the spread.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others/the-standard-account.webp" alt="service-icon">
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
                                    <img src="{{ asset('') }}assets/images/others2/1.png" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Trade the global markets, your way</a>
                                </h3>
                                <p class="mb-3">Experience seamless trading in global markets your way with MT5. Unlock advanced tools, customizable charts, and a wide range of assets to trade. Whether you're a seasoned trader or just getting started, MT5 empowers you to take control of your trading strategy with precision and flexibility. Trade your way, anytime, anywhere.</p>
                                <h5>Web Trading</h5>
                                <p class="mb-2">Trade directly from your browser with MT5 WebTrader, no downloads required. Access global markets, analyze charts, and execute trades seamlessly from any device. Enjoy the full functionality of the MT5 platform, including advanced charting tools, multiple order types, and real-time data. Stay connected and in control of your trading, wherever you are, with MT5 WebTrader</p>
                                <h5>Mobile app</h5>
                                <p class="mb-2">
                                Trade on the go with the MT5 mobile app, available for both iOS and Android. Access global markets, manage your positions, and analyze charts directly from your smartphone or tablet. The MT5 mobile app offers a user-friendly interface with advanced trading features, real-time price updates, and customizable alerts, allowing you to stay in control of your trades anytime, anywhere. Perfect for traders who need flexibility without compromising functionality</p>
                               
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