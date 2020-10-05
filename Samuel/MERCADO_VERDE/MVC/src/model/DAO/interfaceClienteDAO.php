<?php


namespace MVC\src\model\DAO;

use MVC\src\model\VO\Cliente;

interface interfaceClienteDAO
{

    function findAll();

    function findbyID($id);

    function create(Cliente $cliente);

    function update($id, Cliente $cliente);

    function delete($id);

    function verificarUserSenha($email, $senha);


}