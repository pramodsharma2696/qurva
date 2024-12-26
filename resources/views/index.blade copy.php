@extends('master')
@section('contents')


<style>

</style>


<!-- ===============>> Banner section start here <<================= -->
<section class="banner banner--style1">
  <div class="banner__bg">
    <div class="banner__bg-element">
      <img src="{{ asset('') }}assets/images/banner/home1/bg.png" alt="section-bg-element" class="dark d-none d-lg-block">
      <span class="bg-color d-lg-none"></span>
    </div>
  </div>
  <div class="container">
    <div class="banner__wrapper">
      <div class="row gy-5 gx-4">
        <div class="col-lg-6 col-md-7">
          <div class="banner__content" data-aos="fade-right" data-aos-duration="1000">
            <div class="banner__content-coin">
              <img src="{{ asset('') }}assets/images/banner/home1/3.png" alt="coin icon">
            </div>
            <h1 class="banner__content-heading">Master Your Trading Journey with Precision and Control with <span>Qorva Markets</span></h1>
            <!-- <p class="banner__content-moto">.
            </p> -->
            <div class="banner__btn-group btn-group">

              <a href="https://portal.qorvamarkets.com/en/register"
                class="trk-btn trk-btn--outline22">
                Register <span><i class="fa-solid fa-arrow-right"></i></span>
              </a>
              <a href="https://portal.qorvamarkets.com/en/login"
                class="trk-btn trk-btn--register">
                Try Free Demo <span><i class="fa-solid fa-arrow-right"></i></span>
              </a>
            </div>
            <div class="banner__content-social">
              <p>Follow Us</p>
              <ul class="social">
                <li class="social__item">
                  <a href="https://www.facebook.com/profile.php?id=61560663703190" class="social__link social__link--style1 active"><i class="fab fa-facebook-f"></i></a>
                </li>
              
                <li class="social__item">
                  <a href="https://www.instagram.com/qorvamarkets/" class="social__link social__link--style1"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="social__item">
                  <a href="https://www.youtube.com/@Qorvamarkets" class="social__link social__link--style1"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="social__item">
                  <a href="https://x.com/QorvaMarkets" class="social__link social__link--style1"><i class="fab fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-5">
          <div class="banner__thumb" data-aos="fade-left" data-aos-duration="1000">
            <img src="{{ asset('') }}assets/images/others2/landing.png" alt="banner-thumb" class="dark" style="width: 820px;height: 532px;">
            <!-- <img src="{{ asset('') }}assets/images/banner/home1/1.png" alt="banner-thumb" class="dark"> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner__shape">
    <span class="banner__shape-item banner__shape-item--1"><img src="{{ asset('') }}assets/images/banner/home1/4.png"
        alt="shape icon"></span>
  </div>

</section>
<!-- ===============>> Banner section end here <<================= -->



