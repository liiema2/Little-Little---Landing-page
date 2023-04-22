<?php

use App\Http\Controllers\pay;

Route::get('/', function () {
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
Route::get('/contacts', function () {
    return view('contact/contacted');
});

// Route::get('event',)->name('update_check');
Route::get('pay', [pay::class, 'index'])->name('pay');
Route::get('pays', [pay::class, 'pay'])->name('pays');
Route::get('contacted', [pay::class, 'contact'])->name('contacted');
