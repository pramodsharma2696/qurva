<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/forex-trading', function () {
    return view('forex-trading');
});
Route::get('/qorva-markets', function () {
    return view('qorva-markets');
});
Route::get('/trade-forex', function () {
    return view('trade-forex');
});


// Accounts

Route::get('/account-Types', function () {
    return view('account-Types');
});
Route::get('/financial-Transparency', function () {
    return view('financial-Transparency');
});
Route::get('/standard-account', function () {
    return view('standard-account');
});
Route::get('/STP-Pro-Account', function () {
    return view('STP-Pro-Account');
});
Route::get('/raw-spread-account', function () {
    return view('raw-spread-account');
});
Route::get('/compare-account', function () {
    return view('compare-account');
});
Route::get('/execution', function () {
    return view('execution');
});
Route::get('/margin-requirements', function () {
    return view('margin-requirements');
});
Route::get('/rollover-rates', function () {
    return view('rollover-rates');
});

// System and Features


Route::get('/trading-tools', function () {
    return view('trading-tools');
});

Route::get('/currency-converter', function () {
    return view('currency-converter');
});

Route::get('/margin-and-pip-calculator', function () {
    return view('margin-and-pip-calculator');
});
Route::get('/pivot-points', function () {
    return view('pivot-points');
});


// Markets


Route::get('/trade-markets', function () {
    return view('trade-markets');
});

Route::get('/Forex', function () {
    return view('Forex');
});
Route::get('/Indices', function () {
    return view('Indices');
});
Route::get('/Stocks', function () {
    return view('Stocks');
});
Route::get('/Cryptocurrency', function () {
    return view('Cryptocurrency');
});
Route::get('/Commodities', function () {
    return view('Commodities');
});
Route::get('/Gold-and-Silver', function () {
    return view('Gold-and-Silver');
});



Route::get('/Popular-FX-Markets', function () {
    return view('Popular-FX-Markets');
});


Route::get('/EUR-USD', function () {
    return view('EUR-USD');
});
Route::get('/GBP-USD', function () {
    return view('GBP-USD');
});
Route::get('/USD-JPY', function () {
    return view('USD-JPY');
});
Route::get('/USD-CHF', function () {
    return view('USD-CHF');
});
Route::get('/Gold', function () {
    return view('Gold');
});



Route::get('/Popular-Indices', function () {
    return view('Popular-Indices');
});
Route::get('/Wall-Street', function () {
    return view('Wall-Street');
});
Route::get('/US-SP-500', function () {
    return view('US-SP-500');
});
Route::get('/US-Tech-100', function () {
    return view('US-Tech-100');
});
Route::get('/Germany-40', function () {
    return view('Germany-40');
});




Route::get('/Popular-Stocks', function () {
    return view('Popular-Stocks');
});
Route::get('/Tesla', function () {
    return view('Tesla');
});
Route::get('/Amazon', function () {
    return view('Amazon');
});
Route::get('/Apple', function () {
    return view('Apple');
});
Route::get('/Nvidia', function () {
    return view('Nvidia');
});



Route::get('/Popular-Commodities', function () {
    return view('Popular-Commodities');
});
Route::get('/US-Crude-Oil', function () {
    return view('US-Crude-Oil');
});
Route::get('/UK-Crude-Oil', function () {
    return view('UK-Crude-Oil');
});


// System and Features >> Trading Calculator


Route::get('/margin-calculator', function () {
    return view('calculator.margin-calculator');
});
Route::get('/pip-calculator', function () {
    return view('calculator.pip-calculator');
});
Route::get('/profit-loss-calculator', function () {
    return view('calculator.profit-loss-calculator');
});
Route::get('/currency-converter-calculator', function () {
    return view('calculator.currency-converter-calculator');
});