<!-- ===============>> partner section start here <<================= -->
<div class="tradingview-widget-container" style="width: 100%; height: 100px;">
  <div class="tradingview-widget-container__widget"></div>
 
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
    "symbols": [
      {
        "proName": "FX_IDC:GBPUSD",
        "title": "GBP to USD"
      },
      {
        "proName": "FX_IDC:USDJPY",
        "title": "USD to JPY"
      },
      {
        "proName": "FX_IDC:AUDUSD",
        "title": "AUD to USD"
      },
      {
        "proName": "OANDA:XAUUSD",
        "title": "Gold Spot"
      },
      {
        "proName": "BITSTAMP:LTCUSD",
        "title": "Litecoin"
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
<!-- ===============>> partner section end here <<================= -->



<!-- ===============>> About section start here <<================= -->
<section class="about about--style1 ">
  <div class="container">
    <div class="about__wrapper">
      <div class="row gx-5  gy-4 gy-sm-0  align-items-center">
        <div class="col-lg-6">
          <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
            <div class="about__thumb-inner">
              <div class="about__thumb-image floating-content">
                <img class="dark" src="{{ asset('') }}assets/images/about/1.png" alt="about-image">
                <div class="floating-content__top-left" data-aos="fade-right" data-aos-duration="1000">
                  <div class="floating-content__item">
                    <h3>
                      <!-- <span class="purecounter" data-purecounter-start="0" data-purecounter-end="30">30</span> -->
                      About Qorva
                    </h3>
                    <!-- <p>Consulting Experience</p> -->
                  </div>
                </div>
                <div class="floating-content__bottom-right" data-aos="fade-right" data-aos-duration="1000">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about__content" data-aos="fade-left" data-aos-duration="800">
            <div class="about__content-inner">
              <h2> In a Fast Moving Market Choose <span>Stable Broker</span></h2>
              <p class="mb-0">At Qorva Markets, our wealth of experience, coupled with our support establishes us as the preferred broker for traders worldwide. We possess the knowledge and resources necessary to assist traders of all skill levels in achieving their investment objectives, embodying the capabilities of a leading brokerage firm. </p>
              <a href="about.html" class="trk-btn trk-btn--border trk-btn--primary">Explore More </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===============>> About section end here <<================= -->




<!-- ===============>> feature section start here <<================= -->
<section class="feature feature--style1 padding-bottom padding-top bg-color">
  <div class="container">
    <div class="feature__wrapper">
      <div class="row g-5 align-items-center justify-content-between">
        <div class="col-md-6 col-lg-5">
          <div class="feature__content" data-aos="fade-right" data-aos-duration="800">
            <div class="feature__content-inner">
              <div class="section-header">
                <h2 class="mb-10 mt-minus-5">Everything you need to <span>trade Currencies</span> in one place</h2>
              </div>

              <div class="feature__nav">
                <div class="nav nav--feature flex-column nav-pills" id="feat-pills-tab" role="tablist"
                  aria-orientation="vertical">
                  <div class="nav-link active" id="feat-pills-one-tab" data-bs-toggle="pill"
                    data-bs-target="#feat-pills-one" role="tab" aria-controls="feat-pills-one" aria-selected="true">
                    <div class="feature__item">
                      <div class="feature__item-inner">
                        <div class="feature__item-content">
                          <h6>Retail Trader</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav-link" id="feat-pills-two-tab" data-bs-toggle="pill" data-bs-target="#feat-pills-two"
                    role="tab" aria-controls="feat-pills-two" aria-selected="false">
                    <div class="feature__item">
                      <div class="feature__item-inner">
                        <div class="feature__item-content">
                          <h6>Day Trader</h6>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="nav-link" id="feat-pills-three-tab" data-bs-toggle="pill"
                    data-bs-target="#feat-pills-three" role="tab" aria-controls="feat-pills-three"
                    aria-selected="false">
                    <div class="feature__item">
                      <div class="feature__item-inner">
                        <div class="feature__item-content">
                          <h6>Position Trader</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav-link" id="feat-pills-four-tab" data-bs-toggle="pill"
                    data-bs-target="#feat-pills-four" role="tab" aria-controls="feat-pills-four"
                    aria-selected="false">
                    <div class="feature__item">
                      <div class="feature__item-inner">
                        <div class="feature__item-content">
                          <h6>The Swing Trader</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav-link" id="feat-pills-five-tab" data-bs-toggle="pill"
                    data-bs-target="#feat-pills-five" role="tab" aria-controls="feat-pills-five"
                    aria-selected="false">
                    <div class="feature__item">
                      <div class="feature__item-inner">
                        <div class="feature__item-content">
                          <h6>Institutional Trader</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="feature__thumb pt-5 pt-md-0" data-aos="fade-left" data-aos-duration="800">
            <div class="feature__thumb-inner">
              <div class="tab-content" id="feat-pills-tabContent">
                <div class="tab-pane fade show active" id="feat-pills-one" role="tabpanel"
                  aria-labelledby="feat-pills-one-tab" tabindex="0">
                  <div class="feature__image floating-content">
                    <img src="{{ asset('') }}assets/images/feature/1.png" alt="Feature image">
                  </div>
                  <p>Retail traders are individual investors who buy and sell securities for their personal account, typically trading smaller amounts of capital. Our platform offers tools tailored for them, making it easier to analyze markets and trade efficiently.</p>
                </div>
                <div class="tab-pane fade" id="feat-pills-two" role="tabpanel" aria-labelledby="feat-pills-two-tab"
                  tabindex="0">
                  <div class="feature__image floating-content">
                    <img src="{{ asset('') }}assets/images/feature/2.png" alt="Feature image">
                  </div>
                  <p>Day traders execute multiple trades throughout the day to capitalize on short-term price movements. Our tools are designed to provide them with real-time data, fast executions, and in-depth charting to help them stay ahead of the market.</p>
                </div>
                <div class="tab-pane fade" id="feat-pills-three" role="tabpanel"
                  aria-labelledby="feat-pills-three-tab" tabindex="0">
                  <div class="feature__image floating-content">
                    <img src="{{ asset('') }}assets/images/feature/1.png" alt="Feature image">
                  </div>
                  <p>Position traders take long-term positions, holding onto their trades for weeks or even months. Our platform provides advanced charting tools and research capabilities to help position traders make informed decisions based on long-term trends.</p>
                </div>
                <div class="tab-pane fade" id="feat-pills-four" role="tabpanel" aria-labelledby="feat-pills-four-tab"
                  tabindex="0">
                  <div class="feature__image floating-content">
                    <img src="{{ asset('') }}assets/images/feature/2.png" alt="Feature image">
                  </div>
                  <p>Swing traders focus on capturing short- to medium-term gains over a few days to weeks. Our platform offers the flexibility and tools they need to spot swing trading opportunities, manage risk, and execute trades efficiently.</p>
                </div>
                <div class="tab-pane fade" id="feat-pills-five" role="tabpanel" aria-labelledby="feat-pills-five-tab"
                  tabindex="0">
                  <div class="feature__image floating-content">
                    <img src="{{ asset('') }}assets/images/feature/2.png" alt="Feature image">
                  </div>
                  <p>Institutional traders manage large sums of capital and require advanced tools for managing complex portfolios. Our platform caters to their needs with robust research tools, comprehensive analytics, and high-speed order executions.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="feature__shape">
    <span class="feature__shape-item feature__shape-item--1"><img src="{{ asset('') }}assets/images/feature/shape/1.png"
        alt="shape-icon"></span>
    <span class="feature__shape-item feature__shape-item--2"> <span></span> </span>
  </div>
</section>
<!-- ===============>> feature section end here <<================= -->



<section class="feature feature--style2 padding-bottom padding-top feature-bg-color bg--cover"
  style="background-image:url(assets/images/feature/home3/bg.png)">
  <div class="section-header section-header--style3 section-header--max57">
    <h2 class="mb-10 mt-minus-5">3 Simple Steps to Start <span>Trading</span></h2>
  </div>
  <div class="container">
    <div class="feature__wrapper">
      <div class="row g-4 align-items-center">
        <!-- Step 1: Sign Up -->
        <div class="col-sm-6 col-lg-4">
          <div class="feature__item" data-aos="fade-up" data-aos-duration="800">
            <div class="feature__item-inner feature-custom text-center step-hexagon-custom">
              <div class="feature__item-thumb feature-item-thumb-custom">
                <img class="dark" src="assets/images/feature/home3/3.png" alt="sign-up-icon">
              </div>
              <div class="feature__item-content feature-item-content-custom">
                <a href="#"><h5>Sign Up & Create Account</h5></a>
                <p>Join us by creating an account in just a few minutes and access the trading platform.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Step 2: Fund Account -->
        <div class="col-sm-6 col-lg-4">
          <div class="feature__item" data-aos="fade-up" data-aos-duration="800">
            <div class="feature__item-inner feature-custom text-center step-hexagon-custom">
              <div class="feature__item-thumb feature-item-thumb-custom">
                <img class="dark" src="assets/images/about/icon/1.png" alt="fund-icon">
              </div>
              <div class="feature__item-content feature-item-content-custom">
                <a href="#"><h5>Fund Your Account</h5></a>
                <p>Deposit funds quickly and securely to start your trading journey.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Step 3: Enjoy Trading & Withdrawals -->
        <div class="col-sm-6 col-lg-4">
          <div class="feature__item" data-aos="fade-up" data-aos-duration="800">
            <div class="feature__item-inner feature-custom text-center step-hexagon-custom">
              <div class="feature__item-thumb feature-item-thumb-custom">
                <img class="dark" src="assets/images/feature/home3/2.png" alt="enjoy-icon">
              </div>
              <div class="feature__item-content feature-item-content-custom">
                <a href="#"><h5>Enjoy Instant Withdrawals</h5></a>
                <p>Start trading and withdraw your earnings instantly without any hassle.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="feature__shape">
    <span class="feature__shape-item feature__shape-item--1"><img src="assets/images/feature/home3/5.png" alt="shape-icon"></span>
  </div>
</section>


<!-- ========== Currency trading account Here========== -->

<section class="blog padding-top padding-bottom">
  <div class="container">
    <div class="section-header d-md-flex align-items-center justify-content-between">
      <div class="section-header__content">
        <h2 class="mb-10">Currency Trading <span>Accounts</span></h2>
        <!-- <p class="mb-0">Hey there pro traders, check out these articles with tips to take your trading game to the next level!</p> -->
      </div>
      <div class="section-header__action">
        <div class="swiper-nav swiper-nav--style1">
          <button class="swiper-nav__btn blog__slider-prev"><i class="fa-solid fa-angle-left"></i></button>
          <button class="swiper-nav__btn blog__slider-next active"><i class="fa-solid fa-angle-right"></i></button>
        </div>
      </div>
    </div>
    <div class="blog__wrapper" data-aos="fade-up" data-aos-duration="1000">
      <div class="blog__slider swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="blog__item blog__item--style2">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{ asset('') }}assets/images/others/account-1.jpg" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <!-- <span class="blog__meta-tag blog__meta-tag--style1"></span> -->
                  </div>
                  <h5 class="10"> <a href="{{ url('/standard-account') }}">Standard a/c</a> </h5>

                  <p class="mb-15">The Standard Account at Qorva Markets offers a balanced trading experience, ideal for both novice ...</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="blog__item blog__item--style2">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{ asset('') }}assets/images/others/account-2.jpg" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <!-- <span class="blog__meta-tag blog__meta-tag--style1">Trading market</span> -->
                  </div>
                  <h5 class="10"> <a href="{{ url('/raw-spread-account') }}">Raw a/c</a> </h5>

                  <p class="mb-15">The Raw Account at Qorva Markets caters to traders who prioritize cost-efficiency and direct market ...</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="blog__item blog__item--style2">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{ asset('') }}assets/images/others/account-3.jpg" alt="STP Pro a/c">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <!-- <span class="blog__meta-tag blog__meta-tag--style1">Investment</span> -->
                  </div>
                  <h5 class="10"> <a href="{{ url('/STP-Pro-Account') }}">STP Pro a/c</a> </h5>

                  <p class="mb-15">The STP Pro Account at Qorva Markets is tailored for traders seeking enhanced trading conditions ...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
  <div class="blog__shape">
    <span class="blog__shape-item blog__shape-item--1"> <span></span> </span>
  </div>
