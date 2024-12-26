@extends('master')
@section('contents')


<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Margin Requirements</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item "><a href="{{ url('/financial-Transparency') }}">Transparent accounting</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Margin Requirements</li>
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
<div class="service-details padding-bottom section-bg-color" >
    <div class="container">
        <div class="service-details__wrapper">
            <div class="row flex-lg-row-reverse ">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-1"> <a class="stretched-link" href="javascript:void(0);">View Margins for Different Account Types & Markets</a></h3>
                                <p class="mb-5">MMR on MetaTrader could be higher. The larger the trade size, the higher the risk level associated with the trade. 
                                    Therefore, we may increase our margin requirements for larger size trades or any additional trades in that instrument. To do this,
                                     Qorva Markets increases the size of the margin requirement at specific quantity levels, known as step margin levels. You can view a market’s
                                     step margin levels in its Market Information Sheet within the Qorva Markets desktop platform.
                                </p>
                                <p class="mb-5">Step margins are not present in MetaTrader platforms.</p>
                                <p class="mb-5">Hedging margin on Qorva Markets’s proprietary platforms is set to the ‘largest leg,’ whereby only the margin for the larger portion of the hedge trade will be applied, and not for the shorter leg.
                                </p>
                                <p class="mb-5">If at any point, the equity available drops below 100% of the margin required you will be subject to auto liquidation of the position incurring the largest loss. The liquidation process for Qorva Markets proprietary platforms is as follows: the net aggregated open position with the greatest unrealized loss is closed first, followed by the next largest losing net position and so on, until the maintenance margin requirement is satisfied or exceeded. Depending on the size and unrealized P&L of the open positions, all open positions may be liquidated in order to meet the margin requirement.
                                </p>
                                <p class="mb-5">The liquidation process for the MT4 and MT5 platforms is slightly different in that the system identifies the largest losing position and begins liquidating individual trades until your margin requirement is satisfied or exceeded. Depending on the size and unrealized P&L of the open positions, all open positions may be liquidated in order to meet the margin requirement.
                                </p>
                                <p class="mb-5">
                                You can also setup alerts so you are notified by e-mail when the available margin in your account falls below 120% of the margin requirement. Please note that this notification is for your convenience and should not be relied on to protect your account.
                                </p>
                                <p class="mb-5">While our 100% margin requirement and real-time margin system is designed to limit your trading losses and help ensure that total losses never exceed your total account balance, you do risk incurring losses greater than your account balance, especially during periods of extreme market volatility. For this reason, we strongly encourage you to manage your use of leverage carefully. Increasing leverage increases risk.</p>
                                <p class="mb-5">Margin requirements are subject to change without notice, at the sole discretion of Qorva Markets.</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
           
           

        </div>
    </div>
</div>
</div>
<!-- ===============>> Service section start here <<================= -->



@endsection