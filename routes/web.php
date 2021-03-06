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
        'azienda' => [
        'Nome' => 'Azienda nuova',
        'Email' => 'aiuwfhawu@isufgih.com',
        'Indirizzo' => 'Via città 77',
        'Città' => 'Milano',
        'Telefono' => '+3903435546768'
        ]
    ];

    return view('contacts', $contattiAzienda);
});

Route::get('/team', function () {
    $team = [
        'membri' => [
        'memb1' => 'Paolo Rossi',
        'memb2' => 'Marco Verdi',
        'memb3' => 'Giuseppe Gialli',
        'memb4' => 'Lorenzo Bianchi',
        'memb5' => 'Giovanni Rosa'
        ]
    ];
    return view('team', $team);
});