</section>
<!-- ========== Roadmap Section Ends Here========== -->

<!-- ===============>> Testimonial section start here <<================= -->
<section class="testimonial padding-top padding-bottom-style2 bg-color">
  <div class="container">
    <div class="row align-items-center">
      <!-- Static Image on the Left Side -->
      <div class="col-md-6">
        <div class="testimonial__static-image">
          <img src="{{ asset('') }}assets/images/others/tradingview-hp-module-hero.webp" alt="Tools Image" class="img-fluid" style="width: 566px;">
        </div>
      </div>

      <!-- Swiper Slider on the Right Side -->
      <div class="col-md-6">
        <div class="section-header d-md-flex align-items-center justify-content-between">
          <div class="section-header__content">
            <p class="mb-0">Trading Tools</p>
            <h2 class="mb-10">Tools for Every <span>Trader</span></h2>
          </div>
          <div class="section-header__action">
            <div class="swiper-nav">
              <button class="swiper-nav__btn testimonial__slider-prev"><i class="fa-solid fa-angle-left"></i></button>
              <button class="swiper-nav__btn testimonial__slider-next active"><i class="fa-solid fa-angle-right"></i></button>
            </div>
          </div>
        </div>

        <div class="testimonial__wrapper" data-aos="fade-up" data-aos-duration="1000">
          <div class="testimonial__slider swiper">
            <div class="swiper-wrapper">
              <!-- Slide 1 -->
              <div class="swiper-slide">
                <div class="testimonial__item testimonial__item--style1">
                  <div class="testimonial__item-inner">
                    <div class="testimonial__author-thumb mb-5">
                      <img src="{{ asset('') }}assets/images/others/budget.png" alt="author" style="width:80px !important">
                    </div>
                    <hr>
                    <div class="testimonial__item-content">
                      <h5>Pip Value Calculator</h5>
                      <p class="mb-0">
                        Use our provided tool to see conversion rates on different products.
                      </p>
                      <div class="testimonial__footer">
                        <div class="testimonial__author">
                          <div class="testimonial__author-designation">
                            <a href="{{ url('/margin-and-pip-calculator') }}">
                              <h6>Use Our Tool <span><i class="fa-solid fa-arrow-right"></i></span></h6>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 2: Margin Calculator -->
              <div class="swiper-slide">
                <div class="testimonial__item testimonial__item--style1">
                  <div class="testimonial__item-inner">
                    <div class="testimonial__author-thumb mb-5">
                      <img src="{{ asset('') }}assets/images/others/budget.png" alt="author" style="width:80px !important"> <!-- Update with your icon path -->
                    </div>
                    <hr>
                    <div class="testimonial__item-content">
                      <h5>Margin Calculator</h5>
                      <p class="mb-0">
                        User our provided tool to calculate marging on different products.
                      </p>
                      <div class="testimonial__footer">
                        <div class="testimonial__author">
                          <div class="testimonial__author-designation">
                            <a href="{{ url('/margin-and-pip-calculator') }}">
                              <h6>Use Our Tool <span><i class="fa-solid fa-arrow-right"></i></span></h6>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 3: Free Currency Converter -->
              <div class="swiper-slide">
                <div class="testimonial__item testimonial__item--style1">
                  <div class="testimonial__item-inner">
                    <div class="testimonial__author-thumb mb-5">
                      <img src="{{ asset('') }}assets/images/others/budget.png" alt="author" style="width:80px !important"> <!-- Update with your icon path -->
                    </div>
                    <hr>
                    <div class="testimonial__item-content">
                      <h5>Free Currency Converter</h5>
                      <p class="mb-0">
                        User our provided tool to see conversion rates on different products.
                      </p>
                      <div class="testimonial__footer">
                        <div class="testimonial__author">
                          <div class="testimonial__author-designation">
                            <a href="{{ url('/currency-converter') }}">
                              <h6>Use Our Tool <span><i class="fa-solid fa-arrow-right"></i></span></h6>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===============>> Testimonial section end here <<================= -->

