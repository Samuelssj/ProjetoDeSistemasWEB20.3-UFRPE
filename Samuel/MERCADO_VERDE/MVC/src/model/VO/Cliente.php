<?php


namespace MVC\src\model\VO;


class Cliente
{
    private $id;
    private $name;
    private $sobrenome;
    private $nascimento;
    private $email;
    private $senha;

    /**
     * Cliente constructor.
     * @param $id
     * @param $name
     * @param $sobrenome
     * @param $nascimento
     * @param $email
     * @param $senha
     */
    public function __construct($id, $name, $sobrenome, $nascimento, $email, $senha)
    {
        $this->id = $id;
        $this->name = $name;
        $this->sobrenome = $sobrenome;
        $this->nascimento = $nascimento;
        $this->email = $email;
        $this->senha = $senha;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    /**
     * @return mixed
     */
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * @param mixed $nascimento
     */
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


}