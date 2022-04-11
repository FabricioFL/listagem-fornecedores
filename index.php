<?php

use App\Http\Route;
use Dotenv\Dotenv;

require_once __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();



Route::render('/', 'index');

Route::render('/dashboard', 'dashboard');

Route::get('/logout', function(){
    session_start();
    session_destroy();
    Route::redirect('/');
});