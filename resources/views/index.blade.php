@extends('master')
@section('contents')

    <!--end header-->
    <!--start hero area-->
    <section class="hero-area two">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10">
                    <div class="caption-content two">
                        <h2>Simplify Trading with<br>Qorva Markets</h2>
                        <p>Empowering traders with an intuitive platform for smarter decisions. </p>
                        <ul>
                            <li><a href="#">Register</a></li>
                            <li><a class="btn-bg" href="#">Try Free Demo</a></li>
                        </ul>
                        <img class="banner_sec" src="{{ asset('') }}uploads/banner1.png">
                    </div>
                </div>
                <!--end heading-->
            </div>
        </div>
    </section>
    <!--end hero area-->
    <!--start about-area-->
    <section class="about-area c_text" style="padding-bottom: 0px;">
        <div class="container">
            <div class="row">


                 <div class="col-md-7">
                        <div class="align-middle d-table-cell">
                            <h1 class="hd_tx">Powerful Trading Platform To Help You Succeed</h1>
                            <p>A platforms for every investor from beginner to advanced on mobile, web and desktop.</p>                            
                        </div> 
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="list_set">
                                <img src="{{ asset('') }}uploads/i1.png">
                                <h2>Low Fees and Transparent Pricing</h2>
                                <li>Competitive trading fees with no hidden charges. </li>
                                <li>Clear and upfront cost structure to maximise profitability.</li>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="list_set">
                                <img src="{{ asset('') }}uploads/i2.png">
                                <h2>Lightning-Fast Execution</h2>
                                <li>High-speed trade execution to minimise slippage and take advantage of real-time market opportunities</li>
                                <li>Low-latency trading infrastructure</li>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="list_set">
                                <img src="{{ asset('') }}uploads/i3.png">
                                <h2>Seamless Deposit and Withdrawal Options</h2>
                                <li>Multiple payment methods with fast processing times.</li>
                                <li>No unnecessary delays or restrictions on withdrawals</li>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="list_set">
                                <img src="{{ asset('') }}uploads/i4.png">
                                <h2>Educational Resources</h2>
                                <li>Free tutorials, webinars, and market analysis to empower traders</li>
                                <li>Personalised guidance and strategy tips for beginners.</li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="about-img">
                        <img src="{{ asset('') }}uploads/mob.png" class="img_res" alt="image">
                         
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
                        <h2>Open an account in 3 simple steps</h2>
                    </div>
                </div>
                <!--end heading-->
            </div>
            <div class="row">
               
                <div class="col-md-4">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="{{ asset('') }}uploads/cat-3.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">Sign Up & Create Account</a></h4>
                            <p>Join us by creating an account in just a few minutes and access the trading platform.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="{{ asset('') }}uploads/cat-3.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">Fund Your Account</a></h4>
                            <p>Deposit funds quickly and securely to start your trading journey.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-single text-center">
                        <div class="course-category-img">
                            <a href="#"><img src="{{ asset('') }}uploads/cat-3.jpg" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="category-cont text-center">
                            <h4><a href="#">Enjoy Instant Withdrawals</a></h4>
                            <p>Start trading and withdraw your earnings instantly without any hassle.</p>
                        </div>
                    </div>
                </div>

               
            </div>
        
        </div>
    </section>



    <section class="testimonial-area two">
        <div class="container">
            <div class="row">
                <!--start sec-heading-->
                <div class="col-lg-8 offset-lg-2">
                    <div class="sec-heading text-center">
                        <h2>Types Of Trading Accounts</h2>
                    </div>
                </div>
                <!--end sec-heading-->
            </div>
            <div class="testi-carousel owl-carousel">
                <!--start testimonial single--> 

                <div class="testi-single two p-0">
                    <div class="col-md-12 p-0">
                    <div class="blog-post-single">
                        <div class="post-media">
                            <img src="{{ asset('') }}uploads/account-1.jpg" class="img-fluid" alt="image">
                        </div>
                        <div class="blog-post-content">                           
                            <h3><a href="#">Standard a/c</a></h3>
                            <p>The Standard Account at Qorva Markets offers a balanced trading experience, ideal for both novice ...</p>
                        </div>
                    </div>
                </div>
                </div>

                <div class="testi-single two p-0">
                    <div class="col-md-12 p-0">
                    <div class="blog-post-single">
                        <div class="post-media">
                            <img src="{{ asset('') }}uploads/account-2.jpg" class="img-fluid" alt="image">
                        </div>
                        <div class="blog-post-content">                           
                            <h3><a href="#">Raw a/c</a></h3>
                            <p>The Raw Account at Qorva Markets caters to traders who prioritize cost-efficiency and direct market ...</p>
                        </div>
                    </div>
                </div>
                </div>

                <div class="testi-single two p-0">
                    <div class="col-md-12 p-0">
                    <div class="blog-post-single">
                        <div class="post-media">
                            <img src="{{ asset('') }}uploads/account-3.jpg" class="img-fluid" alt="image">
                        </div>
                        <div class="blog-post-content">                           
                            <h3><a href="#">STP Pro a/c</a></h3>
                            <p>The STP Pro Account at Qorva Markets is tailored for traders seeking enhanced trading conditions ...</p>
                        </div>
                    </div>
                </div>
                </div>


            </div>
        </div>
    </section>



 

    <section class="blog-area bg-gray">
        <div class="container">
            <div class="row">
                <!--start sec-heading-->
                <div class="col-lg-8 offset-lg-2">
                    <div class="sec-heading text-center">
                        <h2>Popular Marketss</h2>
                    </div>
                </div>
                <!--end sec-heading-->
            </div>
            <div class="row blog-post">
               
               <div class="col-lg-12"> 

