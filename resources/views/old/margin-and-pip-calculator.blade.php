@extends('master')
@section('contents')

<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Margin and pip calculator</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trading-tools') }}">System and Features</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trading-tools') }}">Trading tools</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Margin and pip calculator</li>
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
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Margin and pip calculator</a></h3>
                                <p class="mb-3">See how much a single point of movement is worth – as well as how much margin you'll need to trade – with this pip calculator for currencies and all our available markets.</p>

                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">How much is a pip worth?</a></h3>
                                <p class="mb-3">This tool is to calculate how much you'll make or lose per pip on your chosen trade, plus how much margin to deposit.</p>
                                <p class="mb-3">Neither Qorva Markets nor its affiliates will be held responsible for the reliability or accuracy of this data. The service is provided in good faith; however, there are no explicit or implicit warranties of accuracy. The user agrees not to hold Qorva Markets or any of its affiliates liable for trading decisions that are based on the pip & margin calculators from this website.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">What are pips and how do they work?</a></h3>
                                <p class="mb-3">Pips are how you measure movement in a currency pair, standing for ‘point in percentage’. Sometimes, you might hear pips referred to as ‘points’. The value of a pip changes depending on the pair you are trading.</p>
                                <p class="mb-3">In most currency pairs, one pip is equal to a single-digit move in the fourth decimal place (0.0001) of the pair’s price. So it’s equivalent to 1/100 of 1%. If EUR/USD moves from 1.1732 to 1.1737, for example, it has gone up five pips.</p>
                                <p class="mb-3">In currency pairs that include the Japanese yen (JPY), though, the second digit after the decimal point is the pip. Here, a pip is equivalent to 1/10 of 1%.</p>
                                <p class="mb-3">Using these small units to measure price movement enables traders to profit from relatively small price movements.</p>
                               
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">How does the currency pip calculator work?</a></h3>
                                <p class="mb-3">The currency pip calculator works by multiplying the size of your position by the value of a single pip, then converting that figure into your chosen base currency. It also calculates your total required margin by dividing the total size of your position by your chosen market’s margin factor.</p>
                                <p class="mb-3">You can use the pip calculator to see precisely how much you’ll make or lose for each point of movement in your underlying market – as well as how much you’ll need to deposit to open a position.</p>
                                

                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Fractional pips</a></h3>
                                <p class="mb-3">In addition to the standard pip, most currency brokers also offer ‘fractional pip pricing’ by adding an extra fifth decimal place to their quotes. As well as enabling tighter spreads, these can give you a better understanding of a currency price’s movements.</p>
                                
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
