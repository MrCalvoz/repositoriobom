<?php

function form_nao_enviado()
{
    return $_SERVER['REQUEST_METHOD'] !== 'POST';
}

function campos_em_branco()
{
    return empty($_POST['usuario']) || empty($_POST['senha']);
}

function verificar_codigo()
{
    if (!isset($_GET['codigo'])) {
        return;
    }

    $codigo = (int)$_GET['codigo'];

    switch ($codigo) {
        case 0:
            $msg = "<h3>voce nao tem permissao para acessar a pagina requisitada </h3>";
            break;

        case 1:
            $msg = "<h3>usuario ou senha invalidos. Por favor, tente novamente!</h3>";
            break;

        case 2:
            $msg = "<h3>por favor, preencha todos os campos do form de login</h3>";
            break;

        default:
            $msg = "";
            break;
    }

    echo $msg;

}
