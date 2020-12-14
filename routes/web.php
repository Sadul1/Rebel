<?php

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::post('enquiry/SendEnquiry', 'SendEmailController@sendEn');

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/webdesign', function () {
    return view('webdesign');
});

Route::get('/socialmedia', function () {
    return view('socialmedia');
});

Route::get('/branding', function () {
    return view('branding');
});

Route::get('/whyus', function () {
    return view('whyus');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/clients', function () {
    return view('clients');
});