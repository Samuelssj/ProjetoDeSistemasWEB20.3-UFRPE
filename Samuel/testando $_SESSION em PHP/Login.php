
<?php
session_start();

if(isset($_SESSION['usuario'])){
    header("Location:Logado.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>teste de Session</title>
</head>
<body>
<div class="contender">

<form action="Validar.php" method="post" class="formulario">

    <br>
    <?php
    if(isset($_SESSION["menssagem"])){
        echo "<p>".$_SESSION['menssagem']."</p>";
        unset($_SESSION["menssagem"]);
    }


    ?>
    <br>




    <label class="texto"for="">Nome</label>
    <input  class="textfield" placeholder="Nome" type="text" name="nome" required>
    <label class="texto" for="">Senha</label>
    <input  class="textfield" placeholder="E-mail" name="senha" type="password" required>

    <input class="bt" type="submit" value="Entrar">

</form>



</div>
</body>
</html>