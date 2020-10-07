<?php


namespace MVC\src\model\DAO;

require "conect_database.php";

use MVC\src\model\VO\Produto;


class ProdutoDAO implements interfaceProdutoDAO
{


    function findAll()
    {
        // TODO: Implement findAll() method.
        $produto = [];
        $link = getConnection();
        $query = "select * from produto";

        if ($resut = $link->query($query)) {
            while ($row = $resut->fetch_row())
                $produto[] = new Produto($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
        }
        $link->close();
        return $produto;
    }

    function findbyID($id)
    {
        // TODO: Implement findId() method.

        $link = getConnection();
        $query = "select * from produto where id = $id";
        if ($resut = $link->query($query)) {
            while ($row = $resut->fetch_row()) {
                return new Produto($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);

            }

        }
        $link->close();
        return null;
    }

    function create(Produto $produto)
    {
        // TODO: Implement create() method.

        $link = getConnection();
        $query = "insert into produto (id,nome,marca,descricao,estoque,dataCadastro,preco) values ('{$produto->getId()}','{$produto->getName()}','{$produto->getMarca()}','{$produto->getDescricao()}','{$produto->getEstoque()}','{$produto->getDataCadastro()}','{$produto->getPreco()}{$_SESSION['user_id']}')";
        $result = $link->query($query);
        $link->close();
        if (!$result) {
            echo mysqli_error();
            exit(0);
        }

    }

    function update($id, Produto $produto)
    {

        $link = getConnection();
        $query = "update {$this->table} set name='{$produto->getName()}', marca='{$produto->getMarca()}', descricao={$produto->getDescricao()} ,estoque={$produto->getEstoque()}, dataCadastro={$produto->getDataCadastro()}, preco={$produto->getPreco()}where id={$id}";


        $result = $link->query($query);
        $link->close();
        if (!$result) {
            echo mysqli_error();
            exit(0);
        }

    }

    function delete($id)
    {
        // TODO: Implement delete() method.
        $link = getConnection();
        $query = "delete from Crud where id = $id";
        $link->query($query);
        $link->close();
    }


}