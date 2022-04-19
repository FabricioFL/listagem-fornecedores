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
            $dadosEmpresa = Database::getCompany($_POST['fornecedor-cnpj']);
            $empresa = $dadosEmpresa['nome_fantasia'];
            $nome = $_POST['fornecedor-nome'];
            $cnpj = $_POST['fornecedor-cnpj'];
            $telefone = $_POST['fornecedor-telefone'];
            Database::createProvider($empresa, $nome, $cnpj, null, null);
            Database::addPhoneToProvider($nome, $telefone);
        }
    }

    public static function listProviders()
    {
        $providerData = Database::getAllProviders();

        echo '<div class="row w-50">';
        foreach($providerData as $key => $value)
        {
            echo '<div class="col grid justify-content-center bg-3 p-3 m-3 rounded">';
            echo '<div class="text-light display-6 mb-3"><b>Fornecedor</b></div>';
            echo '<div class="text-light lead"><b>Empresa:</b><p>'.$value['empresa'].'</p></div>';
            echo '<div class="text-light lead"><b>Nome:</b><p>'.$value['nome'].'</p></div>';
            echo '<div class="text-light lead"><b>cnpj:</b><p>'.$value['cnpj'].'</p></div>';
            echo '<div class="text-light lead"><b>Telefone:</b><p>'.$value['telefone'].'</p></div>';
            echo '<div class="text-light lead"><b>Data/Hora:</b><p>'.$value['datahora_cadastro'].'</p></div>';
            echo '</div>';
        }
        echo '</div>';
    }


    public static function searchProviderByName()
    {
        //
    }

    public static function searchProviderByCNPJ()
    {
        //
    }

    public static function searchProviderByCPF()
    {
        //
    }
}