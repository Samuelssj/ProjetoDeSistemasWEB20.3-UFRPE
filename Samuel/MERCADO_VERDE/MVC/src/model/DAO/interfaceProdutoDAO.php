<?php


namespace MVC\src\model\DAO;


use MVC\src\model\VO\Produto;

interface interfaceProdutoDAO
{


    function findAll();

    function findbyID($id);

    function create(Produto $produto);

    function update($id, Produto $produto);

    function delete($id);



}