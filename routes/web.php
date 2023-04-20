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

// Route::get('event',)->name('update_check');
Route::get('pay', [pay::class, 'index'])->name('pay');
