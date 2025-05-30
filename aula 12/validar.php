<?php
require_once 'functions.php'; //incluir arquivo de funçoes

// se chegamos aqui via GET (form nao foi enviado)
if (form_nao_enviado()) {
    header('location:index.php?codigo=0'); //sem permisao de acesso
    exit;
}

// se o form foi enviado, verificamos agora se há algum campo em branco
if (campos_em_branco()) {
    header('location:index.php?codigo=2');
    exit;
}

//pasando pelas validaçoes acima prosseguimos


//receber dados do form
$usuario    = $_POST['usuario'];
$senha      = $_POST['senha'];

//variaveis de login e senha temporarias (apenas para testes)

$login_usuario  = 'admin';
$login_senha    = 'admin123';

//verificar se usuario e senha estao incorretos
if ($usuario !== $login_usuario || $senha != $login_senha) {

    header('location:index.php?codigo=1');
    //codigo 1 - login ou senha inválidos
    exit;
}
// iniciar a sessao
session_start();
//registrar as variáveis de sessâo
$_SESSION['usuario']    = $usuario;
$_SESSION['senha']      = $senha;


//redirecionar para a pagina restrita

header('location:restrita.php');
