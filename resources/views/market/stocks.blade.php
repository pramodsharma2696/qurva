@extends('master')
@section('contents')

<style>
    .caption-content h2 {
        font-size: 70px;
        line-height: 55px;
        color: #000;
        font-weight: 700;
    }
    .about-img1 img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
    .section-padding {
        padding-top: 60px;
        padding-bottom: 60px;
    }
    .text-center h4, .text-center p {
        margin-bottom: 20px;
    }
</style>

<!-- Hero Section -->
<section class="hero-area two" style="background-image: url(uploads/new/stock/8.jpg); background-size: 100% 100%; padding: 0; height: auto;">
    <div class="overlay_two">    
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="caption-content two">
                        <h2>Trade Stocks Confidently <br> with Qorva Markets</h2>
                        <p>Welcome to Qorva Markets, your gateway to the exciting world of <strong>stock trading</strong>. Whether you're an experienced trader or exploring stock investments for the first time, we offer a platform built for simplicity, performance, and profitability.</p>
                        <ul>
                            <li><a href="#">Register</a></li>
                            <li><a class="btn-bg" href="#">Try Demo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- About Section -->
<section class="about-area c_text section-padding">
    <div class="container">
        <div class="row align-items-center pb-5">
            <div class="col-md-6">
                <div class="about-img1">
                    <img src="{{ asset('uploads/new/stock/4.jpg') }}" class="img_res" alt="Stock Trading">
                </div>
            </div>
            <div class="col-md-6">
                <div class="align-middle d-table-cell">
                    <h5 class="lg_font">What is Stock Trading?</h5>
                    <p>Stock trading involves buying and selling shares of publicly traded companies. It’s a powerful way to grow wealth, leverage market opportunities, and diversify your portfolio. At Qorva Markets, we make trading seamless, providing access to global stock markets with cutting-edge tools and resources for informed decision-making.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center pt-5 pb-5">
            <div class="col-md-6">
                <div class="align-middle d-table-cell">
                    <h5 class="lg_font">Why Choose Qorva Markets for Stock Trading?</h5>
                    <h4>Access to Global Indices</h4>
                    <p>Trade stocks from leading markets worldwide, including:</p>
                    <ul>
                        <li>US Stocks: Apple, Tesla, Amazon, and more.</li>
                        <li>European Equities: Nestlé, Volkswagen, and LVMH.</li>
                        <li>Asian Markets: Alibaba, Toyota, and Samsung.</li>
                    </ul>

                    <h4>Simplified Trading Tools</h4>
                    <ul>
                        <li>Real-time stock market analysis for faster decisions.</li>
                        <li>Customizable stock trading strategies tailored to your goals.</li>
                        <li>Advanced charts and indicators for tracking stock trends.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-img1">
                    <img src="{{ asset('uploads/new/stock/1.jpg') }}" class="img_res" alt="Global Indices" style="height: 550px;">
                </div>
            </div>
        </div>

        <div class="row align-items-center pt-5 pb-5">
            <div class="col-md-6">
                <div class="about-img1">
                    <img src="{{ asset('uploads/img2.jpg') }}" class="img_res" alt="Competitive Pricing">
                </div>
            </div>
            <div class="col-md-6">
                <h4>Competitive Pricing</h4>
                <p>Enjoy low spreads, transparent fees, and cost-effective trading, ensuring more of your investment works for you.</p>

                <h4>Secure and Reliable</h4>
                <p>Trade with peace of mind using our secure platform, protecting your account and transactions with the highest standards of security.</p>
            </div>
        </div>

        <div class="row align-items-center pt-5 pb-5">
            <div class="col-md-6">
                <div class="align-middle d-table-cell">
                    <h5 class="lg_font">Features of Qorva Markets’ Stock Trading Platform</h5>
                    <h4>Customizable Trading Dashboards</h4>
                    <p>Stay in control with intuitive dashboards that allow you to manage and monitor your stock portfolio effortlessly.</p>

                    <h4>Market Insights and Analytics</h4>
                    <ul>
                        <li>Stock trading tips and strategies.</li>
                        <li>Regular updates on market-moving events.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-img1">
                    <img src="{{ asset('uploads/new/stock/2.jpg') }}" class="img_res" alt="Market Insights" style="height: 450px;">
                </div>
            </div>
        </div>

        <div class="row align-items-center pt-5 pb-5">
            <div class="col-md-6">
                <div class="about-img1">
                    <img src="{{ asset('uploads/new/stock/6.jpg') }}" class="img_res" alt="Educational Resources">
                </div>
            </div>
            <div class="col-md-6">
                <h4>Educational Resources</h4>
                <ul>
                    <li>How to trade stocks effectively.</li>
                    <li>Strategies for reducing risks in volatile markets.</li>
                    <li>Long-term vs. short-term trading approaches.</li>
                </ul>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-md-12">
                <h4>Leverage and Margin Options</h4>
                <p>Maximize your opportunities with flexible leverage options, allowing you to trade stocks with minimal capital requirements.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h5 class="lg_font">The Qorva Advantage in Stock Trading</h5>
                <h4>Innovative Technology</h4>
                <ul>
                    <li>Real-time market data.</li>
                    <li>Automated trading solutions for better efficiency.</li>
                    <li>Tools for identifying high-performing stocks.</li>
                </ul>

                <h4>For Every Type of Investor</h4>
                <ul>
                    <li>New Investors: Learn the basics with beginner-friendly features and guides.</li>
                    <li>Experienced Traders: Access advanced analytics and high-speed execution for superior trading.</li>
                    <li>Passive Investors: Build a portfolio with long-term growth potential.</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h5 class="lg_font">Start Your Stock Trading Journey Today</h5>
                <p>Join Qorva Markets and unlock the potential of global stock markets. From day trading stocks to long-term investments, our platform equips you with everything you need to succeed.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h5 class="lg_font">Start Trading Indices Today</h5>
                <p>Qorva Markets empowers you to stay ahead in the dynamic world of indices trading. Sign up today to unlock the potential of global markets with the tools, resources, and support you need to succeed.</p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-area two" style="background: #2289e6;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="sec-heading text-center">
                    <h2 class="text-white">Join Our Exclusive Community</h2>
                    <p class="text-white">Hey! Are you tired of missing out on the latest updates? <br>Subscribe to our community now and stay in the loop.</p>
                </div>
            </div>
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
