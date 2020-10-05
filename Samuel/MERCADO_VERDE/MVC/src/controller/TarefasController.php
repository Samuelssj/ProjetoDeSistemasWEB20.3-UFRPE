<?php


namespace MVC\src\controller;
use MVC\src\model\DAO\TarefaDAO;
use MVC\src\model\VO\Tarefa;

class TarefasController implements interfaceController
{

    function index()
    {
        // TODO: Implement index() method.
        $tarefas =TarefaDAO::findAll();
        require __DIR__."/../view/tarefas/list.php";
    }

    function view()
    {
        // TODO: Implement view() method.
        $id = $_GET["id"];
        $tarefa = TarefaDAO::findId($id);
        require __DIR__."/../view/tarefas/view.php";
    }

    function edit()
    {
        // TODO: Implement edit() method.
       $id = $_GET['id'];
       $tarefa = TarefaDAO::findId($id);
       require  __DIR__."/../view/tarefas/edit.php";

    }

    function create()
    {
        // TODO: Implement create() method.
        require __DIR__."/../view/tarefas/create.php";
    }

    function store()
    {
        // TODO: Implement store() method.
        $tarefa = $_POST['tarefa'];
        $data = $_POST['data'];
        $tarefaVO = new Tarefa(null,$tarefa,$data);
        TarefaDAO::create($tarefaVO);
        session_start();
        $_SESSION['mensagem']= "tarefa: $tarefa criada com sucesso!";
        header("Location: /tarefas");
    }

    function update($id)
    {
        // TODO: Implement update() method.
        $id = $_GET['id'];
        $tarefa = $_POST['tarefa'];
        $data = $_POST['data'];
        $tarefaVO = new Tarefa(null,$tarefa,$data);
        TarefaDAO::update($id,$tarefaVO);
        session_start();
        $_SESSION['mensagem']= "tarefa: $tarefa atualizada com sucesso!";
        header("Location: /tarefas");
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
       $id = $_GET['id'];
       TarefaDAO::delete($id);
        session_start();
        $_SESSION['mensagem']= "tarefa: $id Excluida com sucesso!";
        header("Location: /tarefas");
    }
}