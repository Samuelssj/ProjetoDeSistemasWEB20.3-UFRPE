<?php
session_start();
$nome = $_POST["nome"];
$senha = $_POST["senha"];

//echo $nome . "   ". $senha;

if($nome == "maria" && $senha == "123"){
   $_SESSION["usuario"] = $nome;
    $_SESSION["senha"] = $senha;
   header("Location:index.php");


}else{
    $_SESSION["menssagem"] = "usuario/senha inválido";
    header("Location:index.php");
}