<!-- ===============>> Service section start here <<================= -->
<section class="service padding-top padding-bottom">
  <div class="section-header section-header--max50">
    <p>Currency Trading</p>
    <h2 class="mb-10 mt-minus-5">Top <span> Pricing</span> List in Market</h2>
  </div>
  <div class="container">
    <div class="service__wrapper">
      <div class="row g-4 align-items-center">
      <div class="market-prices__content">
        <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom: -29px;">
            
            <li class="nav-item">
                <a class="nav-link c-link active" id="pills-forex-tab" data-bs-toggle="pill" href="#pills-forex" role="tab" aria-controls="pills-forex" aria-selected="false">Currency</a>
            </li>
            <li class="nav-item">
                <a class="nav-link c-link" id="pills-metals-tab" data-bs-toggle="pill" href="#pills-metals" role="tab" aria-controls="pills-metals" aria-selected="false">Metals</a>
            </li>
            <li class="nav-item">
                <a class="nav-link c-link" id="pills-indices-tab" data-bs-toggle="pill" href="#pills-indices" role="tab" aria-controls="pills-indices" aria-selected="false">Indices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link c-link" id="pills-commodities-tab" data-bs-toggle="pill" href="#pills-commodities" role="tab" aria-controls="pills-commodities" aria-selected="false">Commodities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link c-link" id="pills-stocks-tab" data-bs-toggle="pill" href="#pills-stocks" role="tab" aria-controls="pills-stocks" aria-selected="false">Stocks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link c-link" id="pills-cryptos-tab" data-bs-toggle="pill" href="#pills-cryptos" role="tab" aria-controls="pills-cryptos" aria-selected="false">Cryptos</a>
            </li>
        </ul>

        <div class="tab-content mt-3" id="pills-tabContent">
            <!-- Forex Tab -->
            <div class="tab-pane fade show active" id="pills-forex" role="tabpanel" aria-labelledby="pills-forex-tab">
            <div class="tradingview-widget-container">
                        <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Forex Cross Rates TradingView widget" lang="en"></iframe>
                       
                    </div>
            </div>

            <!-- Metals Tab -->
            <div class="tab-pane fade" id="pills-metals" role="tabpanel" aria-labelledby="pills-metals-tab">
            <div class="tradingview-widget-container">
                        <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-overview/?locale=en#%7B%22symbols%22%3A%5B%5B%22GOLD%22%2C%22FOREXCOM%3AXAUUSD%7C1Y%22%5D%2C%5B%22Silver%22%2C%22SAXO%3AXAGUSD%7C1Y%22%5D%2C%5B%22Platinum%22%2C%22SAXO%3AXPTUSD%7C1Y%22%5D%2C%5B%22GOLD%2FEURO%22%2C%22OANDA%3AXAUEUR%7C1Y%22%5D%2C%5B%22SILVER%2FEURO%22%2C%22OANDA%3AXAGEUR%7C1Y%22%5D%2C%5B%22GOLD%2FAUD%22%2C%22OANDA%3AXAUAUD%7C1Y%22%5D%2C%5B%22SILVER%2FAUD%22%2C%22OANDA%3AXAGAUD%7C1Y%22%5D%2C%5B%22GOLD%2FGBP%22%2C%22OANDA%3AXAUGBP%7C1Y%22%5D%2C%5B%22SILVER%2FGBP%22%2C%22OANDA%3AXAGGBP%7C1Y%22%5D%2C%5B%22GOLD%2FJPY%22%2C%22OANDA%3AXAUJPY%7C1Y%22%5D%2C%5B%22SILVER%2FJPY%22%2C%22OANDA%3AXAGJPY%7C1Y%22%5D%5D%2C%22chartOnly%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22colorTheme%22%3A%22dark%22%2C%22showVolume%22%3Afalse%2C%22showMA%22%3Afalse%2C%22hideDateRanges%22%3Afalse%2C%22hideMarketStatus%22%3Afalse%2C%22hideSymbolLogo%22%3Afalse%2C%22scalePosition%22%3A%22right%22%2C%22scaleMode%22%3A%22Normal%22%2C%22fontFamily%22%3A%22-apple-system%2C%20BlinkMacSystemFont%2C%20Trebuchet%20MS%2C%20Roboto%2C%20Ubuntu%2C%20sans-serif%22%2C%22fontSize%22%3A%2210%22%2C%22noTimeScale%22%3Afalse%2C%22valuesTracking%22%3A%221%22%2C%22changeMode%22%3A%22price-and-percent%22%2C%22chartType%22%3A%22area%22%2C%22maLineColor%22%3A%22%232962FF%22%2C%22maLineWidth%22%3A1%2C%22maLength%22%3A9%2C%22lineWidth%22%3A2%2C%22lineType%22%3A0%2C%22dateRanges%22%3A%5B%221d%7C1%22%2C%221m%7C30%22%2C%223m%7C60%22%2C%2212m%7C1D%22%2C%2260m%7C1W%22%2C%22all%7C1M%22%5D%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22symbol-overview%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Symbol Overview TradingView widget" lang="en"></iframe>
                        
                    </div>
            </div>

            <!-- Indices Tab -->
            <div class="tab-pane fade" id="pills-indices" role="tabpanel" aria-labelledby="pills-indices-tab">
            <div class="tradingview-widget-container">
                        <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-overview/?locale=en#%7B%22symbols%22%3A%5B%5B%22Dowjones%22%2C%22SKILLING%3ADJ30%7C1Y%22%5D%2C%5B%22Nasdaq%22%2C%22NASDAQ%3ANDX%7C1Y%22%5D%2C%5B%22Dax%22%2C%22XETR%3ADAX%7C1Y%22%5D%2C%5B%22US500%22%2C%22CAPITALCOM%3AUS500%7C1Y%22%5D%2C%5B%22Nasdaq100%22%2C%22CAPITALCOM%3AUS100%7C1Y%22%5D%2C%5B%22NIKKEI225%22%2C%22TVC%3ANI225%7C1Y%22%5D%2C%5B%22Hang%20Seng%22%2C%22TRADEGATE%3AHSI%7C1Y%22%5D%2C%5B%22ASX200%22%2C%22ASX%20200%7C1Y%22%5D%2C%5B%22EU%20STOXX%22%2C%22CAPITALCOM%3AEU50%7C1Y%22%5D%2C%5B%22ITALY%2040%22%2C%22CAPITALCOM%3AIT40%7C1Y%22%5D%2C%5B%22KOSPI%20200%22%2C%22KRX%3AKOSPI200%7C1Y%22%5D%5D%2C%22chartOnly%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22colorTheme%22%3A%22dark%22%2C%22showVolume%22%3Afalse%2C%22showMA%22%3Afalse%2C%22hideDateRanges%22%3Afalse%2C%22hideMarketStatus%22%3Afalse%2C%22hideSymbolLogo%22%3Afalse%2C%22scalePosition%22%3A%22right%22%2C%22scaleMode%22%3A%22Normal%22%2C%22fontFamily%22%3A%22-apple-system%2C%20BlinkMacSystemFont%2C%20Trebuchet%20MS%2C%20Roboto%2C%20Ubuntu%2C%20sans-serif%22%2C%22fontSize%22%3A%2210%22%2C%22noTimeScale%22%3Afalse%2C%22valuesTracking%22%3A%221%22%2C%22changeMode%22%3A%22price-and-percent%22%2C%22chartType%22%3A%22area%22%2C%22maLineColor%22%3A%22%232962FF%22%2C%22maLineWidth%22%3A1%2C%22maLength%22%3A9%2C%22lineWidth%22%3A2%2C%22lineType%22%3A0%2C%22dateRanges%22%3A%5B%221d%7C1%22%2C%221m%7C30%22%2C%223m%7C60%22%2C%2212m%7C1D%22%2C%2260m%7C1W%22%2C%22all%7C1M%22%5D%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22symbol-overview%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Symbol Overview TradingView widget" lang="en"></iframe>
                        
                    </div>
            </div>

            <!-- Commodities Tab -->
            <div class="tab-pane fade" id="pills-commodities" role="tabpanel" aria-labelledby="pills-commodities-tab">
            <div class="tradingview-widget-container">
                        <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-overview/?locale=en#%7B%22symbols%22%3A%5B%5B%22TVC%3AUSOIL%7C1Y%22%5D%2C%5B%22TVC%3AUKOIL%7C1Y%22%5D%2C%5B%22COCOA%22%2C%22DJ%3ADJCICC%7C1Y%22%5D%2C%5B%22COFFEE%22%2C%22DJ%3ADJCIKC%7C1Y%22%5D%2C%5B%22COPPER%22%2C%22SHFE%3ACU1!%7C1Y%22%5D%2C%5B%22CORN%22%2C%22PEPPERSTONE%3ACORN%7C1Y%22%5D%2C%5B%22COTTON%22%2C%22NYSE%3ATT%7C1Y%22%5D%2C%5B%22ALUMINIUM%22%2C%22NYSE%3AAM%7C1Y%22%5D%2C%5B%22NATURAL%20GAS%22%2C%22FX_IDC%3AUSDNTG%7C1Y%22%5D%2C%5B%22SOYABEAN%22%2C%22MIL%3ASOYB%7C1Y%22%5D%2C%5B%22SUGAR%22%2C%22ACTIVTRADES%3ASUGARV2023%7C1Y%22%5D%5D%2C%22chartOnly%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22colorTheme%22%3A%22dark%22%2C%22showVolume%22%3Afalse%2C%22showMA%22%3Afalse%2C%22hideDateRanges%22%3Afalse%2C%22hideMarketStatus%22%3Afalse%2C%22hideSymbolLogo%22%3Afalse%2C%22scalePosition%22%3A%22right%22%2C%22scaleMode%22%3A%22Normal%22%2C%22fontFamily%22%3A%22-apple-system%2C%20BlinkMacSystemFont%2C%20Trebuchet%20MS%2C%20Roboto%2C%20Ubuntu%2C%20sans-serif%22%2C%22fontSize%22%3A%2210%22%2C%22noTimeScale%22%3Afalse%2C%22valuesTracking%22%3A%221%22%2C%22changeMode%22%3A%22price-and-percent%22%2C%22chartType%22%3A%22area%22%2C%22maLineColor%22%3A%22%232962FF%22%2C%22maLineWidth%22%3A1%2C%22maLength%22%3A9%2C%22lineWidth%22%3A2%2C%22lineType%22%3A0%2C%22dateRanges%22%3A%5B%221d%7C1%22%2C%221m%7C30%22%2C%223m%7C60%22%2C%2212m%7C1D%22%2C%2260m%7C1W%22%2C%22all%7C1M%22%5D%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22symbol-overview%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Symbol Overview TradingView widget" lang="en"></iframe>
                        
                    </div>
            </div>

            <!-- Stocks Tab -->
            <div class="tab-pane fade" id="pills-stocks" role="tabpanel" aria-labelledby="pills-stocks-tab">
            <div class="tradingview-widget-container">
                        <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-overview/?locale=en#%7B%22symbols%22%3A%5B%5B%22Apple%22%2C%22AAPL%7C1D%22%5D%2C%5B%22Google%22%2C%22GOOGL%7C1D%22%5D%2C%5B%22Microsoft%22%2C%22MSFT%7C1D%22%5D%2C%5B%22NASDAQ%3AAMZN%7C1D%22%5D%2C%5B%22NYSE%3ABABA%7C1D%22%5D%2C%5B%22HKEX%3A2191%7C1D%22%5D%2C%5B%22NYSE%3ABAC%7C1D%22%5D%2C%5B%22NASDAQ%3AMETA%7C1D%22%5D%2C%5B%22NYSE%3AIBM%7C1D%22%5D%2C%5B%22NASDAQ%3ANFLX%7C1D%22%5D%2C%5B%22NYSE%3ATWTR%7C1D%22%5D%2C%5B%22NYSE%3AWMT%7C1D%22%5D%5D%2C%22chartOnly%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22colorTheme%22%3A%22dark%22%2C%22showVolume%22%3Afalse%2C%22showMA%22%3Afalse%2C%22hideDateRanges%22%3Afalse%2C%22hideMarketStatus%22%3Afalse%2C%22hideSymbolLogo%22%3Afalse%2C%22scalePosition%22%3A%22right%22%2C%22scaleMode%22%3A%22Normal%22%2C%22fontFamily%22%3A%22-apple-system%2C%20BlinkMacSystemFont%2C%20Trebuchet%20MS%2C%20Roboto%2C%20Ubuntu%2C%20sans-serif%22%2C%22fontSize%22%3A%2210%22%2C%22noTimeScale%22%3Afalse%2C%22valuesTracking%22%3A%221%22%2C%22changeMode%22%3A%22price-and-percent%22%2C%22chartType%22%3A%22area%22%2C%22maLineColor%22%3A%22%232962FF%22%2C%22maLineWidth%22%3A1%2C%22maLength%22%3A9%2C%22lineWidth%22%3A2%2C%22lineType%22%3A0%2C%22dateRanges%22%3A%5B%221d%7C1%22%2C%221m%7C30%22%2C%223m%7C60%22%2C%2212m%7C1D%22%2C%2260m%7C1W%22%2C%22all%7C1M%22%5D%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22symbol-overview%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Symbol Overview TradingView widget" lang="en"></iframe>
                        
                    </div>
            </div>

            <!-- Cryptos Tab -->
            <div class="tab-pane fade" id="pills-cryptos" role="tabpanel" aria-labelledby="pills-cryptos-tab">
            <div class="tradingview-widget-container">
                        <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-overview/?locale=en#%7B%22symbols%22%3A%5B%5B%22OANDA%3ABTCUSD%7C1D%22%5D%2C%5B%22OANDA%3AETHUSD%7C1D%22%5D%2C%5B%22BITSTAMP%3ALTCUSD%7C1D%22%5D%2C%5B%22BITSTAMP%3AXRPUSD%7C1D%22%5D%2C%5B%22BITFINEX%3AEOSUSD%7C1D%22%5D%5D%2C%22chartOnly%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22colorTheme%22%3A%22dark%22%2C%22showVolume%22%3Afalse%2C%22showMA%22%3Afalse%2C%22hideDateRanges%22%3Afalse%2C%22hideMarketStatus%22%3Afalse%2C%22hideSymbolLogo%22%3Afalse%2C%22scalePosition%22%3A%22right%22%2C%22scaleMode%22%3A%22Normal%22%2C%22fontFamily%22%3A%22-apple-system%2C%20BlinkMacSystemFont%2C%20Trebuchet%20MS%2C%20Roboto%2C%20Ubuntu%2C%20sans-serif%22%2C%22fontSize%22%3A%2210%22%2C%22noTimeScale%22%3Afalse%2C%22valuesTracking%22%3A%221%22%2C%22changeMode%22%3A%22price-and-percent%22%2C%22chartType%22%3A%22area%22%2C%22maLineColor%22%3A%22%232962FF%22%2C%22maLineWidth%22%3A1%2C%22maLength%22%3A9%2C%22lineWidth%22%3A2%2C%22lineType%22%3A0%2C%22dateRanges%22%3A%5B%221d%7C1%22%2C%221m%7C30%22%2C%223m%7C60%22%2C%2212m%7C1D%22%2C%2260m%7C1W%22%2C%22all%7C1M%22%5D%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22symbol-overview%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="Symbol Overview TradingView widget" lang="en"></iframe>
                        
                    </div>
            </div>
        </div>
    </div>
      </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===============>> Service section end here <<================= -->


