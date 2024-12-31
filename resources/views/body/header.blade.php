
 
    <!-- start header-top-area -->
    <header class="header-area">
       <!--  <div class="header-top-area">
            <div class="container">
                 <span class="dat"></span>
                 <span class="dat"></span>
                 <span class="dat"></span>
                 <span class="dat"></span>
                 <span class="dat"></span>
            </div>
        </div> -->
        <!--end header-top-area-->
        <div class="sidebar-wrap">
        <div class="sidebar-inner">
            <div class="sidebar-close">
                <div class="sidebar-close-btn">
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-logo">
                    <a href="{{ url('/') }}">
                        <img class="img-fluid" src="{{ asset('') }}uploads/logo.png" alt="logo.png">
                    </a>
                </div>

                <div class="main_menu text-left">
                     <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>
                            <a href="#">Markets</a> <span class="plus_min"></span>
                            <ul class="sub-menu">
                            <li id="Trade_Markets"><a href="{{ url('/trade-markets') }}">Trade Markets</a></li>
                            <li id="Currency"><a href="{{ url('/currency') }}">Currency</a></li>
                            <li id="Indices"><a href="{{ url('/indices') }}">Indices</a></li>
                            <li id="Stocks"><a href="{{ url('/stocks') }}">Stocks</a></li>
                            <li id="Cryptocurrency"><a href="{{ url('/cryptocurrency') }}">Cryptocurrency</a></li>
                            <li id="Commodities"><a href="{{ url('/commodities') }}">Commodities</a></li>
                            <li id="Gold_and_Silver"><a href="{{ url('/gold-and-silver') }}">Gold and Silver</a></li>
                        </ul>
                        </li>
                         
                         <li><a href="#">Accounts</a>
                         <ul class="sub-menu">
                            <li><a href="{{ url('/standard-account') }}">Standard Account</a></li>
                            <li><a href="{{ url('/raw-spread-account') }}">RAW Spread Account</a></li>
                            <li><a href="{{ url('/STP-Pro-Account') }}">STP Pro Account</a></li>
                            <li><a href="{{ url('/financial-Transparency') }}">Transparent accounting</a></li>
                            <li><a href="{{ url('/execution') }}">Execution</a></li>
                            <li><a href="{{ url('/margin-requirements') }}">Margin Requirements</a></li>
                            <li><a href="{{ url('/rollover-rates') }}">Rollover Rates</a></li>
                        </ul>
                                </li>
                        <li><a href="#">Tools</a></li>
                        <li><a href="#">Company</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/contact-us') }}">Contactus</a></li>
                                <li><a href="{{ url('/faq') }}">Faq</a></li>
                                <li><a href="{{ url('/blog') }}">Blog</a></li>
                                <li><a href="{{ url('/testimonial') }}">Testimonial</a></li>
                            </ul>
                        </li>
                    </ul>       
                </div>
                
              
            </div>
        </div>
    </div>
        <!--start header-btm-area-->
        <div class="header-btm-area">
            <div class="container">
                <div class="main-menu-wrap">
                    <!--start site logo-->
                    <div class="site-logo">
                        <a class="logo" href="{{ url('/') }}"><img src="{{ asset('') }}uploads/logo.png" alt="logo"></a>
                    </div>
                    <!--end site logo-->
                    <!--start mainmenu-->
                    <div class="main-menu-area text-left">
                        <nav class="mainmenu">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>
                                    <a href="#">Markets</a>
                                    <ul class="sub-menu">
                                        <li id="Trade_Markets"><a href="{{ url('/trade-markets') }}">Trade Markets</a></li>
                                        <li id="Currency"><a href="{{ url('/currency') }}">Currency</a></li>
                                        <li id="Indices"><a href="{{ url('/indices') }}">Indices</a></li>
                                        <li id="Stocks"><a href="{{ url('/stocks') }}">Stocks</a></li>
                                        <li id="Cryptocurrency"><a href="{{ url('/cryptocurrency') }}">Cryptocurrency</a></li>
                                        <li id="Commodities"><a href="{{ url('/commodities') }}">Commodities</a></li>
                                        <li id="Gold_and_Silver"><a href="{{ url('/gold-and-silver') }}">Gold and Silver</a></li>
                                    </ul>
                                </li>
                                 
                                <li><a href="{{ url('/account-Types') }}">Accounts</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/standard-account') }}">Standard Account</a></li>
                                        <li><a href="{{ url('/raw-spread-account') }}">RAW Spread Account</a></li>
                                        <li><a href="{{ url('/STP-Pro-Account') }}">STP Pro Account</a></li>
                                        <li><a href="{{ url('/financial-Transparency') }}">Transparent accounting</a></li>
                                        <li><a href="{{ url('/execution') }}">Execution</a></li>
                                        <li><a href="{{ url('/margin-requirements') }}">Margin Requirements</a></li>
                                        <li><a href="{{ url('/rollover-rates') }}">Rollover Rates</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Tools</a></li>
                                <li><a href="#">Company</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/contact-us') }}">Contactus</a></li>
                                        <li><a href="{{ url('/faq') }}">Faq</a></li>
                                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                                        <li><a href="{{ url('/testimonial') }}">Testimonial</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--end mainmenu-->
                    <!--start cart icon-->
                   
                    <!--end cart icon-->
                    <!--start login registration btn-->
                    <div class="header-log-reg text-right">
                        <a href="{{ url('/login') }}" class="login_cl"><button class="login_cl">Login</button></a>
                        <a href="{{ url('/register') }}" class="reg_cl"><button class="reg_cl">Register</button></a>
                    </div>
                    <!--end login registration btn-->
                    <!--start toggle button-->
                    <div class="header-toggle-btn">
                        <a class="sidebar-toggle-btn" style="float: right; margin-top: 11px;">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <!--end toggle button-->
                </div>
            </div>
        </div>
    </header>