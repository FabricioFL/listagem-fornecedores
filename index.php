<?php

require __DIR__.'/vendor/autoload.php';
use App\Http\Route;
use \Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

session_start();

Route::get('/', function(){

    return Route::render('login');

});


Route::get('/signup', function(){

    return Route::render('signup');

});


Route::get('/dashboard', function(){
    return Route::render('dashboard');

});

Route::get('/cadastrar-empresas', function(){

     return Route::render('cadastrarEmpresas');

});

Route::get('/cadastrar-fornecedores', function(){

    return Route::render('cadastrarFornecedores');

});

Route::get('/listar-fornecedores', function(){

    return Route::render('listarFornecedores');

});

Route::get('/404', function(){
    
    return Route::render('404');

});


Route::get('/logout', function(){

    session_destroy();
    return Route::redirect('/');

});