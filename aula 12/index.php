<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - sistema de Login</title>
</head>

<body>


    <h1> Aula 12 - Sistema de Login</h1>

    <nav>
        <a href="index.php">Home</a>
        <a href="restrita.php">Area restrita</a>
    </nav>

        <?php require_once 'functions.php';

        verificar_codigo();

        ?>

    <h2> Informe seus dados para acessar a área restrita

        <form action="validar.php" method="post">

            <p>
                <label for="usuario">Usuario:</label><br>
                <input type="text" name="usuario" id="usuario">

            </p>

            <p>
                <label for="senha">senha:</label><br>
                <input type="password" name="senha" id="senha">

            </p>

            <button type="submit" Logar>enviar</button>
        </form>

</body>

</html>