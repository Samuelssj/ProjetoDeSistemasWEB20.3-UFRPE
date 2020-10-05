 <?php
function getConnection()
{

    $connection = new mysqli("localhost","root","","mercadoverde_db");


    if(mysqli_connect_errno()){
        echo "conexaõ falhou" . mysqli_connect_error();
        exit(0);
    }else{

   return $connection;
    }
}