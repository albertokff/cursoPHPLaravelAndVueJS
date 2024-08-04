<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');
Route::get('/about', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contact', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contact', [ContatoController::class, 'salvar'])->name('site.contato');
Route::get('/login', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');

Route::get('/contato/{nome}/{categoria_id}', //
    function(
        string $nome = 'Desconhecido', 
        int $categoria_id = 1
    ) {
        echo "Estamos aqui: $nome - $categoria_id";

    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/teste/{p1}/{p2}', 'App\Http\Controllers\TesteController@teste')->name('teste');

Route::middleware('log.acesso', 'autenticacao:ldap,visitante')->prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function() { return 'produtos'; })->name('app.produtos');
});