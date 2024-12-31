@extends('master')
@section('contents')
<section class="page-banner-area" style="background-image:url(assets/images/banner-1.jpg)">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-content text-center">
                        <h1>Contact us</h1>
                        <p><a href="#">Home</a> <span> &gt; </span>Contact us</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
        </div>
    </section>



<section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-desc">
                        <h2>Leave Us A Message</h2>
                        
                    </div>

                    <div class="contact-info-single">
                        <div class="contact-icon">
                            <img src="assets/images/icons/email.svg" alt="image">
                        </div>
                        <div class="contact-cont">
                            <h3>Email Address :</h3>
                            <p>info@qorvamarkets.com</p>
                        </div>
                    </div>
                    <div class="contact-info-single">
                        <div class="contact-icon">
                            <img src="assets/images/icons/telephone.svg" alt="image">
                        </div>
                        <div class="contact-cont">
                            <h3>Phone Number :</h3>
                            <p>971508596279</p>
                        </div>
                    </div>
                    <div class="contact-info-single">
                        <div class="contact-icon">
                            <img src="assets/images/icons/map.svg" alt="image">
                        </div>
                        <div class="contact-cont">
                            <h3>Physical Address :</h3>
                            <p>Office 210 Al-Nasar Sports Club Dubai, UAE.</p>
                        </div>
                    </div>
                    <div class="contact-info-single">
                        <div class="contact-icon">
                            <img src="assets/images/icons/map.svg" alt="image">
                        </div>
                        <div class="contact-cont">
                            <h3>Registered Address :</h3>
                            <p>Qorva Markets LTD, Bonovo Road – Fomboni,
                            Island of Mohéli – Comoros Union</p>
                        </div>
                    </div>
                    <div class="contact-info-single">
                        <div class="contact-cont" style="margin-left: 58px;">
                            <h3>Registration Number:</h3>
                            <p>HT00324027</p>
                        </div>
                    </div>

                    
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="#" method="post">
                            <input type="text" placeholder="Your Name" class="form-control">
                            <input type="text" placeholder="Email Address" class="form-control">
                            <input type="text" placeholder="Subject" class="form-control">
                            <textarea rows="4" placeholder="Write Your Message *" class="form-control"></textarea>
                            <div class="submit-btn">
                                <a href="#">Submit Now</a>
                            </div>
                        </form>
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