<!-- ===============>> Pricing section start here <<================= -->
<section class="pricing padding-top padding-bottom d-none">
  <div class="section-header section-header--max50">
    <h2 class="mb-10 mt-minus-5">Our <span>pricings </span>plan</h2>
    <p>We offer the best pricings around - from installations to repairs, maintenance, and more!</p>
  </div>
  <div class="container">
    <div class="pricing__wrapper">
      <div class="row g-4 align-items-center">
        
      </div>
    </div>
  </div>
  <div class="pricing__shape">
    <span class="pricing__shape-item pricing__shape-item--1"> <span></span> </span>
    <span class="pricing__shape-item pricing__shape-item--2"> <img src="{{ asset('') }}assets/images/icon/1.png" alt="shape-icon">
    </span>
  </div>
</section>
<!-- ===============>> Pricing section start here <<================= -->





<!-- ===============>> Team section start here <<================= -->
<section class="team padding-top padding-bottom bg-color d-none">
  <div class="section-header section-header--max50">
    <h2 class="mb-10 mt-minus-5">Meet our <span>advisers</span></h2>
    <p>Hey everyone, meet our amazing advisers! They're here to help and guide us through anything.</p>
  </div>
  <div class="container">
    <div class="team__wrapper">
      <div class="row g-4 align-items-center">
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/1.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Dianne Russell</a> </h6>
                    <p class="mb-0">Trade Captain</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/2.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Theresa Webb</a> </h6>
                    <p class="mb-0">Strategic Advisor</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/3.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Courtney Henry</a> </h6>
                    <p class="mb-0">Management Consultant</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/4.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Albert Flores</a> </h6>
                    <p class="mb-0">Development Specialist</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/5.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Darrell Steward</a> </h6>
                    <p class="mb-0">Growth Strategist</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/6.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Wade Warren</a> </h6>
                    <p class="mb-0">Trade Consultant</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/7.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Cody Fisher</a> </h6>
                    <p class="mb-0">HR Consultant</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/8.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Bessie Cooper</a> </h6>
                    <p class="mb-0">Financial Advisor</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="text-center">
          <a href="team.html" class="trk-btn trk-btn--border trk-btn--primary mt-25">View more </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===============>> Team section start here <<================= -->




