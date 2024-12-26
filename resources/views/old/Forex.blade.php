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
                <h2>Currencies</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Markets</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trade-markets') }}">Trade Markets</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Currencies</li>
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
<div class="service-details padding-bottom section-bg-color" style="margin-top:30px;">
    <div class="container">
        <div class="service-details__wrapper">
            <div class="row g-5 mb-20">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/forex-trading.jpeg" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Currency Trading</a></h3>
                                <p class="mb-5">Currency trading involves the exchange of currencies from different countries. It is the largest and most liquid financial market in the world, with a daily trading volume exceeding $6 trillion. Currency trading occurs in currency pairs, like EUR/USD (euro vs. U.S. dollar), where traders buy one currency and simultaneously sell another.</p>
                                <h5>Global Economic Stability</h5>
                                <p class="mb-2">Currency trading plays a vital role in global trade and investment. It enables businesses to convert one currency to another, facilitating international trade. For example, an American company that imports goods from Europe can use the currency market to exchange U.S. dollars for euros to pay for the goods.</p>
                                <h5>Liquidity and Accessibility</h5>
                                <p class="mb-2"><b>Liquidity:</b> The currency market is extremely liquid, meaning traders can buy and sell currencies quickly and easily without significant price changes. This liquidity attracts a broad range of participants, from individuals to large financial institutions.</p>
                                <p class="mb-2"><b>Accessibility:</b> Unlike the stock market, the currency market operates 24 hours a day, 5 days a week, making it accessible to traders around the globe at any time. This flexibility allows people to trade at their convenience, whether they are professionals or retail traders.</p>
                                <h5>Profit from Market Movements</h5>
                                <p class="mb-2">The currency market is highly volatile, with constant price movements influenced by economic data, geopolitical events, and central bank policies. Traders can profit by speculating on these price movements in both rising and falling markets.</p>
                                <h5>Hedging Against Currency Risk:</h5>
                                <p class="mb-2">Many multinational companies and investors engage in currency trading to hedge against currency risk. For instance, if a U.S.-based company does business in Japan, it can trade in the currency market to protect itself from fluctuations in the yen and dollar exchange rate. Hedging helps companies mitigate losses due to unfavorable currency movements.</p>
                                <h5>Low Trading Costs</h5>
                                <p class="mb-2">The cost of currency trading is relatively low compared to other financial markets. Most currency brokers charge no commissions, relying instead on the spread (the difference between the buy and sell price of a currency pair) to make money. This makes currency trading an attractive option for retail traders looking for low-cost ways to engage in financial markets.</p>
                                <h5>Opportunities for Small and Large Investors:</h5>
                                <p class="mb-2">Currency trading is open to all levels of investors, from large financial institutions like banks and hedge funds to individual retail traders. With advances in technology, individuals can now participate in the currency market through online trading platforms, even with small amounts of capital.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Currency Explained</a></h3>
                                <h5>A quick snapshot of FX</h5>
                                <p class="mb-2">Currency trading is the act of speculating on the movement of exchange prices by buying one currency while simultaneously selling another.</p>
                                <h5>There’s no larger market</h5>
                                <p class="mb-2">With an average turnover in excess of $7.5 trillion a day*, currency prices are constantly fluctuating – creating endless trading opportunities in the world's most traded market.</p>
                                <h5>Currency Never Sleeps</h5>
                                <p class="mb-2">As a globally traded market, the currency market is open 24 hours a day, five days a week (Sunday 5 PM to Friday 5 PM).</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/forex-explained.jpg" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/m2.png" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/mobile1.png" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-2"> <a class="stretched-link" href="javascript:void(0);">Award-winning Currency Trading App</a></h3>
                                <p class="mb-3">A must-have for technical traders, our charts, powered by MetaTrader 5, come with over 38 indicators, 44 drawing tools, 21 time intervals, and a host of customization features.</p>
                                <h5>MetaTrader Charts</h5>
                                <p class="mb-1">38+ indicators, 3 chart types, and 21 timeframes.</p>
                                <h5>Performance Analytics</h5>
                                <p class="mb-1">Analyze your decision-making with the latest behavioural science technology.</p>
                                <h5>Total Control</h5>
                                <p class="mb-1">Customize your notifications and alerts to stay on top of the markets.</p>
                                <h5>Trading Research</h5>
                                <p class="mb-1">Access integrated market analysis, a full economic calendar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ===============>> Service section end here <<================= -->

@endsection
