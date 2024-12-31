@extends('master')
@section('contents')
<section class="page-banner-area" style="background-image:url(assets/images/banner-1.jpg)">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-content text-center">
                        <h1>Margin Requirements</h1>
                        <p><a href="#">Home</a> <span> &gt; </span>Margin Requirements</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
        </div>
    </section>

<section class="about-area c_text">
        <div class="container">
             
            <div class="row">              
                <div class="col-lg-12">
                    <div class="sdo_div_sec">
                        <h5 class="lg_font_color">View Margins for Different Account Types & Markets</h5>
                        <p>MMR on MetaTrader could be higher. The larger the trade size, the higher the risk level associated with the trade. Therefore, we may increase our margin requirements for larger size trades or any additional trades in that instrument. To do this, Qorva Markets increases the size of the margin requirement at specific quantity levels, known as step margin levels. You can view a market’s step margin levels in its Market Information Sheet within the Qorva Markets desktop platform.</p>

                        <p>Step margins are not present in MetaTrader platforms.</p>

                        <p>Hedging margin on Qorva Markets’s proprietary platforms is set to the ‘largest leg,’ whereby only the margin for the larger portion of the hedge trade will be applied, and not for the shorter leg.</p>

                        <p>If at any point, the equity available drops below 100% of the margin required you will be subject to auto liquidation of the position incurring the largest loss. The liquidation process for Qorva Markets proprietary platforms is as follows: the net aggregated open position with the greatest unrealized loss is closed first, followed by the next largest losing net position and so on, until the maintenance margin requirement is satisfied or exceeded. Depending on the size and unrealized P&L of the open positions, all open positions may be liquidated in order to meet the margin requirement.</p>

                        <p>The liquidation process for the MT4 and MT5 platforms is slightly different in that the system identifies the largest losing position and begins liquidating individual trades until your margin requirement is satisfied or exceeded. Depending on the size and unrealized P&L of the open positions, all open positions may be liquidated in order to meet the margin requirement.</p>

                        <p>You can also setup alerts so you are notified by e-mail when the available margin in your account falls below 120% of the margin requirement. Please note that this notification is for your convenience and should not be relied on to protect your account.</p>

                        <p>While our 100% margin requirement and real-time margin system is designed to limit your trading losses and help ensure that total losses never exceed your total account balance, you do risk incurring losses greater than your account balance, especially during periods of extreme market volatility. For this reason, we strongly encourage you to manage your use of leverage carefully. Increasing leverage increases risk.</p>

                        <p>Margin requirements are subject to change without notice, at the sole discretion of Qorva Markets.</p>
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