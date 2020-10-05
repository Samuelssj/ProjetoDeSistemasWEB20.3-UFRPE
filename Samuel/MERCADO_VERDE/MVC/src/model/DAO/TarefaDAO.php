<?php


namespace MVC\src\model\DAO;

require "conect_database.php";

use MVC\src\model\VO\Tarefa;

class TarefaDAO implements interfaceDAO
{




    static function findAll()
    {
        // TODO: Implement findAll() method.
        $tarefas = [];
        $link = getConnection();
        $query = "select * from tarefas";
        if ($resut = $link->query($query)) {
            while ($row = $resut->fetch_row())
                $tarefas[] = new Tarefa($row[0], $row[1], $row[2]);
        }
        $link->close();
        return $tarefas;
    }

    static function findId($id)
    {
        // TODO: Implement findId() method.

        $link = getConnection();
        $query = "select * from tarefas where id = $id";
        if ($resut = $link->query($query)) {
            while ($row = $resut->fetch_row()) {
                return new Tarefa($row[0], $row[1], $row[2]);

            }

        }
        $link->close();
        return null;
    }

    static function create($dado)
    {
        // TODO: Implement create() method.

        $nome = $dado->getNome();
        $date = $dado->getDate();
        $link = getConnection();
        $query = "insert into tarefas (nome,date) values ('{$nome}','{$date}')";
        $result = $link->query($query);
        $link->close();
        if (!$result) {
            echo \mysqli_error();
            exit(0);
        }

    }

    static function update($id, $dado)
    {
        // TODO: Implement update() method.
        //   $tarefa =self::findId($id);
        //usar com framework
        // $nome = $dado->getNome();
        //$date = $dado->getDate();
        //$tarefa->setNome($nome);
        // $tarefa->setDate($date);


        $nome = $dado->getNome();
        $date = $dado->getDate();
        $link = getConnection();
        $query = "update tarefas set nome='{$nome}',date='{$date}' where id = {$id}";

        $result = $link->query($query);

        $link->close();

    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
        $link =getConnection(); 
        $query = "delete from tarefas where id = $id";
        $link->query($query);
        $link->close();
    }
}