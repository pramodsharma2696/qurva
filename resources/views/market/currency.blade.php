@extends('master')
@section('contents')
    <!--end header-->
    <!--start hero area-->
<style>
    .caption-content h2 {
    font-size: 70px;
    line-height: 55px;
    color: #000;
    font-weight: 700;
    margin-top: -40px;
}
</style>
    <section class="hero-area two" style="background-image: url(uploads/banner-5.jpg); background-size: 100% 100%;padding: 0;    height: auto;">
        <div class="overlay_two">    
            <div class="container">
                <div class="row">
                    <!--start heading-->
                    <div class="col-lg-10">
                        <div class="caption-content two">
                            <h2>A World-Class <br>Trading Experience</h2>
                            <p>Empowering traders with an intuitive platform for smarter decisions. </p>
                            <ul>
                                <li><a href="#">Register</a></li>
                                <li><a class="btn-bg" href="#">Try Demo</a></li>
                            </ul>
                            <img class="banner_sec" src="uploads/banner1.png">
                        </div>
                    </div>
                    <!--end heading-->
                </div>
            </div>
        </div>
    </section>


    <div class="marque_data">
    <div class="tradingview-widget-container" id="tradingview-widget-container-1">
    <div class="tradingview-widget-container__widget"></div>
    
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
            "symbols": [{
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500 Index"
                },
                {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "US 100 Cash CFD"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR to USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "Bitcoin"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "Ethereum"
                }
            ],
            "showSymbolLogo": true,
            "isTransparent": false,
            "displayMode": "adaptive",
            "colorTheme": "light",
            "locale": "en"
        }
    </script>
</div>
    </div>
    <div class="tx_btm">Powerful Platform That You Can Trust</div>

    <!--end hero area-->
    <!--start about-area-->
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
                            <div class="align-middle d-table-cell">
                            <h5 class="lg_font">Forex Trading Made Simple with Qorva Markets</h5>
                            <p>Welcome to Qorva Markets, your trusted partner in the dynamic world of forex trading. Whether you're a seasoned trader or just starting out, we provide the tools, insights, and guidance to help you navigate the currency trading market with confidence.</p>
                        </div>
                        <h5 class="lg_font">What is Forex Trading?</h5>
                        <p>Forex, or foreign exchange, is the global marketplace for trading national currencies. It’s the largest and most liquid financial market, with a daily trading volume exceeding $6 trillion. At Qorva Markets, we simplify forex trading strategies to make them accessible for all skill levels. From trading major forex currency pairs like EUR/USD and GBP/USD to exploring exotic pairs, our platform ensures you’re equipped to succeed.</p>
                </div>                 
                </div>
            </div>
        </div>
    </section>


    <section class="bg_sec">
        <div class="container">
       
            <div class="row">
               
                <div class="col-md-4">
                    <div class="inner_all">
                     <div class="tx_b">Major Forex Pair</div>
                        <li>AUDUSD</li>
                        <li>EURUSD</li>
                        <li>GBPUSD</li>
                        <li>NZDUSD</li>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="inner_all">
                     <div class="tx_b">Cross Forex Pairs</div>
                        <li>AUDCAD</li>
                        <li>AUDCHF</li>
                        <li>AUDJPY</li>
                        <li>AUDNZD</li>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="inner_all">
                     <div class="tx_b">Exotic Forex Pairs</div>
                        <li>AUDDKK</li>
                        <li>AUDHUF</li>
                        <li>AUDNOK</li>
                        <li>AUDSEK</li>

                    </div>
                </div>
            </div>
        
        </div>
    </section>

    <section class="about-area c_text">
        <div class="container">
            <div class="row">

                

                 <div class="col-md-12">
                        <div class="align-middle d-table-cell">
                            <h1 class="hd_tx">Why Qorva is the best <br>choice on the currency market</h1>
                        </div>                 
                </div>

                <div class="col-lg-4">
                    <div class="inner_div">
                        <h3>Stable Spreads from 0.6 pips</h3>
                        <p>Among the lowest on the market</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inner_div">
                        <h3>All 7 major pairs and 28 others</h3>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inner_div">
                        <h3>No fees, No commissions, and no swaps</h3>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inner_div">
                        <h3>Order execution in under 0.1 seconds</h3>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inner_div">
                        <h3>Leverage uptp to 1:1000</h3>
                        <p>for most FX pairs</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inner_div">
                        <h3>Low entry threshold</h3>
                        <p>Strat with 25 USD and trade from 0.01 lots</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

   
 <section class="about-area c_text bg-gray">
        <div class="container">
            <div class="row">
                 <div class="col-md-7">
                    <div class="align-middle d-table-cell">
                        <h1 class="hd_tx">How the global currency market works</h1>
                        <p>The currency market is the
                        largest investment market in
                        the world. It is where national currencies, such as the US
                        dollar (USD) or the Japanese yen
                        (JPY), are exchanged.</p>                            
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="about-img1">
                        <img src="{{ asset('') }}uploads/img2.jpg" class="img_res" alt="image">                         
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="about-area c_text bg-gray">
        <div class="container">
            <div class="row">
            <div class="col-md-5">
                    <div class="about-img1">
                        <img src="{{ asset('') }}uploads/img2.jpg" class="img_res" alt="image">                         
                    </div>
                </div>
                 <div class="col-md-7">
                    <div class="align-middle d-table-cell">
                        <h1 class="hd_tx">Trade currency efficiently
                        and securely with Qorva</h1>
                        <h4>Secure and Transparent</h4>
                        <p>With Qorva Markets, your forex trading account is protected with robust security measures, ensuring a safe trading environment.                        </p>                            
                    </div>
                </div>

               

            </div>
        </div>
    </section>

    <section class="category-area" style="display: none;">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-12">
                    <div class="sec-heading text-left">
                        <h2>Trade currency efficiently <br>and securely with Qorva</h2>
                    </div>
                </div>
                <!--end heading-->
            </div>
            <div class="row">
               
                <div class="col-md-4">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="{{ asset('') }}uploads/img4.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">Xxxxx xxxxx xxxxxx xxxxx</a></h4>
                            <p>Xxxxx xxxxx xxxxxx xxxxx Xxxxx xxxxx xxxxxx xxxxx Xxxxx xxxxx xxxxxx xxxxx </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="{{ asset('') }}uploads/img4.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">Xxxxx xxxxx xxxxxx xxxxx</a></h4>
                            <p>Xxxxx xxxxx xxxxxx xxxxx Xxxxx xxxxx xxxxxx xxxxx Xxxxx xxxxx xxxxxx xxxxx </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="{{ asset('') }}uploads/img4.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">Xxxxx xxxxx xxxxxx xxxxx</a></h4>
                            <p>Xxxxx xxxxx xxxxxx xxxxx Xxxxx xxxxx xxxxxx xxxxx Xxxxx xxxxx xxxxxx xxxxx </p>
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