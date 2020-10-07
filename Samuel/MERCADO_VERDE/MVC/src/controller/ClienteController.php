<?php


namespace MVC\src\controller;

use MVC\src\model\DAO\ClienteDAO;
use MVC\src\model\VO\Cliente;

class ClienteController implements interfaceController
{

    function index()
    {
        $clienteDAO = new ClienteDAO();
        $dados = $clienteDAO->findAll();
//        require __DIR__ . "/../view/disciplinas/listar.php";
    }

    function view($id)
    {
        // TODO: Implement view() method.
        $clienteDAO = new ClienteDAO();
        $dado = $clienteDAO>findById($id);
        if($dado != null){
//            require __DIR__ . "/../view/disciplinas/exibir.php";
        }else{
            echo "Error 404";
        }
    }

    function edit($id)
    {
        // TODO: Implement edit() method.
        $clienteDAO = new ClienteDAO();
        $dado = $clienteDAO->findById($id);
        if($dado != null){
//            require __DIR__ . "/../view/disciplinas/editar.php";
        }else{
            echo "Error 404";
        }
    }

    function create()
    {
        // TODO: Implement create() method.

    }

    function store()
    {
       $clienteDao = new ClienteDAO();
        $clientevo = new Cliente(null, $_POST['name'],$_POST['sobrenome'], $_POST['nascimento'],$_POST['email'],$_POST['senha'], 1);
        $clienteDao->create($clientevo);
        $_SESSION['message'] = "Cadastrado com sucesso";
        header("Location: /cliente");

    }
    function update($id)
    {
        // TODO: Implement update() method.
        $clienteDao = new ClienteDAO();
        $clienteVO= new Cliente(null, $_POST['name'],$_POST['sobrenome'], $_POST['nascimento'],$_POST['email'],$_POST['senha'], 1);
        $clienteDao->update($id, $clienteVO);
        $_SESSION['message'] = "Atualizado com sucesso";
        header("Location: /cliente");
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
        $clienteDao = new ClienteDAO();
        $clienteDao->delete($id);
        $_SESSION['message'] = "Excluído com sucesso";
        header("Location: /cliente");
    }
}