<!-- ===============>> why to choose us start here <<================= -->
<section class="testimonial padding-top padding-bottom-style2 bg-color">
    <div class="container">
      <div class="section-header d-md-flex align-items-center justify-content-between">
        <div class="section-header__content">
        <p class="mb-2">Why Choose Us</p>
          <h2 class="mb-10">Reason to <span>Choose Us </span></h2>
        
        </div>
      
      </div>
      <div class="testimonial__wrapper aos-init" data-aos="fade-up" data-aos-duration="1000">
        <div class="testimonial__slider2 swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
          <div class="swiper-wrapper" style="cursor: grab; transform: translate3d(-2342px, 0px, 0px); transition-duration: 0ms;" id="swiper-wrapper-eeff510a7b3c52589" aria-live="off">
            <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 560.5px; margin-right: 25px;">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <h5>Friendly & Expert</h5>
                    <p class="mb-0">
                      Enjoy a friendly and expert team dedicated to your trading success, providing personalized support and expert guidance every step of the way.
                    </p>                    
                  </div>
                </div>
              </div>
            </div><div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="1 / 3" style="width: 560.5px; margin-right: 25px;">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                  <h5>24/7 Support</h5>
                    <p class="mb-0">
                      Experience round-the-clock support at Qorva Markets, ensuring assistance and guidance whenever you need it to enhance your trading journey
                    </p>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="2 / 3" style="width: 560.5px; margin-right: 25px;">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                  <h5>Copy Trading</h5>
                    <p class="mb-0">
                    With our copy trading feature, effortlessly replicate the trades of seasoned investors, leveraging their expertise to optimize your own portfolio.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="3 / 3" style="width: 560.5px; margin-right: 25px;">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <h5>IB Rewards</h5>
                    <p class="mb-0">
                    With our IB Rewards program, benefit from lucrative incentives and bonuses as an Introducing Broker, unlocking exclusive perks and rewards for your successful referrals.
                    </p>
                  </div>
                </div>
              </div>
            </div>
         </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
      </div>
    </div>
  </section>
