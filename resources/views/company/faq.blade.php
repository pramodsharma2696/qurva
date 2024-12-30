@extends('master')
@section('contents')
   
<section class="page-banner-area" style="background-image:url(assets/images/banner-1.jpg)">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-content text-center">
                        <h1>Frequently asked questions</h1>
                        <p><a href="#">Home</a> <span> &gt; </span>Frequently asked questions</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
        </div>
    </section>



    <section class="faq-area four">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-12">
                    <div class="sec-heading text-left">
                        <h2>Frequently asked questions</h2>
                        <p>A platforms for every investor from beginner to advanced on mobile, web and desktop</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="accordion">
                        <!--start faq single-->
                        <div class="card active">
                            <div class="card-header two active">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">What is Currency trading?</a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body current">
                                    Currency (foreign exchange) trading involves buying and selling currency pairs to profit from changes in their exchange rates. It is the largest financial market globally, with daily trading volume exceeding $6 trillion.
                                </div>
                            </div>
                        </div>
                        <!--end faq single-->
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header two">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">How does Currency trading work?</a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Currency trading is done in currency pairs, where one currency is bought and another is sold. The value of the pair fluctuates based on market conditions, and traders aim to profit by buying low and selling high.
                                </div>
                            </div>
                        </div>
                        <!--end faq single-->
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header two">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">What are the main currency pairs?</a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Major pairs: EUR/USD, USD/JPY, GBP/USD, USD/CHF
                                    Minor pairs: EUR/GBP, AUD/JPY, GBP/CAD
                                    Exotic pairs: USD/TRY, USD/ZAR, EUR/SGD
                                </div>
                            </div>
                        </div>
                        <!--end faq single-->
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header two">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                    What is a spread in Currency?</a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    The spread is the difference between the buy price (bid) and the sell price (ask) of a currency pair. It represents the cost of trading.
                                </div>
                            </div>
                        </div>
                        <!--end faq single-->
                    </div>
                </div>
               <div class="col-md-6">
                    <img class="faq_res" src="uploads/1.png" alt="image">
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