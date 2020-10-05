<?php


namespace MVC\src\model\DAO;

use http\Client;
use MVC\src\model\VO\Cliente;
use MVC\src\model\VO\Tarefa;


require "conect_database.php";


class ClienteDAO implements interfaceClienteDAO
{
    public $table = "cliente";

    public function findAll()
    {
        $link = getConnection();
        $lista = [];
        $query = "select * from {$this->table} where user_id = {$_SESSION['id']}";
        if ($result = $link->query($query)) {
            while ($row = $result->fetch_row()) {
                $obj = new Cliente($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
                array_push($lista, $obj);
            }
        }
        $link->close();
        return $lista;

    }

    public function findbyID($id)
    {
        $link = getConnection();
        $query = "select * from {$this->table} where id ={$id} and user_id={$_SESSION['id']}";
        if ($result = $link->query($query)) {
            while ($row = $result->fetch_row()) {
                $link->close();
                return new Cliente($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
            }
        }
        $link->close();
        return null;
    }

    public function create(Cliente $cliente)
    {
        $link = getConnection();
        $query = "insert into {$this->table}(name, sobrenome, nascimento, email, senha)values('{$cliente->getName()}','{$cliente->getSobrenome()}','{$cliente->getNascimento()}',''{$cliente->getEmail()}','{$cliente->getSenha()}{$_SESSION['user_id']})";
        // var_dump($query);
        //exit(0);
        $result = $link->query($query);


        $link->close();
        if (!$result) {
            echo mysqli_error();
            exit(0);
        }
    }

    public function update($id, Cliente $cliente)
    {
        $link = getConnection();
        $query = "update {$this->table} set name='{$cliente->getName()}', sobrenome='{$$cliente->getSobrenome()}', nascimento={$cliente->getNascimento()} , email={$cliente->getEmail()}, senha={$cliente->getSenha()}where id={$id}";


        $result = $link->query($query);
        $link->close();
        if (!$result) {
            echo mysqli_error();
            exit(0);
        }
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $link = getConnection();
        $query = "delete from {$this->table} where id={$id} and user_id={$_SESSION['id']}";
        $result = $link->query($query);
        $link->close();
        if (!$result) {
            echo mysqli_error();
            exit(0);
        }
    }

    public function verificarUserSenha($email, $senha)
    {
        // TODO: Implement verificarUserSenha() method.
//        $senha = md5($senha);
        // TODO: Implement verifyUserAndPassword() method.
        $link = getConnection();
        $query = "select id, nome, email from {$this->table} where email='{$email}' and password ='{$senha}'";


        if ($result = $link->query($query)) {


            while ($row = $result->fetch_row()) {

                $link->close();

                return new Cliente($row[0], $row[1], null, null, $row[2], null);
            }
        }
        $link->close();

        return null;
    }
}