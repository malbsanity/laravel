<?php

use Illuminate\Support\Facades\Route;


Route::post('/validate-age', function () {
    $age = request('age'); // Get the age from the request

    if ($age < 18) {
        // Redirect to access denied page if age is less than 18
        return redirect()->route('access-denied'); // Ensure this route is defined
    } else {
        // Redirect to welcome page if age is 18 or above
        return redirect()->route('welcome'); // Ensure this route is defined
    }
})->name('validate-age');

Route::get('/', function () {
    return view('landing');
});

Route::get('/access-denied', function () {
    return view('access-denied'); // Create this view
})->name('access-denied');


Route::get('/welcome', function () {
    return view('welcome'); 
})->name('welcome');

Route::get('/restricted-area', function () {
    return view('restricted-area'); 
})->middleware('check.age');


Route::get('/works', function () {
    return view('works');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/setup', function () {
    return view('setup');
});

Route::get('/routes', function () {
    return view('routes');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/middleware', function () {
    return view('middleware');
});
