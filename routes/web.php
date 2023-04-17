<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/new', function () {
    return view('navigation/navigation');
});
Route::get('/event', function () {
    return view('event/event');
});
Route::get('/events', function () {
    return view('event/events');
});
Route::get('/contact', function () {
    return view('contact/contact');
});
Route::get('/pay', function () {
    return view('pay/pay');
});
Route::get('/pays', function () {
    return view('pay/paymentsuccess');
});
