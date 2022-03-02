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

Route::get('/', function () {
    return view('home');
});

Route::get('/contacts', function () {
    $contattiAzienda = [
        'nome' => 'Azienda nuova',
        'email' => 'aiuwfhawu@isufgih.com',
        'indirizzo' => 'Via città 77',
        'città' => 'Milano',
        'telefono' => '+3903435546768'
    ];

    return view('contacts', $contattiAzienda);
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/team', function () {
    return view('team');
});
