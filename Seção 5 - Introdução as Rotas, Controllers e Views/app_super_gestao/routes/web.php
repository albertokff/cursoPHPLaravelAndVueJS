<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Olá, seja bem-vindo ao curso!';
});

Route::get('/about', function() {
    return 'Sobre nós';
});

Route::get('/contact', function() {
    return 'Contato';
});