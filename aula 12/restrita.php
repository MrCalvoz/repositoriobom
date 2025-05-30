<?php require_once 'lock.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>aula 12 - página restrita</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="restrita.php">Area restrita</a>
        <a href="logout.php" >Logout</a>
    </nav>

    <h2> bem vindo, <?=$_SESSION['usuario']?>! </h2>
    <h3>se voce esta nessa pagina vc esta logado corretamente</h3>
</body>

</html>