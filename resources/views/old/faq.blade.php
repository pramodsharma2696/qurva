@extends('master')
@section('contents')


<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>FAQ</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
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
<!-- ===============>> FAQ section start here <<================= -->
<section class="faq padding-top padding-bottom of-hidden">
  <div class="section-header section-header--max65">
    <h2 class="mb-10 mt-minus-5"><span>Frequently</span> Asked Questions</h2>
    <p>Hey there! Got questions? We've got answers. Check out our FAQ page for all the deets. Still not satisfied? Hit us up.</p>
  </div>
  <div class="container">
    <div class="faq__wrapper">
      <div class="row g-5 align-items-center justify-content-between">
        <div class="col-lg-9">
          <div class="accordion accordion--style1" id="faqAccordion1" data-aos="fade-right" data-aos-duration="1000">
            <div class="row">
              <div class="col-12">
                <!-- FAQ 1 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq1">
                    <button class="accordion__button accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody1" aria-expanded="false" aria-controls="faqBody1">
                      <span class="accordion__button-content">What is currencies trading?</span>
                    </button>
                  </div>
                  <div id="faqBody1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Currencies (foreign exchange) trading involves buying and selling currency pairs to profit from changes in their exchange rates. It is the largest financial market globally, with daily trading volume exceeding $6 trillion.</p>
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
                      <span class="accordion__button-content">How does currencies trading work?</span>
                    </button>
                  </div>
                  <div id="faqBody2" class="accordion-collapse collapse" aria-labelledby="faq2"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Currencies trading is done in currency pairs, where one currency is bought and another is sold. The value of the pair fluctuates based on market conditions, and traders aim to profit by buying low and selling high.</p>
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
                      <span class="accordion__button-content">What is a spread in currencies?</span>
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
                      <span class="accordion__button-content">What is leverage in currencies trading?</span>
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
                      <span class="accordion__button-content">How do I manage risk in currencies trading?</span>
                    </button>
                  </div>
                  <div id="faqBody8" class="accordion-collapse collapse" aria-labelledby="faq8"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Risk management involves setting stop-loss orders, using appropriate position sizes, and never risking more than you can afford to lose on a trade.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 9 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq9">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody9" aria-expanded="false" aria-controls="faqBody9">
                      <span class="accordion__button-content">Can I trade cryptocurrencies on your platform?</span>
                    </button>
                  </div>
                  <div id="faqBody9" class="accordion-collapse collapse" aria-labelledby="faq9"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Yes, we offer cryptocurrency trading alongside traditional currency pairs.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 10 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq10">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody10" aria-expanded="false" aria-controls="faqBody10">
                      <span class="accordion__button-content">How can I withdraw my profits?</span>
                    </button>
                  </div>
                  <div id="faqBody10" class="accordion-collapse collapse" aria-labelledby="faq10"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">You can withdraw your profits through bank transfer, e-wallets, or crypto wallets, depending on your account type and preferences.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 11 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq11">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody11" aria-expanded="false" aria-controls="faqBody11">
                      <span class="accordion__button-content">What are the minimum deposit requirements?</span>
                    </button>
                  </div>
                  <div id="faqBody11" class="accordion-collapse collapse" aria-labelledby="faq11"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">The minimum deposit requirement varies depending on the account type. Please refer to our account comparison page for detailed information.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 12 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq12">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody12" aria-expanded="false" aria-controls="faqBody12">
                      <span class="accordion__button-content">Do you offer demo accounts?</span>
                    </button>
                  </div>
                  <div id="faqBody12" class="accordion-collapse collapse" aria-labelledby="faq12"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Yes, we offer demo accounts for traders to practice their skills with virtual funds before committing real money.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 13 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq13">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody13" aria-expanded="false" aria-controls="faqBody13">
                      <span class="accordion__button-content">Can I trade on my mobile phone?</span>
                    </button>
                  </div>
                  <div id="faqBody13" class="accordion-collapse collapse" aria-labelledby="faq13"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Yes, our platform is mobile-friendly, and we offer dedicated mobile apps for both iOS and Android devices.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <!-- FAQ 15 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq15">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody15" aria-expanded="false" aria-controls="faqBody15">
                      <span class="accordion__button-content">Do you offer demo accounts?</span>
                    </button>
                  </div>
                  <div id="faqBody15" class="accordion-collapse collapse" aria-labelledby="faq15"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Yes, we offer demo accounts for practice, allowing you to trade with virtual funds and experience live market conditions without any risk.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 16 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq16">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody16" aria-expanded="false" aria-controls="faqBody16">
                      <span class="accordion__button-content">How can I deposit and withdraw funds?</span>
                    </button>
                  </div>
                  <div id="faqBody16" class="accordion-collapse collapse" aria-labelledby="faq16"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">You can deposit and withdraw funds using bank transfers, credit/debit cards, and various e-wallets such as Skrill, Neteller, and PayPal.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 17 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq17">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody17" aria-expanded="false" aria-controls="faqBody17">
                      <span class="accordion__button-content">What are your trading hours?</span>
                    </button>
                  </div>
                  <div id="faqBody17" class="accordion-collapse collapse" aria-labelledby="faq17"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Currency trading is available 24 hours a day, five days a week, from Monday to Friday, across major financial centers worldwide.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 18 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq18">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody18" aria-expanded="false" aria-controls="faqBody18">
                      <span class="accordion__button-content">Do you charge any commissions?</span>
                    </button>
                  </div>
                  <div id="faqBody18" class="accordion-collapse collapse" aria-labelledby="faq18"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Commissions depend on the type of account you hold. For Standard accounts, we typically don’t charge commissions, but ECN accounts may have a small commission per trade.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 19 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq19">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody19" aria-expanded="false" aria-controls="faqBody19">
                      <span class="accordion__button-content">How can I contact customer support?</span>
                    </button>
                  </div>
                  <div id="faqBody19" class="accordion-collapse collapse" aria-labelledby="faq19"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">You can contact our customer support via live chat, email, or by phone. Our support team is available 24/7.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 20 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq20">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody20" aria-expanded="false" aria-controls="faqBody20">
                      <span class="accordion__button-content">Do you provide any educational resources?</span>
                    </button>
                  </div>
                  <div id="faqBody20" class="accordion-collapse collapse" aria-labelledby="faq20"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Yes, we offer a variety of educational resources including webinars, e-books, tutorials, and articles to help traders of all levels improve their skills.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 21 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq21">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody21" aria-expanded="false" aria-controls="faqBody21">
                      <span class="accordion__button-content">Can I trade on mobile?</span>
                    </button>
                  </div>
                  <div id="faqBody21" class="accordion-collapse collapse" aria-labelledby="faq21"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Yes, our trading platform is fully compatible with mobile devices. You can download our app for iOS or Android and trade on the go.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <!-- FAQ 22 -->
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq22">
                    <button class="accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody22" aria-expanded="false" aria-controls="faqBody22">
                      <span class="accordion__button-content">Is my money safe with you?</span>
                    </button>
                  </div>
                  <div id="faqBody22" class="accordion-collapse collapse" aria-labelledby="faq22"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">Yes, we ensure the safety of client funds through segregation of accounts and industry-standard encryption practices.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- row -->
          </div>
        </div>
        <div class="col-lg-3">
          <div class="faq__image text-center">
            <img src="{{ asset('')}}assets/images/others/1.png" alt="faq-image" class="w-100" data-aos="fade-left" data-aos-duration="1000">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===============>> FAQ section end here <<================= -->


              


<!-- ===============>> FAQ section start here <<================= -->
<!-- ===============>> Service section start here <<================= -->



@endsection