<!-- ===============>> why to choose us start here <<================= -->






<!-- ===============>> FAQ section start here <<================= -->
<section class="faq padding-top padding-bottom of-hidden">
  <div class="section-header section-header--max65">
    <h2 class="mb-10 mt-minus-5"><span>Frequently</span> Asked Questions</h2>
    <p>Hey there! Got questions? We've got answers. Check out our FAQ page for all the deets. Still not satisfied? Hit us up.</p>
  </div>
  <div class="container">
    <div class="faq__wrapper">
      <div class="row g-5 align-items-center justify-content-between">
        <div class="col-lg-6">
          <div class="accordion accordion--style1" id="faqAccordion1" data-aos="fade-right" data-aos-duration="1000">
            <div class="row">
              <div class="col-12">
                <!-- FAQ 1 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq1">
                    <button class="accordion__button accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody1" aria-expanded="false" aria-controls="faqBody1">
                      <span class="accordion__button-content">What is Currency trading?</span>
                    </button>
                  </div>
                  <div id="faqBody1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Currency (foreign exchange) trading involves buying and selling currency pairs to profit from changes in their exchange rates. It is the largest financial market globally, with daily trading volume exceeding $6 trillion.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 2 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq2">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody2" aria-expanded="true" aria-controls="faqBody2">
                      <span class="accordion__button-content">How does Currency trading work?</span>
                    </button>
                  </div>
                  <div id="faqBody2" class="accordion-collapse collapse" aria-labelledby="faq2"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Currency trading is done in currency pairs, where one currency is bought and another is sold. The value of the pair fluctuates based on market conditions, and traders aim to profit by buying low and selling high.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 3 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq3">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody3" aria-expanded="false" aria-controls="faqBody3">
                      <span class="accordion__button-content">What are the main currency pairs?</span>
                    </button>
                  </div>
                  <div id="faqBody3" class="accordion-collapse collapse" aria-labelledby="faq3"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Major pairs: EUR/USD, USD/JPY, GBP/USD, USD/CHF<br>Minor pairs: EUR/GBP, AUD/JPY, GBP/CAD<br>Exotic pairs: USD/TRY, USD/ZAR, EUR/SGD</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 4 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq4">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody4" aria-expanded="false" aria-controls="faqBody4">
                      <span class="accordion__button-content">What is a spread in Currency?</span>
                    </button>
                  </div>
                  <div id="faqBody4" class="accordion-collapse collapse" aria-labelledby="faq4"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">The spread is the difference between the buy price (bid) and the sell price (ask) of a currency pair. It represents the cost of trading.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 5 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq5">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody5" aria-expanded="false" aria-controls="faqBody5">
                      <span class="accordion__button-content">How can I start trading on your platform?</span>
                    </button>
                  </div>
                  <div id="faqBody5" class="accordion-collapse collapse" aria-labelledby="faq5"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">1. Register<br>2. Verify your account<br>3. Fund your account<br>4. Start trading</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 6 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq6">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody6" aria-expanded="false" aria-controls="faqBody6">
                      <span class="accordion__button-content">What trading platforms do you offer?</span>
                    </button>
                  </div>
                  <div id="faqBody6" class="accordion-collapse collapse" aria-labelledby="faq6"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">1. MetaTrader 5 (MT5)<br>2. WebTrader<br>3. Mobile App</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 7 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq7">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody7" aria-expanded="false" aria-controls="faqBody7">
                      <span class="accordion__button-content">What is leverage in Currency trading?</span>
                    </button>
                  </div>
                  <div id="faqBody7" class="accordion-collapse collapse" aria-labelledby="faq7"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Leverage allows traders to control a larger position with a smaller amount of capital. For example, with 1:100 leverage, you can control $100,000 with just $1,000 in your account.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 8 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq8">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody8" aria-expanded="false" aria-controls="faqBody8">
                      <span class="accordion__button-content">What are the risks involved in Currency trading?</span>
                    </button>
                  </div>
                  <div id="faqBody8" class="accordion-collapse collapse" aria-labelledby="faq8"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">1. Market volatility<br>2. Leverage risk<br>3. Liquidity risk</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 text-center mt-4">
                <a href="{{ url('/faq') }}" class="btn btn-outline-primary">Show More</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="faq__thumb faq__thumb--style1" data-aos="fade-left" data-aos-duration="1000">
            <img class="dark faq-image" src="{{ asset('') }}assets/images/others/1.png" alt="faq-thumb">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="faq__shape faq__shape1"></div>
  <div class="faq__shape faq__shape2"></div>
