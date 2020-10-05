<?php


namespace MVC\src\controller;


use MVC\src\model\DAO\ClienteDAO;

class ValidarController
{

    public function login()
    {
//       require __DIR__."/../view/layout/TelaLogin.php";
////        require __DIR__."/../view/layout/header.php";
        require __DIR__ . "/../view/layout/header.php";
        require __DIR__ . "/../view/layout/footer.php";
    }

    public function logado()
    {
        echo "tela das logadooo";
        require __DIR__ . "/../view/layout/TelaLogin.php";
    }

    public function validaruserpassword()
    {

        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $clientedao = new ClienteDAO();
        $userReturn = $clientedao->verificarUserSenha($email, $senha);
        if ($userReturn != null) {
            $_SESSION['user'] = $userReturn->getEmail();
            $_SESSION['id'] = $userReturn->getId();
            $_SESSION['user_name'] = $userReturn->getName();

        }
        $_SESSION['message'] = "Usuário e/ou senha inválidos";

        header("Location: /");
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header("Location: /");
    }


}