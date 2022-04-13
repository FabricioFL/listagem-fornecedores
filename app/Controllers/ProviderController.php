<?php

namespace App\Controllers;

use App\Database\Database;
use \Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../../');
$dotenv->load();


class ProviderController
{
    public static function register()
    {
        if($_POST != null)
        {
            $empresa = $_POST['fornecedor-empresa'];
            $nome = $_POST['fornecedor-nome'];
            $cnpj = $_POST['fornecedor-cnpj'];
            $cpf = $_POST['fornecedor-cpf'];
            $rg = $_POST['fornecedor-rg'];
            $telefone = $_POST['fornecedor-telefone'];
            $dadosEmpresa = Database::getCompany($empresa);
            if($_POST['fornecedor-ispf'] == true && $dadosEmpresa['uf'] != 'PR')
            {

                Database::createProvider($empresa, $nome, null, $cpf, $rg, $telefone);

            }else if($_POST['fornecedor-ispf'] != true)
            {

                Database::createProvider($empresa, $nome, $cnpj, null, null, $telefone);

            }else if($_POST['fornecedor-ispf'] == true && $dadosEmpresa['uf'] == 'PR' && $_POST['fornecedor-pfisofage'] == true)
            {

                Database::createProvider($empresa, $nome, null, $cpf, $rg, $telefone);

            }
        }
    }
}