<?php
session_start();

require __DIR__ . "./../autoload.php";

use MVC\src\controller\ValidarController;

use MVC\src\controller\ClienteController;

$auth_controller = new ValidarController;
$cliente_controle = new ClienteController();
$produto_controlle = new \MVC\src\controller\ProdutoController();

$path = "";

if (isset($_SERVER["PATH_INFO"])) {
    $path = $_SERVER["PATH_INFO"];
}

$method = $_SERVER["REQUEST_METHOD"];

//var_dump($_SESSION);
//exit(0);
switch ($path) {
    case "/validar":
        if ($method == "POST") {
            $auth_controller->validaruserpassword();

        } else {
            header("Location: /");
        }
        break;

    case "/logout":
        if ($method == "POST") {
            $auth_controller->logout();
        } else {
            header("Location: /");
        }
        break;

    case "/cliente":
        if($method == "POST") {

            $cliente_controle->store();
        }
    case "/cestasprontas":
        if($method == "GET") {
            $auth_controller->cestas();
            break;
        }
    default:
        if (isset($_SESSION['user'])) {
            switch ($path) {
                case "/cliente":
                    routes($cliente_controle);
                    break;

                case "/produto":
                    if($method == "GET") {
                        routes($produto_controlle);
                        break;
                    }
                default:
                    $auth_controller->logado();
                    break;
            }

        } else {
            $auth_controller->login();
        }
}

function routes($controller)
{

    $query = "";
    $id = null;

    if (isset($_SERVER["QUERY_STRING"])) {
        $query = explode("&", $_SERVER["QUERY_STRING"]);

        if (isset($query[1])) {
            $dataarray = explode("=", $query[1]);
            $id = $dataarray[1];
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if ($query !== "") {
            if ($query[0] == "create") {
                $controller->create();
            } else if ($query[0] == "view") {
                $controller->view($id);
            } else if ($query[0] == "edit") {
                $controller->edit($id);
            } else {
                echo "Resource not found";
            }
        } else {
            $controller->index();
        }
    } else {
        $metodo = "POST";
        if ($_POST['_method']) {
            $metodo = $_POST['_method'];
        }

        switch ($metodo) {
            case "POST":
                $controller->store();
                break;
            case "PUT":
                $controller->update($id);
                break;
            case "DELETE":
                $controller->delete($id);
                break;
            default:
                $_SESSION['message'] = "Method not implemented";
                header("Location: /");
        }


    }
}

;