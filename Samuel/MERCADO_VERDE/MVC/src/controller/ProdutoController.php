<?php


namespace MVC\src\controller;

use MVC\src\model\DAO\ProdutoDAO;
use MVC\src\model\VO\Cliente;
use MVC\src\model\VO\Produto;

class ProdutoController implements interfaceController
{

    function index()
    {
        $ProdutoDAO = new ProdutoDAO();
        $dados = $ProdutoDAO->findAll();
        require __DIR__ . "/../view/Crud/list.php";
    }

    function view($id)
    {
        // TODO: Implement view() method.
        $ProdutoDAO = new ProdutoDAO();
        $dado = $ProdutoDAO>findById($id);
        if($dado != null){
           require __DIR__ . "/../view/Crud/view.php";
        }else{
            echo "Error 404";
        }
    }

    function edit($id)
    {
        // TODO: Implement edit() method.
        $ProdutoDAO = new ProdutoDAO();
        $dado = $ProdutoDAO->findById($id);
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
        $ProdutoDAO = new ProdutoDAO();
        $ProdutoVo = new Produto(null, $_POST['nome'],$_POST['marca'], $_POST['descricao'],$_POST['estoque'],$_POST['dataCadastro'],$_POST['preco'], 1);
        $ProdutoDAO->create($ProdutoVo);
        $_SESSION['message'] = "Cadastrado com sucesso";
        header("Location: /produto");

    }
    function update($id)
    {
        $ProdutoDAO = new ProdutoDAO();
        $ProdutoVo= new Produto(null, $_POST['nome'],$_POST['marca'], $_POST['descricao'],$_POST['estoque'],$_POST['dataCadastro'],$_POST['preco'], 1);
        $ProdutoDAO->update($id, $ProdutoVo);
        $_SESSION['message'] = "Atualizado com sucesso";
        header("Location: /produto");
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
        $ProdutoDAO = new ProdutoDAO();
        $ProdutoDAO->delete($id);
        $_SESSION['message'] = "Excluído com sucesso";
        header("Location: /produto");
    }
}