<?php
session_start();

if(isset($_SESSION['usuario'])){
    header("location: Logado.php");
}else{
    header("location: Login.php");
}

?>