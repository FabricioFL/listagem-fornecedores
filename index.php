<?php

require __DIR__.'/vendor/autoload.php';
use App\Http\Route;
use \Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

session_start();

Route::get('/', function(){

    Route::render('login');

});


Route::get('/signup', function(){

    Route::render('signup');

});


Route::get('/dashboard', function(){
    Route::render('dashboard');

});

Route::get('/cadastrar-empresas', function(){

    Route::render('cadastrarEmpresas');

});

Route::get('/cadastrar-fornecedores', function(){

    Route::render('cadastrarFornecedores');

});

Route::get('/listar-fornecedores', function(){

    Route::render('listarFornecedores');

});

Route::get('/404', function(){
    
    return 'Página não encontrada!';

});


Route::get('/logout', function(){

    session_destroy();
    Route::redirect('/');

});