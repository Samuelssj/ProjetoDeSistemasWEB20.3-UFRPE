<?php


namespace MVC\src\model\DAO;


interface interfaceDAO
{

    static function findAll();
    static function findId($id);
    static function create($dado);
    static function update($id, $dado);
    static function delete($id);

}