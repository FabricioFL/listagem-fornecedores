<?php

namespace App\Controllers;

use App\Database\Database;
use \Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../../');
$dotenv->load();


class CompanyController
{
    public static function register() : void
    {

        $uf = $_POST['empresa-uf'];
        $fantasyName = $_POST['empresa-fantasyname'];
        $cnpj = $_POST['empresa-cnpj'];
        if($uf != null && $fantasyName != null && $cnpj!= null)
        {
            Database::createCompany($uf, $fantasyName, $cnpj);
        }
    }
}