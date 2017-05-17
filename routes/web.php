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
    //$data = ['name' => 'Alex'];
    $name = 'admin';
    return view('welcome')->withName($name);
    //->with('nom', $name);
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/help', function () {
    return view('pages.help');
});
Route::get('/events', function () {
    
    $events = [
        'make php greater again',
        'php conference',
        'laravel conference'
    ];
    return view('events.index', compact('events'));
});



