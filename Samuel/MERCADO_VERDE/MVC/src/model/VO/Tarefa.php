<?php

namespace MVC\src\model\VO;


class Tarefa
{
        private $id, $nome, $date;

    /**
     * Tarefa constructor.
     * @param $id
     * @param $nome
     * @param $date
     */
    public function __construct($id, $nome, $date)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }


}