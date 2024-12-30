   @extends('master')
   @section('contents')
<section class="page-banner-area" style="background-image:url(assets/images/banner-1.jpg)">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-content text-center">
                        <h1>Currency Trading</h1>
                        <p><a href="#">Home</a> <span> &gt; </span>Currency Trading</p>
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
                            <h1 class="hd_tx">Currency Trading</h1>

                            <h4>Forex Trading Made Simple with Qorva Markets</h4>
                            <p>Welcome to Qorva Markets, your trusted partner in the dynamic world of forex trading. Whether you're a seasoned trader or just starting out, we provide the tools, insights, and guidance to help you navigate the currency trading market with confidence.</p>
                            <h4>What is Forex Trading?</h4> 
                            <p>Forex, or foreign exchange, is the global marketplace for trading national currencies. It’s the largest and most liquid financial market, with a daily trading volume exceeding $6 trillion. At Qorva Markets, we simplify forex trading strategies to make them accessible for all skill levels. From trading major forex currency pairs like EUR/USD and GBP/USD to exploring exotic pairs, our platform ensures you’re equipped to succeed.                            </p>   
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