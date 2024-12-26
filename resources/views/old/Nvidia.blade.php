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
                <h2>Nvidia</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Markets</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Popular FX Markets</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nvidia</li>
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
            <div class="row mb-10 flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <p class="mb-1">Price Chart</p>
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Nvidia Chart</a></h3>
                                <p class="mb-5">View indicative pricing and leverage information for Nvidia</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  g-5">
                <div class="col-lg-12">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js" async>
                            {
                                "symbols": [
                                    [
                                        "GETTEX:NVD|1M"
                                    ]
                                ],
                                "chartOnly": false,
                                "width": "100%",
                                "height": "500",
                                "locale": "en",
                                "colorTheme": "light",
                                "autosize": false,
                                "showVolume": false,
                                "showMA": false,
                                "hideDateRanges": false,
                                "hideMarketStatus": false,
                                "hideSymbolLogo": false,
                                "scalePosition": "right",
                                "scaleMode": "Normal",
                                "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                "fontSize": "10",
                                "noTimeScale": false,
                                "valuesTracking": "1",
                                "changeMode": "price-and-percent",
                                "chartType": "area",
                                "maLineColor": "#2962FF",
                                "maLineWidth": 1,
                                "maLength": 9,
                                "headerFontSize": "medium",
                                "lineWidth": 2,
                                "lineType": 2,
                                "dateRanges": [
                                    "1d|1",
                                    "1m|30",
                                    "3m|60",
                                    "12m|1D",
                                    "60m|1W",
                                    "all|1M"
                                ]
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>




        </div>
    </div>
</div>
</div>
<!-- ===============>> Service section start here <<================= -->



@endsection