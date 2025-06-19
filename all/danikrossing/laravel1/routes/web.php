<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('home');
    return 'HELLO';
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

//request with a parameter
//{paramone}    :place holder
//$paramone     :parameter value
//http://localhost/danikrossing/laravel1/public/param/dani
Route::get('/param/{paramone}', function ($paramone) {
    //return view('param');
    return $paramone;
});

//request with multiple parameters
Route::get('/multiparam/{paramone}/{paramtwo}', function ($paramone,$paramtwo) {
    return $paramone.' - '.$paramtwo;
    //return view('multiparam');
});

//named routes
Route::get('/namedroute', function () {
    return 'named-route is a internal page call';
});

Route::get('/namedroutewithparam', function () {
    return 'named-route-with-param';
})->name("namedroutewithparam");

//grouped routes
//urls under same category or slug
Route::prefix("portfolio")->group(function (){
    Route::get('/company', function () {
        return view('company');
    });

    Route::get('/organization', function () {
        return view('organization');
    });
});