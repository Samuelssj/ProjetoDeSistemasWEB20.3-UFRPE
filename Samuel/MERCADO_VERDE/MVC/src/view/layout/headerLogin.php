<!doctype html>
        <html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mercado Verde</title>
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&family=Roboto:ital,wght@0,700;1,300&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<div class="bartop">

    <div class="logo">
        <img class="logo" src="" alt="" srcset="/imagens/LG.png">
    </div>
    <div class="menu">
        <div class="elementos">
            <a href="/cestasprontas">Cestas Prontas</a>
            <a href="/tarefas">Como Funciona</a>
            <a href="/tarefas">Mercado</a>

            <input type="submit" name="login" id="btlogin" value="Login">
            <input type="submit" name="cadastrar" id="btcadastrar" value="Cadastre-se!">

        </div>

    </div>

</div>


<div class="mensagem">

    <figure id="container">
        <img src="" alt="" srcset="/imagens/baner2.png" width=100% height=250px>
        <figcaption><pre>
                "O COVID-19 criou distância social e corações unidos.
                Abalou as pessoas ao ver o que mais importa
                na vida e lembra-nos que Deus ainda está no controle."
                (Farshad Asl) - Vai passar :)
            </pre>

        </figcaption>
    </figure>
</div>




<?php
if (isset($_SESSION['mensagem'])) {
    echo "<p>" . $_SESSION['mensagem'] . "</p>";
    unset($_SESSION['mensagem']);
}

?>



