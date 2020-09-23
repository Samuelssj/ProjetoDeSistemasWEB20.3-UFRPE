<?php
session_start();


if(!isset($_SESSION['usuario'])){
    header("location: Login.php");
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema</title>
</head>
<body>

<h1> Você esta logado: <?php


    echo $_SESSION['usuario'] . " Sua Senha em md5 = " . md5( $_SESSION['senha'] );


    ?></h1>


<a href="Logout.php"> Sair</a>
</body>
</html>