</section>

<!-- ===============>> FAQ section start here <<================= -->





<!-- ===============>> cta section start here <<================= -->
<section class="cta padding-top padding-bottom  bg-color">
  <div class="container">
    <div class="cta__wrapper">
      <div class="cta__newsletter justify-content-center">
        <div class="cta__newsletter-inner" data-aos="fade-up" data-aos-duration="1000">
          <div class="cta__thumb">
            <img src="{{ asset('') }}assets/images/cta/3.png" alt="cta-thumb">
          </div>
          <div class="cta__subscribe">
            <h2> <span>Subscribe</span> our news</h2>
            <p>Hey! Are you tired of missing out on our updates? Subscribe to our news now and stay in the loop!</p>
            <form class="cta-form cta-form--style2 form-subscribe" action="#">
              <div class="cta-form__inner d-sm-flex align-items-center">
                <input type="email" class="form-control form-control--style2 mb-3 mb-sm-0"
                  placeholder="Email Address">
                <button class="trk-btn  trk-btn--large trk-btn--secondary2" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="cta__shape">
        <span class="cta__shape-item cta__shape-item--1"><img src="{{ asset('') }}assets/images/cta/2.png" alt="shape icon"></span>
        <span class="cta__shape-item cta__shape-item--2"><img src="{{ asset('') }}assets/images/cta/4.png" alt="shape icon"></span>
        <span class="cta__shape-item cta__shape-item--3"><img src="{{ asset('') }}assets/images/cta/5.png" alt="shape icon"></span>
      </div>
    </div>
  </div>
</section>
<!-- ===============>> cta section start here <<================= -->


@endsection