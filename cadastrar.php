<?php
require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Vaga');

use \App\Entity\Vaga; //uso da classe vaga dentro desse namespace;

//VALIDAÇÃO DO POST
if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){

    $obVaga = new Vaga;
    $obVaga->titulo     = $_POST['titulo'];
    $obVaga->descricao  = $_POST['descricao'];
    $obVaga->ativo      = $_POST['ativo'];
    $obVaga->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formularioCadastrar.php';
include __DIR__.'/includes/footer.php';