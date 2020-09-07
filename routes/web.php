<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('dashboard');
});
Route::get('/alltenders', function () {
    return view('alltenders');
});
Route::get('/mypayments', function () {
    return view('mypayments');
});
Route::get('/manageusers', function () {
    return view('manageusers');
});
Route::get('/payments', function () {
    return view('payments');
});
Route::get('/companyprofileinfo', function () {
    return view('companyprofileinfo');
});
Route::get('/mypayments', function () {
    return view('mypayments');
});
Route::get('/bankaccount', function () {
    return view('bankaccount');
});
Route::get('/newtender', function () {
    return view('newtender');
});
Route::get('/paymenthistory', function () {
    return view('paymenthistory');
});
Route::get('/paymentrequest', function () {
    return view('paymentrequest');
});
Route::get('/companyprofile', function () {
    return view('companyprofile');
});
Route::get('/companyinfo', function () {
    return view('companyinfo');
});
Route::get('/companyaddress', function () {
    return view('companyaddress');
});
Route::get('/userinfo', function () {
    return view('userinfo');
});
Route::get('/aaaaa', function () {
    return view('companyinfo');
});