<style type="text/css">
    ul.tab_sec li a {
    background: #ccc;
    margin-right: 5px;
    padding: 10px 20px;
    display: inline-block;
    font-size: 16px;
    border-radius: 3px;
    color: #000;
}
.tab-content {
    width: 100%;
    margin-top: 10px;
}
a.show.active {
    background: #3ba874;
    color: #fff;
}
.tab-pane iframe {
    width: 100%;
        height: 400px;
}
 
</style>
  


                  <ul class="nav nav-pills tab_sec">
                    <li><a data-toggle="pill" href="#home" class="show active">Currency</a></li>
                    <li><a data-toggle="pill" href="#menu1">Metals</a></li>
                    <li><a data-toggle="pill" href="#menu2">Indices</a></li>
                    <li><a data-toggle="pill" href="#menu3">Commodities</a></li>
                    <li><a data-toggle="pill" href="#menu4">Stocks</a></li>
                    <li><a data-toggle="pill" href="#menu5">Cryptos</a></li>
                  </ul>
                  
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active show">
                      <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Forex Cross Rates TradingView widget" lang="en"></iframe>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                      <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-overview/?locale=en#%7B%22symbols%22%3A%5B%5B%22GOLD%22%2C%22FOREXCOM%3AXAUUSD%7C1Y%22%5D%2C%5B%22Silver%22%2C%22SAXO%3AXAGUSD%7C1Y%22%5D%2C%5B%22Platinum%22%2C%22SAXO%3AXPTUSD%7C1Y%22%5D%2C%5B%22GOLD%2FEURO%22%2C%22OANDA%3AXAUEUR%7C1Y%22%5D%2C%5B%22SILVER%2FEURO%22%2C%22OANDA%3AXAGEUR%7C1Y%22%5D%2C%5B%22GOLD%2FAUD%22%2C%22OANDA%3AXAUAUD%7C1Y%22%5D%2C%5B%22SILVER%2FAUD%22%2C%22OANDA%3AXAGAUD%7C1Y%22%5D%2C%5B%22GOLD%2FGBP%22%2C%22OANDA%3AXAUGBP%7C1Y%22%5D%2C%5B%22SILVER%2FGBP%22%2C%22OANDA%3AXAGGBP%7C1Y%22%5D%2C%5B%22GOLD%2FJPY%22%2C%22OANDA%3AXAUJPY%7C1Y%22%5D%2C%5B%22SILVER%2FJPY%22%2C%22OANDA%3AXAGJPY%7C1Y%22%5D%5D%2C%22chartOnly%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22colorTheme%22%3A%22dark%22%2C%22showVolume%22%3Afalse%2C%22showMA%22%3Afalse%2C%22hideDateRanges%22%3Afalse%2C%22hideMarketStatus%22%3Afalse%2C%22hideSymbolLogo%22%3Afalse%2C%22scalePosition%22%3A%22right%22%2C%22scaleMode%22%3A%22Normal%22%2C%22fontFamily%22%3A%22-apple-system%2C%20BlinkMacSystemFont%2C%20Trebuchet%20MS%2C%20Roboto%2C%20Ubuntu%2C%20sans-serif%22%2C%22fontSize%22%3A%2210%22%2C%22noTimeScale%22%3Afalse%2C%22valuesTracking%22%3A%221%22%2C%22changeMode%22%3A%22price-and-percent%22%2C%22chartType%22%3A%22area%22%2C%22maLineColor%22%3A%22%232962FF%22%2C%22maLineWidth%22%3A1%2C%22maLength%22%3A9%2C%22lineWidth%22%3A2%2C%22lineType%22%3A0%2C%22dateRanges%22%3A%5B%221d%7C1%22%2C%221m%7C30%22%2C%223m%7C60%22%2C%2212m%7C1D%22%2C%2260m%7C1W%22%2C%22all%7C1M%22%5D%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22symbol-overview%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Symbol Overview TradingView widget" lang="en"></iframe>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                      <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-overview/?locale=en#%7B%22symbols%22%3A%5B%5B%22Dowjones%22%2C%22SKILLING%3ADJ30%7C1Y%22%5D%2C%5B%22Nasdaq%22%2C%22NASDAQ%3ANDX%7C1Y%22%5D%2C%5B%22Dax%22%2C%22XETR%3ADAX%7C1Y%22%5D%2C%5B%22US500%22%2C%22CAPITALCOM%3AUS500%7C1Y%22%5D%2C%5B%22Nasdaq100%22%2C%22CAPITALCOM%3AUS100%7C1Y%22%5D%2C%5B%22NIKKEI225%22%2C%22TVC%3ANI225%7C1Y%22%5D%2C%5B%22Hang%20Seng%22%2C%22TRADEGATE%3AHSI%7C1Y%22%5D%2C%5B%22ASX200%22%2C%22ASX%20200%7C1Y%22%5D%2C%5B%22EU%20STOXX%22%2C%22CAPITALCOM%3AEU50%7C1Y%22%5D%2C%5B%22ITALY%2040%22%2C%22CAPITALCOM%3AIT40%7C1Y%22%5D%2C%5B%22KOSPI%20200%22%2C%22KRX%3AKOSPI200%7C1Y%22%5D%5D%2C%22chartOnly%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22colorTheme%22%3A%22dark%22%2C%22showVolume%22%3Afalse%2C%22showMA%22%3Afalse%2C%22hideDateRanges%22%3Afalse%2C%22hideMarketStatus%22%3Afalse%2C%22hideSymbolLogo%22%3Afalse%2C%22scalePosition%22%3A%22right%22%2C%22scaleMode%22%3A%22Normal%22%2C%22fontFamily%22%3A%22-apple-system%2C%20BlinkMacSystemFont%2C%20Trebuchet%20MS%2C%20Roboto%2C%20Ubuntu%2C%20sans-serif%22%2C%22fontSize%22%3A%2210%22%2C%22noTimeScale%22%3Afalse%2C%22valuesTracking%22%3A%221%22%2C%22changeMode%22%3A%22price-and-percent%22%2C%22chartType%22%3A%22area%22%2C%22maLineColor%22%3A%22%232962FF%22%2C%22maLineWidth%22%3A1%2C%22maLength%22%3A9%2C%22lineWidth%22%3A2%2C%22lineType%22%3A0%2C%22dateRanges%22%3A%5B%221d%7C1%22%2C%221m%7C30%22%2C%223m%7C60%22%2C%2212m%7C1D%22%2C%2260m%7C1W%22%2C%22all%7C1M%22%5D%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22symbol-overview%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Symbol Overview TradingView widget" lang="en"></iframe>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                      <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-overview/?locale=en#%7B%22symbols%22%3A%5B%5B%22TVC%3AUSOIL%7C1Y%22%5D%2C%5B%22TVC%3AUKOIL%7C1Y%22%5D%2C%5B%22COCOA%22%2C%22DJ%3ADJCICC%7C1Y%22%5D%2C%5B%22COFFEE%22%2C%22DJ%3ADJCIKC%7C1Y%22%5D%2C%5B%22COPPER%22%2C%22SHFE%3ACU1!%7C1Y%22%5D%2C%5B%22CORN%22%2C%22PEPPERSTONE%3ACORN%7C1Y%22%5D%2C%5B%22COTTON%22%2C%22NYSE%3ATT%7C1Y%22%5D%2C%5B%22ALUMINIUM%22%2C%22NYSE%3AAM%7C1Y%22%5D%2C%5B%22NATURAL%20GAS%22%2C%22FX_IDC%3AUSDNTG%7C1Y%22%5D%2C%5B%22SOYABEAN%22%2C%22MIL%3ASOYB%7C1Y%22%5D%2C%5B%22SUGAR%22%2C%22ACTIVTRADES%3ASUGARV2023%7C1Y%22%5D%5D%2C%22chartOnly%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22colorTheme%22%3A%22dark%22%2C%22showVolume%22%3Afalse%2C%22showMA%22%3Afalse%2C%22hideDateRanges%22%3Afalse%2C%22hideMarketStatus%22%3Afalse%2C%22hideSymbolLogo%22%3Afalse%2C%22scalePosition%22%3A%22right%22%2C%22scaleMode%22%3A%22Normal%22%2C%22fontFamily%22%3A%22-apple-system%2C%20BlinkMacSystemFont%2C%20Trebuchet%20MS%2C%20Roboto%2C%20Ubuntu%2C%20sans-serif%22%2C%22fontSize%22%3A%2210%22%2C%22noTimeScale%22%3Afalse%2C%22valuesTracking%22%3A%221%22%2C%22changeMode%22%3A%22price-and-percent%22%2C%22chartType%22%3A%22area%22%2C%22maLineColor%22%3A%22%232962FF%22%2C%22maLineWidth%22%3A1%2C%22maLength%22%3A9%2C%22lineWidth%22%3A2%2C%22lineType%22%3A0%2C%22dateRanges%22%3A%5B%221d%7C1%22%2C%221m%7C30%22%2C%223m%7C60%22%2C%2212m%7C1D%22%2C%2260m%7C1W%22%2C%22all%7C1M%22%5D%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22symbol-overview%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Symbol Overview TradingView widget" lang="en"></iframe>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-overview/?locale=en#%7B%22symbols%22%3A%5B%5B%22Apple%22%2C%22AAPL%7C1D%22%5D%2C%5B%22Google%22%2C%22GOOGL%7C1D%22%5D%2C%5B%22Microsoft%22%2C%22MSFT%7C1D%22%5D%2C%5B%22NASDAQ%3AAMZN%7C1D%22%5D%2C%5B%22NYSE%3ABABA%7C1D%22%5D%2C%5B%22HKEX%3A2191%7C1D%22%5D%2C%5B%22NYSE%3ABAC%7C1D%22%5D%2C%5B%22NASDAQ%3AMETA%7C1D%22%5D%2C%5B%22NYSE%3AIBM%7C1D%22%5D%2C%5B%22NASDAQ%3ANFLX%7C1D%22%5D%2C%5B%22NYSE%3ATWTR%7C1D%22%5D%2C%5B%22NYSE%3AWMT%7C1D%22%5D%5D%2C%22chartOnly%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22colorTheme%22%3A%22dark%22%2C%22showVolume%22%3Afalse%2C%22showMA%22%3Afalse%2C%22hideDateRanges%22%3Afalse%2C%22hideMarketStatus%22%3Afalse%2C%22hideSymbolLogo%22%3Afalse%2C%22scalePosition%22%3A%22right%22%2C%22scaleMode%22%3A%22Normal%22%2C%22fontFamily%22%3A%22-apple-system%2C%20BlinkMacSystemFont%2C%20Trebuchet%20MS%2C%20Roboto%2C%20Ubuntu%2C%20sans-serif%22%2C%22fontSize%22%3A%2210%22%2C%22noTimeScale%22%3Afalse%2C%22valuesTracking%22%3A%221%22%2C%22changeMode%22%3A%22price-and-percent%22%2C%22chartType%22%3A%22area%22%2C%22maLineColor%22%3A%22%232962FF%22%2C%22maLineWidth%22%3A1%2C%22maLength%22%3A9%2C%22lineWidth%22%3A2%2C%22lineType%22%3A0%2C%22dateRanges%22%3A%5B%221d%7C1%22%2C%221m%7C30%22%2C%223m%7C60%22%2C%2212m%7C1D%22%2C%2260m%7C1W%22%2C%22all%7C1M%22%5D%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22symbol-overview%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Symbol Overview TradingView widget" lang="en"></iframe>
                    </div>
                    <div id="menu5" class="tab-pane fade">
                        <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-overview/?locale=en#%7B%22symbols%22%3A%5B%5B%22OANDA%3ABTCUSD%7C1D%22%5D%2C%5B%22OANDA%3AETHUSD%7C1D%22%5D%2C%5B%22BITSTAMP%3ALTCUSD%7C1D%22%5D%2C%5B%22BITSTAMP%3AXRPUSD%7C1D%22%5D%2C%5B%22BITFINEX%3AEOSUSD%7C1D%22%5D%5D%2C%22chartOnly%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22colorTheme%22%3A%22dark%22%2C%22showVolume%22%3Afalse%2C%22showMA%22%3Afalse%2C%22hideDateRanges%22%3Afalse%2C%22hideMarketStatus%22%3Afalse%2C%22hideSymbolLogo%22%3Afalse%2C%22scalePosition%22%3A%22right%22%2C%22scaleMode%22%3A%22Normal%22%2C%22fontFamily%22%3A%22-apple-system%2C%20BlinkMacSystemFont%2C%20Trebuchet%20MS%2C%20Roboto%2C%20Ubuntu%2C%20sans-serif%22%2C%22fontSize%22%3A%2210%22%2C%22noTimeScale%22%3Afalse%2C%22valuesTracking%22%3A%221%22%2C%22changeMode%22%3A%22price-and-percent%22%2C%22chartType%22%3A%22area%22%2C%22maLineColor%22%3A%22%232962FF%22%2C%22maLineWidth%22%3A1%2C%22maLength%22%3A9%2C%22lineWidth%22%3A2%2C%22lineType%22%3A0%2C%22dateRanges%22%3A%5B%221d%7C1%22%2C%221m%7C30%22%2C%223m%7C60%22%2C%2212m%7C1D%22%2C%2260m%7C1W%22%2C%22all%7C1M%22%5D%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22symbol-overview%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Symbol Overview TradingView widget" lang="en"></iframe>
                    </div>
                  </div>

               </div>

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
                    <img class="faq_res" src="{{ asset('') }}uploads/1.png" alt="image">
               </div>
            </div>
        </div>
    </section>




    <section class="testimonial-area two bg-gray">
        <div class="container">
            <div class="row">
                <!--start sec-heading-->
                <div class="col-lg-8 offset-lg-2">
                    <div class="sec-heading text-center">
                        <h2>What Says Our Students</h2>
                    </div>
                </div>
                <!--end sec-heading-->
            </div>
            <div class="testi-carousel owl-carousel">
                <!--start testimonial single-->





                <div class="testi-single two">
                    <div class="flx">
                        <div class="img_t"><img src="assets/images/client-2.jpg" alt="image"></div>
                        <div class="testi-cont-inner">
                            <div class="testi-client-info">                        
                                <div class="testi-client-details">
                                    <h4>Shubham Sharma</h4>
                                    <h6>Director</h6>
                                </div>
                            </div>
                            <div class="testi-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Payment systems have undergone significant transformations over the years. From cash and checks to digital</p>
                        </div>
                        </div>
                </div>

                 <div class="testi-single two">
                    <div class="flx">
                        <div class="img_t"><img src="assets/images/client-2.jpg" alt="image"></div>
                        <div class="testi-cont-inner">
                            <div class="testi-client-info">                        
                                <div class="testi-client-details">
                                    <h4>Shubham Sharma</h4>
                                    <h6>Director</h6>
                                </div>
                            </div>
                            <div class="testi-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Payment systems have undergone significant transformations over the years. From cash and checks to digital</p>
                        </div>
                        </div>
                </div>

                 <div class="testi-single two">
                    <div class="flx">
                        <div class="img_t"><img src="assets/images/client-2.jpg" alt="image"></div>
                        <div class="testi-cont-inner">
                            <div class="testi-client-info">                        
                                <div class="testi-client-details">
                                    <h4>Shubham Sharma</h4>
                                    <h6>Director</h6>
                                </div>
                            </div>
                            <div class="testi-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Payment systems have undergone significant transformations over the years. From cash and checks to digital</p>
                        </div>
                        </div>
                </div>

                 <div class="testi-single two">
                    <div class="flx">
                        <div class="img_t"><img src="assets/images/client-2.jpg" alt="image"></div>
                        <div class="testi-cont-inner">
                            <div class="testi-client-info">                        
                                <div class="testi-client-details">
                                    <h4>Shubham Sharma</h4>
                                    <h6>Director</h6>
                                </div>
                            </div>
                            <div class="testi-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Payment systems have undergone significant transformations over the years. From cash and checks to digital</p>
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