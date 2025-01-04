@extends('master')
@section('contents')
<section class="page-banner-area" style="background-image:url(assets/images/banner-1.jpg)">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-content text-center">
                        <h1>Raw Spread Account</h1>
                        <p><a href="#">Home</a> <span> &gt; </span>Raw Spread Account</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
        </div>
    </section>

<section class="about-area c_text">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="about-img1">
                        <img src="{{ asset('') }}uploads/new/accounts/24.png" class="img_res" alt="image">
                         
                    </div>
                </div>

                 <div class="col-md-6">
                        <div class="align-middle d-table-cell">
                            <h5 class="lg_font">Raw Spread Account</h5>
                            <p>The Raw Account at Qorva Markets caters to traders who prioritize cost-efficiency and direct market access. It offers raw spreads starting from 0 pips, with no mark-ups, ensuring transparent pricing and optimal trading conditions. This account is ideal for high-volume traders seeking to maintain maximum control over their trading costs.</p>
                        </div> 

                        <div class="row">
                <div class="col-md-12">
                    <div id="accordion">
                        <!--start faq single-->
                        <div class="card active">
                            <div class="card-header two active">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">Benefits</a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body current">                                    
                                    . No commission<br>
                                    . No minimum deposit<br>
                                    . Leverage up to 1:500
                                </div>
                            </div>
                        </div>
                        <!--end faq single-->
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header two">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Currencies</a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                   
                                    . USD, EUR, GBP, JPY<br>
                                    . Access to 50+ currency pairs<br>
                                    . Competitive spreads
                                </div>
                            </div>
                        </div>
                        <!--end faq single-->
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header two">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">Other Offers</a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">                                    
                                    . No withdrawal fees<br>
                                    . Access to educational resources<br>
                                    . Free demo account
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>                       
                </div>
            </div> 


            <div class="row">
                    <div class="col-lg-12"><h5 class="lg_font_color">Reason for Choose</h5></div>
                <div class="col-lg-3">                    
                    <div class="sdo_div">
                        <h5 class="lg_font">Friendly & Expert</h5>                        
                            <p>Enjoy a friendly and expert team dedicated to your trading success, providing personalized support and expert guidance every step of the way.</p>
                    </div>
                </div>

                <div class="col-lg-3">                    
                    <div class="sdo_div">
                        <h5 class="lg_font">24/7 Support</h5>                        
                            <p>Experience round-the-clock support at Qorva Markets, ensuring assistance and guidance whenever you need it to enhance your trading journey.</p>
                    </div>
                </div>

                <div class="col-lg-3">                    
                    <div class="sdo_div">
                        <h5 class="lg_font">Social Trading</h5>                        
                            <p>With our copy trading feature, effortlessly replicate the trades of seasoned investors, leveraging their expertise to optimize your own portfolio.</p>
                    </div>
                </div>

                <div class="col-lg-3">                    
                    <div class="sdo_div">
                        <h5 class="lg_font">IB Rewards</h5>                        
                            <p>With our IB Rewards program, benefit from lucrative incentives and bonuses as an Introducing Broker, unlocking exclusive perks and rewards for your successful referrals.</p>
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