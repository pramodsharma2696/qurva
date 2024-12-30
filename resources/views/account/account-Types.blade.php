@extends('master')
@section('contents')
   
<section class="page-banner-area" style="background-image:url(assets/images/banner-1.jpg)">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-content text-center">
                        <h1>Account</h1>
                        <p><a href="#">Home</a> <span> &gt; </span>Account</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
        </div>
    </section>
<section class="category-area">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-12">
                    <div class="sec-heading text-center">
                        <h2>Account Type</h2>
                        <p>One trusted provider. Four flexible account options.</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
            <div class="row">
               
                <div class="col-md-4">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="uploads/cat-3.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">Standard account</a></h4>
                            <p>Ideal for traders looking for the traditional currency-trading experience, our standard account offers ultra-competitive spreads with no hidden costs. Available with our own award-winning web trading platform.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="uploads/cat-3.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">RAW Spread account</a></h4>
                            <p>For traders looking for the flexibility of trading significant reductions on spreads. Trade with spreads as low as 0.0 on FX majors on Qorva Markets trading platforms and MetaTrader.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="uploads/cat-3.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">STP Pro Account</a></h4>
                            <p>The STP Pro Account at Qorva Markets is tailored for traders seeking enhanced trading conditions and direct market access.</p>
                        </div>
                    </div>
                </div>

               
            </div>
        
        </div>
    </section>


    <section class="category-area bg-gray">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-12">
                    <div class="sec-heading text-center">
                        <h2>What can you trade?</h2>
                        <p>Compare our wide range of markets, all available to you in one place.</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
            <div class="row">
               
                <div class="col-md-3">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="uploads/cat-3.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">Currencies</a></h4>
                            <p>Learn all about the world's most traded market.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="uploads/cat-3.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">Stock</a></h4>
                            <p>Access nearly 2,500 stock CFDs of household-name companies.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="uploads/cat-3.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">Cryptocurrency</a></h4>
                            <p>Explore the crypto market and trade Bitcoin, Ethereum, and more with a reliable, trusted broker.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="uploads/cat-3.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">Indices</a></h4>
                            <p>Over 15 indices worldwide with extended trading hours.</p>
                        </div>
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