<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return 'Olá, seja bem-vindo ao curso!';
});

Route::get('/about', function() {
    return 'Sobre nós';
});
 
Route::get('/contact', function() {
    return 'Contato';
});
*/

Route::get('/', 'App\Http\Controllers\PrincipalController@principal');

Route::get('/about', 'App\Http\Controllers\SobreNosController@sobreNos');

Route::get('/contact', 'App\Http\Controllers\ContatoController@contato');
