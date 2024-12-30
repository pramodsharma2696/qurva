@extends('master')
@section('contents')
   
<section class="page-banner-area" style="background-image:url(assets/images/banner-1.jpg)">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-content text-center">
                        <h1>Gold and Silver</h1>
                        <p><a href="#">Home</a> <span> &gt; </span>Gold and Silver</p>
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
                            <h1 class="hd_tx">Gold and Silver trading</h1>
                            <p>Trading gold and silver involves buying and selling these precious metals in the financial markets. As historically valuable assets, gold and silver are often seen as safe-haven investments, providing protection during economic uncertainty, currency fluctuations, or inflation. Investors trade these metals in various forms, including physical bullion, futures, ETFs, and CFDs</p>                            
                        </div>                 
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="sdo_div">

                        <h2>Gold and Silver explained</h2>


                        <h4>Diversify your investment – and your risk</h4>
                        <p>As historically safe haven assets, spot gold (XAU) and spot silver (XAG) can help diversify your investments and hedge against inflation.</p>

                        <h4>Go long or short</h4>
                        <p>When you trade commodities via CFDs with us, you can profit from both rising and falling markets.</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img1">
                        <img src="{{ asset('') }}uploads/indices-explained.png" class="img_res" alt="image">
                         
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