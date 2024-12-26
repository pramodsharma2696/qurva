@extends('master')
@section('contents')


<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Profit Loss Calculator</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trading-tools') }}">System and Features</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trading-tools') }}">Trading calculator</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profit Loss Calculator</li>
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

            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <div class="calculator">
                                    <form id="profit-form">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="profitInstrument">Instrument Name:</label>
                                                <select class="form-control" id="profitInstrument" required>
                                                    <option value="">Select an instrument</option>
                                                    <option value="EUR/USD">EUR/USD</option>
                                                    <option value="GBP/USD">GBP/USD</option>
                                                    <option value="CAD/JPY">CAD/JPY</option>
                                                    <option value="AUD/USD">AUD/USD</option>
                                                    <option value="USD/CHF">USD/CHF</option>
                                                    <option value="NZD/USD">NZD/USD</option>
                                                    <option value="USD/CAD">USD/CAD</option>
                                                    <option value="EUR/GBP">EUR/GBP</option>
                                                    <option value="EUR/JPY">EUR/JPY</option>
                                                    <option value="GBP/JPY">GBP/JPY</option>
                                                    <option value="AUD/JPY">AUD/JPY</option>
                                                    <option value="XAU/USD">Gold (XAU/USD)</option>
                                                    <option value="XAG/USD">Silver (XAG/USD)</option>
                                                    <option value="WTI/USD">WTI Crude Oil</option>
                                                    <option value="BRENT/USD">Brent Crude Oil</option>
                                                    <option value="S&P 500">S&P 500 Index</option>
                                                    <option value="DAX 30">DAX 30 Index</option>
                                                    <option value="NASDAQ 100">NASDAQ 100 Index</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="profitVolume">Volume (in lots):</label>
                                                <input type="number" class="form-control" id="profitVolume" required min="0.01" step="0.01">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="entryPrice">Entry Price:</label>
                                                <input type="number" class="form-control" id="entryPrice" step="0.00001" required>
                                            </div>
                                            <div class="col">
                                                <label for="exitPrice">Exit Price:</label>
                                                <input type="number" class="form-control" id="exitPrice" step="0.00001" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="positionType">Position Type (1 for Buy, -1 for Sell):</label>
                                                <input type="number" class="form-control" id="positionType" required>
                                            </div>
                                            <div class="col">
                                            <label for="positionType"></label>
                                             <input type="text" class="form-control" id="profit-result" readonly>
                                                <!-- <span class=" form-control "><p id="profit-result"> </p> </span> -->

                                            </div>

                                        </div>
                                        <div class="col-12 offset-3">
                                            <label>&nbsp;</label>
                                            <button type="submit" class="btn btn-success col-3 p-3 offset-1" style="background:#00d094;border-color:#00d094">Calculate Profit</button>
                                        </div>
                                    </form>

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
<script>
const instruments = {
    "EUR/USD": {
        lotSize: 100000,
        leverage: 100
    },
    "GBP/USD": {
        lotSize: 100000,
        leverage: 100
    },
    "CAD/JPY": {
        lotSize: 100000,
        leverage: 100
    },
    "AUD/USD": {
        lotSize: 100000,
        leverage: 100
    },
    "USD/CHF": {
        lotSize: 100000,
        leverage: 100
    },
    "NZD/USD": {
        lotSize: 100000,
        leverage: 100
    },
    "USD/CAD": {
        lotSize: 100000,
        leverage: 100
    },
    "EUR/GBP": {
        lotSize: 100000,
        leverage: 100
    },
    "EUR/JPY": {
        lotSize: 100000,
        leverage: 100
    },
    "GBP/JPY": {
        lotSize: 100000,
        leverage: 100
    },
    "AUD/JPY": {
        lotSize: 100000,
        leverage: 100
    },
    "XAU/USD": {  // Gold
        lotSize: 100, // Adjust based on your trading standards (1 lot = 100 ounces)
        leverage: 100
    },
    "XAG/USD": {  // Silver
        lotSize: 5000, // Adjust based on your trading standards (1 lot = 5000 ounces)
        leverage: 100
    },
    "WTI/USD": {  // WTI Crude Oil
        lotSize: 1000, // Adjust based on your trading standards (1 lot = 1000 barrels)
        leverage: 100
    },
    "BRENT/USD": {  // Brent Crude Oil
        lotSize: 1000, // Adjust based on your trading standards (1 lot = 1000 barrels)
        leverage: 100
    },
    "S&P 500": {  // S&P 500 Index
        lotSize: 50, // Commonly used in CFDs
        leverage: 100
    },
    "DAX 30": {  // DAX 30 Index
        lotSize: 25, // Commonly used in CFDs
        leverage: 100
    },
    "NASDAQ 100": {  // NASDAQ 100 Index
        lotSize: 20, // Commonly used in CFDs
        leverage: 100
    },
};




    function calculateProfit(instrumentName, volume, entryPrice, exitPrice, positionType) {

        const lotSize = instruments[instrumentName].lotSize;


        let profit;
        if (positionType === 1) {
            profit = (exitPrice - entryPrice) * volume * lotSize;
        } else if (positionType === -1) {
            profit = (entryPrice - exitPrice) * volume * lotSize;
        } else {
            return "Invalid position type!";
        }
        return `Profit : $${profit.toFixed(2)}`;
    }


    document.getElementById('profit-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const instrumentName = document.getElementById('profitInstrument').value;
        const volume = parseFloat(document.getElementById('profitVolume').value);
        const entryPrice = parseFloat(document.getElementById('entryPrice').value);
        const exitPrice = parseFloat(document.getElementById('exitPrice').value);
        const positionType = parseInt(document.getElementById('positionType').value);

        const result = calculateProfit(instrumentName, volume, entryPrice, exitPrice, positionType);
        document.getElementById('profit-result').value = result;
    });
</scripT>
@endsection