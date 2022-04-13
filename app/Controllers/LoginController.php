<?php

namespace App\Controllers;

use App\Database\Database;
use App\Http\Route;
use \Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../../');
$dotenv->load();

class LoginController
{

    public static function login() : void
    {
        session_start();
        if($_POST != null)
        {
            $userData = Database::getUser($_POST['username']);
            if($userData['_password'] == $_POST['password'])
            {
                $_SESSION['login'] = true;
                Route::redirect('/dashboard');
            }else if($userData != null && $userData['_password'] != $_POST['password'])
            {
                $_SESSION['login'] = false;
                echo '<div class="top-0 left-0 right-0 position-absolute text-center clert alert-danger">Senha incorreta 😕</div>';
            }else
            {
                $_SESSION['login'] = false;
                echo '<div class="top-0 left-0 right-0 position-absolute text-center clert alert-danger">Este perfil usuário não existe 😕</div>';
            }
        }
    }
}