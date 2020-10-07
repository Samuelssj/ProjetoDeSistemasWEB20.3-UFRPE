<?php


namespace MVC\src\controller;
use MVC\src\model\DAO\ProdutoDAO;
use MVC\src\model\VO\Tarefa;

class TarefasController implements interfaceController
{

    function index()
    {
        // TODO: Implement index() method.
        $tarefas =ProdutoDAO::findAll();
        require __DIR__ . "/../view/Crud/list.php";
    }

    function view()
    {
        // TODO: Implement view() method.
        $id = $_GET["id"];
        $tarefa = ProdutoDAO::findId($id);
        require __DIR__ . "/../view/Crud/view.php";
    }

    function edit()
    {
        // TODO: Implement edit() method.
       $id = $_GET['id'];
       $tarefa = ProdutoDAO::findId($id);
       require __DIR__ . "/../view/Crud/edit.php";

    }

    function create()
    {
        // TODO: Implement create() method.
        require __DIR__ . "/../view/Crud/create.php";
    }

    function store()
    {
        // TODO: Implement store() method.
        $tarefa = $_POST['tarefa'];
        $data = $_POST['data'];
        $tarefaVO = new Tarefa(null,$tarefa,$data);
        ProdutoDAO::create($tarefaVO);
        session_start();
        $_SESSION['mensagem']= "tarefa: $tarefa criada com sucesso!";
        header("Location: /Crud");
    }

    function update($id)
    {
        // TODO: Implement update() method.
        $id = $_GET['id'];
        $tarefa = $_POST['tarefa'];
        $data = $_POST['data'];
        $tarefaVO = new Tarefa(null,$tarefa,$data);
        ProdutoDAO::update($id,$tarefaVO);
        session_start();
        $_SESSION['mensagem']= "tarefa: $tarefa atualizada com sucesso!";
        header("Location: /Crud");
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
       $id = $_GET['id'];
       ProdutoDAO::delete($id);
        session_start();
        $_SESSION['mensagem']= "tarefa: $id Excluida com sucesso!";
        header("Location: /Crud");
    }
}