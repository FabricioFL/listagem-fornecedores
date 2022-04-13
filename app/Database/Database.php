<?php

namespace App\Database;

use PDO;



class Database
{
    private static pdo $db;

    private static function start() : void
    {
        self::$db = new pdo('mysql:host='.$_ENV['DBHOST'].';dbname='.$_ENV['DBNAME'], $_ENV['DBUSER'], $_ENV['DBPASSWORD']);

        $query = self::$db->prepare('CREATE TABLE IF NOT EXISTS users (
            _id varchar(64) primary key unique not null,
            _username varchar(255) unique not null,
            _email varchar(255) unique not null,
            _password varchar(255) not null
        )')->execute();

        $query = self::$db->prepare('CREATE TABLE IF NOT EXISTS empresas (
            id bigint primary key AUTO_INCREMENT,
            uf varchar(255) unique not null,
            nome_fantasia varchar(255) unique not null,
            cnpj varchar(14) unique not null
        )')->execute();

        $query = self::$db->prepare('CREATE TABLE IF NOT EXISTS fornecedores (
            id bigint primary key AUTO_INCREMENT,
            empresa varchar(255) not null,
            nome varchar(255) unique not null,
            cnpj varchar(14) unique,
            cpf varchar(11) unique,
            rg varchar(14) unique,
            telefone varchar(20) unique not null,
            datahora_cadastro datetime not null,
            foreign key (empresa) references empresas(nome_fantasia)
        )')->execute();
    }


    public static function createCompany(string $uf, string $fantasyName, string $cnpj) : void
    {
        self::start();
        $query = self::$db->prepare('INSERT IGNORE INTO empresas (id, uf, nome_fantasia, cnpj) VALUES (
            null,
            :_uf,
            :_fantasyname,
            :_cnpj
        )');
        $query->bindValue(':_uf', $uf);
        $query->bindValue(':_fantasyname', $fantasyName);
        $query->bindValue(':_cnpj', $cnpj);
        if($uf != null && $fantasyName != null && $cnpj != null)
        {
            $query->execute();
        }
    }

    public static function getCompany(string $nomeFantasia)
    {
        self::start();
        $query = self::$db->prepare('SELECT * FROM empresas WHERE nome_fantasia = :_fantasyname');
        $query->bindValue(':_fantasy_name', $nomeFantasia);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function createProvider(string $empresa, string $nome, string $cnpj, string $cpf, string $rg, string $telefone) : void
    {
        self::start();
        date_default_timezone_set('America/Sao_Paulo');
        $query = self::$db->prepare('INSERT IGNORE INTO providers (id, empresa, nome, cnpj, cpf, rg, telefone, datahora_cadastro) VALUES (
            null,
            :_empresa,
            :_nome,
            :_cnpj,
            :_cpf,
            :_rg,
            :_telefone,
            :_datahora_cadastro
        )');
        $query->bindValue(':_empresa', $empresa);
        $query->bindValue(':_nome', $nome);
        $query->bindValue(':_cnpj', $cnpj);
        $query->bindValue(':_cpf', $cpf);
        $query->bindValue(':_rg', $rg);
        $query->bindValue(':_telefone', $telefone);
        $query->bindValue(':_datahora_cadastro', date('Y-m-d H:i:s'));
        if($empresa != null && $nome != null && $telefone != null && $cnpj != null && $cpf == null && $rg == null)
        {
            $query->execute();
        }
        else if($empresa != null && $nome != null && $telefone != null && $cnpj == null && $cpf != null && $rg != null)
        {
            $query->execute();
        }
    }

    public static function getProviderByName(string $nome)
    {
        self::start();
        $query = self::$db->prepare('SELECT * FROM providers WHERE nome = :_nome');
        $query->bindValue(':_nome', $nome);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }


    public static function getProviderByCNPJ(string $cnpj)
    {
        self::start();
        $query = self::$db->prepare('SELECT * FROM providers WHERE cnpj = :_cnpj');
        $query->bindValue(':_cnpj', $cnpj);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function getProviderByCPF(string $cpf)
    {
        self::start();
        $query = self::$db->prepare('SELECT * FROM providers WHERE cpf = :_cpf');
        $query->bindValue(':_cpf', $cpf);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }


    public static function createUser(string $username, string $email, string $password) : void
    {
        self::start();
        $query = self::$db->prepare('INSERT IGNORE INTO users (_id, _username, _email, _password) VALUES (
            :_id,
            :_username,
            :_email,
            :_password
        )');

        $query->bindValue(':_id', hash('sha256', time()));
        $query->bindValue(':_username', $username);
        $query->bindValue(':_email', $email);
        $query->bindValue(':_password', $password);
        if($username != null && $email != null && $password != null)
        {
            $query->execute();
        }
    }

    public static function getUser(string $username)
    {
        self::start();
        $query = self::$db->prepare('SELECT * FROM users WHERE _username = :_username');
        $query->bindValue(':_username', $username);
        $query->execute();
        $data = $query->fetch(PDO::FETCH_ASSOC);

        return $data;
    }


    public static function updateUser(string $username, string $newUsername, string $newEmail, string $newPassword) : void
    {
        self::start();
        $query = self::$db->prepare('UPDATE users SET _username = :_newUsername, _email = :_newEmail, _password = :_newPassword WHERE _username = :_username');
        $query->bindValue(':_username', $username);
        $query->bindValue(':_newUsername', $newUsername);
        $query->bindValue(':_newEmail', $newEmail);
        $query->bindValue(':_newPassword', $newPassword);
        $query->execute();
    }

    public static function deleteUser(string $username, string $password) : void
    {
        self::start();
        $query = self::$db->prepare('DELETE FROM users WHERE _username = :_username, _password = :_password');
        $query->bindValue(':_username', $username);
        $query->bindValue(':_password', $password);
        $query->execute();
    }


}