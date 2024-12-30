@extends('master')
@section('contents')
   
<section class="page-banner-area" style="background-image:url(assets/images/banner-1.jpg)">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-content text-center">
                        <h1>Cryptocurrency</h1>
                        <p><a href="#">Home</a> <span> &gt; </span>Cryptocurrency</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
        </div>
    </section>

<section class="about-area c_text">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <div class="about-img1">
                        <img src="{{ asset('') }}uploads/img2.jpg" class="img_res" alt="image">
                         
                    </div>
                </div>

                 <div class="col-md-7">
                        <div class="align-middle d-table-cell">
                            <h1 class="hd_tx">Cryptocurrency Trading</h1>
                            <p>Trade crypto CFDs with Qorva Markets without needing to own the cryptocurrency itself. With competitive spreads on Ripple, Ether and Bitcoin CFDs. Go long or short on CFDs - Get competitive spreads - Trade without the need for a digital wallet.</p>                            
                        </div>                 
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="sdo_div">

                        <h2>Why trade crypto CFDs with Qorva Markets?</h2>

                        <h4>Leverage your trading</h4>
                        <p>Gain full market exposure with just a percentage of the trade value</p>

                        <h4>Range of cryptocurrencies</h4>
                        <p>Trade popular cryptos or choose from thousands of other markets.</p>

                        <h4>A regulated global CFD broker</h4>
                        <p>Qorva Markets is a trading name of GAIN Global Markets Inc. which is authorized and regulated by the Cayman Islands Monetary Authority (CIMA).</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img1">
                        <img src="{{ asset('') }}uploads/cryptocurrency.png" class="img_res" alt="image">
                         
                    </div>
                </div>
            </div>

            <br><br><br>
            <div class="row">
                <div class="col-md-3">
                    <div class="about-img1">
                        <img src="{{ asset('') }}uploads/m2.png" class="img_res" alt="image">
                         
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="about-img1">
                        <img src="{{ asset('') }}uploads/m2.png" class="img_res" alt="image">
                         
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="sdo_div">

                        <h4>Award-winning mobile app</h4>
                        <p>Designed for instant control wherever you are, enjoy one-tap trading, intelligent market tools and a customizable layout to suit your trading style.</p>

                        <h4>TradingView Charts</h4>
                        <p>80+ indicators, 11 chart types and 14 timeframes</p>

                        <h4>Performance Analytics</h4>
                        <p>Analyze your decision-making with the latest behavioural science technology</p>

                        <h4>Total Control</h4>
                        <p>Customize your notifications and alerts to stay on top of the markets</p>

                        <h4>Trading Research</h4>
                        <p>Access integrated market analysis, Reuters news & a full economic calendar</p>
 

                    </div>
                </div>
                
            </div>


        </div>
    </section>




<section class="newsletter-area two" style="background: #2289e6;">
        <div class="container">
            <div class="row">
                <!--start sec-heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="sec-heading text-center">
                        <h2 class="text-white">Join Our Exclusive Community</h2>
                        <p class="text-white">Hey! Are you tired of missing out on the latest updates? <br>Subscribe to our community now and stay in the loop</p>
                    </div>
                </div>
                <!--end sec-heading-->
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="subscribe-form">
                        <form>
                            <input type="email" placeholder="Your email address">
                            <button type="submit">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection