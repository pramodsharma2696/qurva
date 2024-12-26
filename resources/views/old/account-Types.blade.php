@extends('master')
@section('contents')
    <style>
      img.dark {
  width: 150px;
  height: 150px;
}
    </style>

  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
    <div class="container">
      <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
        <h2>Account</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Account Type</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__shape">
        <span class="page-header__shape-item page-header__shape-item--1"><img src="{{ asset('') }}assets/images/header/2.png"
            alt="shape-icon"></span>
      </div>
    </div>
    </div>
  </section>
  <!-- ================> Page header end here <================== -->

  <!-- ===============>> Service section start here <<================= -->
  <section class="service padding-top padding-bottom">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5"><span>Account</span> Type</h2>
      <p>One trusted provider. Four flexible account options.</p>
    </div>
    <div class="container">
      <div class="service__wrapper">
        <div class="row g-4 align-items-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="{{ asset('') }}assets/images/others/standard-account.webp" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 > <a class="stretched-link" href="{{ url('/standard-account') }}">Standard account</a> </h5>
                  <p class="mb-0">Ideal for traders looking for the traditional currency-trading experience, our standard account offers ultra-competitive spreads with no hidden costs. Available with our own award-winning web trading platform.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1000">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="{{ asset('') }}assets/images/others/commission-account.webp" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 > <a class="stretched-link" href="{{ url('/raw-spread-account') }}">RAW Spread account</a> </h5>
                  <p class="mb-0">For traders looking for the flexibility of trading significant reductions on spreads. Trade with spreads as low as 0.0 on FX majors on Qorva Markets trading platforms and MetaTrader.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="{{ asset('') }}assets/images/others/mt5.webp" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 > <a class="stretched-link" href="{{ url('/STP-Pro-Account') }}">STP Pro Account</a> </h5>
                  <p class="mb-0">The STP Pro Account at Qorva Markets is tailored for traders seeking enhanced trading conditions and direct market access.</p>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>

    <div class="service__shape">
      <span class="service__shape-item service__shape-item--1"><img src="{{ asset('') }}assets/images/icon/1.png"
          alt="shape-icon"></span>
    </div>
  </section>
  <!-- ===============>> Service section start here <<================= -->
  <section class="service padding-top padding-bottom">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5">What can you <span>trade</span>?</h2>
      <p>Compare our wide range of markets, all available to you in one place.</p>
    </div>
    <div class="container">
      <div class="service__wrapper">
        <div class="row align-items-center">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="{{ asset('') }}assets/images/others/forex.webp" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 > <a class="stretched-link" href="{{ url('/Forex') }}">Currencies</a> </h5>
                  <p class="mb-0">Learn all about the world's most traded market.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1000">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="{{ asset('') }}assets/images/others/stock.webp" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 > <a class="stretched-link" href="{{ url('/Stocks') }}">Stock</a> </h5>
                  <p class="mb-0">Access nearly 2,500 stock CFDs of household-name companies.</p>
                </div>
              </div>
            </div>
          </div>
           <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="{{ asset('') }}assets/images/others/cryptocurrency.webp" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 > <a class="stretched-link" href="{{ url('/Cryptocurrency') }}">Cryptocurrency</a> </h5>
                  <p class="mb-0">Explore the crypto market and trade Bitcoin, Ethereum, and more with a reliable, trusted broker.</p>
                </div>
              </div>
            </div>
          </div>
           <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="{{ asset('') }}assets/images/others/Indices.webp" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 > <a class="stretched-link" href="{{ url('/Indices') }}">Indices</a> </h5>
                  <p class="mb-0">Over 15 indices worldwide with extended trading hours.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="service__shape">
      <span class="service__shape-item service__shape-item--1"><img src="{{ asset('') }}assets/images/icon/1.png"
          alt="shape-icon"></span>
    </div>
  </section>

@endsection
