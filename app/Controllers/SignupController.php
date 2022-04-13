<?php

namespace App\Controllers;

use App\Database\Database;
use \Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../../');
$dotenv->load();


class SignupController
{
    public static function register() : void
    {

        $username = $_POST['username_reg'];
        $email = $_POST['email_reg'];
        $password = $_POST['password_reg'];
        if($username != null && $email != null && $password != null)
        {
            Database::createUser($username, $email, $password);
        }
    }
}