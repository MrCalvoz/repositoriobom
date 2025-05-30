<?php session_start();
unset($_SESSION);   // apaga dados da variavel de sessao
session_destroy();  // finaliza a sessao
header('location:index.php');
