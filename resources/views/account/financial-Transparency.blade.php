@extends('master')
@section('contents')
<section class="page-banner-area" style="background-image:url(assets/images/banner-1.jpg)">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-content text-center">
                        <h1>financial-Transparency</h1>
                        <p><a href="#">Home</a> <span> &gt; </span>financial-Transparency</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
        </div>
    </section>

<section class="about-area c_text">
        <div class="container">
            <div class="row">
 

                 <div class="col-md-12">
                        <div class="align-middle d-table-cell">
                            <h1 class="hd_tx">We’re transparent with our pricing</h1>
                            <p>We always strive to be as open and clear as possible. On this page you can see exactly how our prices work and what we do with your funds.</p>                            
                        </div>                 
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-md-6"><br><br>
                    <div class="about-img1">
                        <img src="{{ asset('') }}uploads/bg.png" class="img_res" alt="image">
                         
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sdo_div_sec">

                        <h2>Consistently fast and accurate pricing</h2>

                        <p>We strive to deliver the best execution available in the market, with the highest speed and quality of execution, so you can be confident of consistently fast and accurate pricing.</p>

                        <p>*Execution speed represents the time it takes our execution engine to execute your trade once it has been received by the execution engine. This does not represent the time it take from when a customer clicks trade on the platform and when they receive their confirmation.</p>

                    </div>
                </div>                
            </div>

            <br><br><br>
            <div class="row">
               
                <div class="col-lg-6">
                    <div class="sdo_div_sec"><br><br><br><br><br><br>

                        <h2>Where we source our prices</h2>

                        <p>In Currency, the underlying asset is an OTC (over the counter) instrument, so to enable seamless trading we maintain relationships with several Tier 1 Banks as well as multiple Electronic Communication Networks (ECNs). They provide us with liquidity from around the globe (including London and New York), and in some cases the total number of providers can reach up to 12 liquidity sources. Furthermore, we periodically review our liquidity sources to ensure that we continue to offer you the best prices.</p>

                    </div>
                </div>      
                 <div class="col-md-6"><br><br>
                    <div class="about-img1">
                        <img src="{{ asset('') }}uploads/where-we-source-our-prices.jpg" class="img_res" alt="image">
                         
                    </div>
                </div>          
            </div>


            <br><br><br>
            <div class="row">
                <div class="col-md-6"><br><br>
                    <div class="about-img1">
                        <img src="{{ asset('') }}uploads/how-we-deliver-our-prices.webp" class="img_res" alt="image">
                         
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sdo_div_sec"><br><br><br><br><br><br>

                        <h2>How we deliver our prices</h2>

                        <p>Whether it’s for our professional, retail or institutional clients, we have a variety of channels to deliver prices. They include: Mobile app (iPhone and Android), Our web trading platform, MetaTrader for technical users, FIX API for institutions Our delivery mechanisms push prices out rapidly and automatically adapt to the connection speed of each client. This enables us to provide the highest possible frequency of updates without jamming the communication line. For our mobile and web offering, we use LightStreamer technology.</p>

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