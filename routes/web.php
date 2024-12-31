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



// Accounts menu

Route::get('/account-Types', function () {
    return view('account.account-Types');
});
Route::get('/financial-Transparency', function () {
    return view('account.financial-Transparency');
});
Route::get('/standard-account', function () {
    return view('account.standard-account');
});
Route::get('/STP-Pro-Account', function () {
    return view('account.STP-Pro-Account');
});
Route::get('/raw-spread-account', function () {
    return view('account.raw-spread-account');
});
Route::get('/compare-account', function () {
    return view('account.compare-account');
});
Route::get('/execution', function () {
    return view('account.execution');
});
Route::get('/margin-requirements', function () {
    return view('account.margin-requirements');
});
Route::get('/rollover-rates', function () {
    return view('account.rollover-rates');
});

// Markets menu


Route::get('/trade-markets', function () {
    return view('market.trade-markets');
});
Route::get('/currency', function () {
    return view('market.currency');
});
Route::get('/indices', function () {
    return view('market.indices');
});
Route::get('/stocks', function () {
    return view('market.stocks');
});
Route::get('/cryptocurrency', function () {
    return view('market.cryptocurrency');
});
Route::get('/commodities', function () {
    return view('market.commodities');
});
Route::get('/gold-and-silver', function () {
    return view('market.gold-and-silver');
});


//company menu


Route::get('/contact-us', function () {
    return view('company.contactus');
});
Route::get('/faq', function () {
    return view('company.faq');
});
Route::get('/blog', function () {
    return view('company.blog');
});
Route::get('/testimonial', function () {
    return view('company.testimonial');
});


// Auth
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});