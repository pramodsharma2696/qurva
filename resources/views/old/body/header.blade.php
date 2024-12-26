<header class="header-section header-section--style2">
  <div class="header-bottom">
    <div class="container">
      <div class="header-wrapper">
        <div class="logo">
          <a href="{{ url('/') }}">
            <!-- <img class="dark" src="{{ asset('') }}assets/images/logo/logo-removebg.png" alt="logo" style="width: 180px;height: 51px;"> -->
            <img class="dark" src="{{ asset('') }}assets/images/logo/logo-new.png" alt="logo" style="width: 180px;height:auto;">
          </a>
        </div>
        <div class="menu-area">
          <ul class="menu menu--style1 custome-menu--style1">
             <!-- Mobile Login and Register Buttons -->
             <li class="mobile-actions d-lg-none">
              <a href="https://portal.qorvamarkets.com/en/login" class="trk-btn trk-btn-custom trk-btn--login">Login</a>
            </li>
            <li class="mobile-actions d-lg-none">
              <a href="https://portal.qorvamarkets.com/en/register" class="trk-btn trk-btn-custom trk-btn--register">Register</a>
            </li>
            <li class="setBackground">
              <a href="{{ url('/') }}">Home</a>
            </li>

            <li class="menu-item-has-children setBackground">
              <a href="#">Markets</a>
              <div class="mega-menu"> <!-- Mega Menu Wrapper -->
                <ul class="submenu">
                  <li>
                    <a class="child-title" href="{{ url('/trade-markets') }}">Trade Markets</a>
                    <ul>
                      <li><a href="{{ url('/Forex') }}">Currency</a></li>
                      <li><a href="{{ url('/Indices') }}">Indices</a></li>
                      <li><a href="{{ url('/Stocks') }}">Stocks</a></li>
                      <li><a href="{{ url('/Cryptocurrency') }}">Cryptocurrency</a></li>
                      <li><a href="{{ url('/Commodities') }}">Commodities</a></li>
                      <li><a href="{{ url('/Gold-and-Silver') }}">Gold and Silver</a></li>
                    </ul>
                  </li>
                  <li>
                    <a class="child-title" href="#">Popular FX Markets</a>
                    <ul>
                      <li><a href="{{ url('/EUR-USD') }}">EUR/USD</a></li>
                      <li><a href="{{ url('/GBP-USD') }}">GBP/USD</a></li>
                      <li><a href="{{ url('/USD-JPY') }}">USD/JPY</a></li>
                      <li><a href="{{ url('/USD-CHF') }}">USD/CHF</a></li>
                      <li><a href="{{ url('/Gold') }}">Gold (XAU/USD)</a></li>
                    </ul>
                  </li>
                  <!-- <li>
                    <a class="child-title" href="{{ url('/Popular-Indices') }}">Popular Indices</a>
                    <ul>
                      <li><a href="{{ url('/Wall-Street') }}">Wall Street</a></li>
                      <li><a href="{{ url('/US-SP-500') }}">US SP 500</a></li>
                      <li><a href="{{ url('/US-Tech-100') }}">US Tech 100</a></li>
                      <li><a href="{{ url('/Germany-40') }}">Germany 40</a></li>
                     </ul>
                  </li>
                  <li>
                    <a class="child-title" href="{{ url('/Popular-Stocks') }}">Popular Stocks</a>
                    <ul>
                      <li><a href="{{ url('/Tesla') }}">Tesla</a></li>
                      <li><a href="{{ url('/Amazon') }}">Amazon</a></li>
                      <li><a href="{{ url('/Apple') }}">Apple</a></li>
                      <li><a href="{{ url('/Nvidia') }}">Nvidia</a></li>
                     </ul>
                  </li>
                  <li>
                    <a class="child-title" href="{{ url('/Popular-Commodities') }}">Popular Commodities</a>
                    <ul>
                      <li><a href="{{ url('/US-Crude-Oil') }}">US Crude Oil</a></li>
                      <li><a href="{{ url('/UK-Crude-Oil') }}">UK Crude Oil</a></li>
                     </ul>
                  </li> -->
                </ul>
              </div>
            </li>
            <li class="menu-item-has-children setBackground">
              <a href="#">Accounts</a>
              <div class="mega-menu"> <!-- Mega Menu Wrapper -->
                <ul class="submenu">
                  <li>
                    <a class="child-title" href="{{ url('/account-Types') }}">Account Types</a>
                    <ul>
                      <li><a href="{{ url('/standard-account') }}">Standard Account</a></li>
                      <li><a href="{{ url('/raw-spread-account') }}">RAW Spread Account</a></li>
                      <li><a href="{{ url('/STP-Pro-Account') }}">STP Pro Account</a></li>
                      <!-- <li><a href="{{ url('/compare-account') }}">Compare Accounts</a></li> -->
                    </ul>
                  </li>
                  <li>
                    <a class="child-title" href="{{ url('/financial-Transparency') }}">Transparent accounting</a>
                    <ul>
                      <li><a href="{{ url('/execution') }}">Execution</a></li>
                      <li><a href="{{ url('/margin-requirements') }}">Margin Requirements</a></li>
                      <li><a href="{{ url('/rollover-rates') }}">Rollover Rates</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </li>
            <li class="menu-item-has-children setBackground">
              <a href="#">System and Features</a>
              <div class="mega-menu"> <!-- Mega Menu Wrapper -->
                <ul class="submenu">
                  <!-- <li>
                    <a class="child-title" href="{{ url('/trading-tools') }}">Trading Tools</a>
                    <ul>
                      <li><a href="{{ url('/currency-converter') }}">Currency Converter</a></li>
                      <li><a href="{{ url('/margin-and-pip-calculator') }}">Margin and Pip Calculator</a></li>
                     
                    </ul>
                  </li> -->
                  <li>
                    <a class="child-title" href="#">Trading Calculator</a>
                    <ul>
                      <!-- <li><a href="https://figaro.fxbluelabs.com/iframe-axi/widget?type=margin-calculator" target="_blank">Margin Calculator</a></li>
                      <li><a href="https://figaro.fxbluelabs.com/iframe-axi/widget?type=pip-calculator" target="_blank">Pip Calculator</a></li>
                      <li><a href="https://figaro.fxbluelabs.com/iframe-axi/widget?type=profit-calculator" target="_blank">Profit Loss Calculator </a></li>
                      <li><a href="https://figaro.fxbluelabs.com/iframe-axi/widget?type=currency-converter-calculator" target="_blank">Currency Converter </a></li> -->
                      <!-- <li><a href="{{ url('/margin-calculator') }}">Margin Calculator</a></li> -->
                      <!-- <li><a href="{{ url('/pip-calculator') }}">Pip Calculator</a></li> -->
                      <li><a href="{{ url('/profit-loss-calculator') }}">Profit Loss Calculator </a></li>
                      <!-- <li><a href="{{ url('/currency-converter-calculator') }}">Currency Converter </a></li>  -->
                      <!-- <li><a href="{{ url('/pivot-points') }}">Pivot Points</a></li> -->
                    </ul>
                  </li>
                </ul>
              </div>
            </li>


            <li class="setBackground">
              <a href="{{ url('/contact') }}">Contact Us</a>
            </li>
            <li class="setBackground">
              <a href="{{ url('/faq') }}">FAQ</a>
            </li>
           
          </ul>

        </div>
        <!-- <div class="header-action">
          <div class="menu-area">

            <a href="https://portal.qorvamarkets.com/en/login" class="trk-btn trk-btn-custom trk-btn--login">Login</a>
            <a href="https://portal.qorvamarkets.com/en/register" class="trk-btn trk-btn-custom trk-btn--register">Register</a>

            
            <div class="header-bar d-lg-none header-bar--style1">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div> -->
        <div class="header-action">
          <div class="menu-area">
           
            <!-- Desktop View Actions -->
            <div class="d-none d-lg-block">
              <a href="https://portal.qorvamarkets.com/en/login" class="trk-btn trk-btn-custom trk-btn--login">Login</a>
              <a href="https://portal.qorvamarkets.com/en/register" class="trk-btn trk-btn-custom trk-btn--register">Register</a>
            </div>

            <!-- Mobile Menu Toggle Icon -->
            <div class="header-bar d-lg-none header-bar--style1">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>