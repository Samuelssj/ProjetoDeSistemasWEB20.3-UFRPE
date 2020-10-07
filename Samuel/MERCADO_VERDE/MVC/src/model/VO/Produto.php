<?php


namespace MVC\src\model\VO;


class Produto
{

    private $id;
    private $nome;
    private $marca;
    private $descricao;
    private $estoque;
    private $dataCadastro;
    private $preco;

    /**
     * Produto constructor.
     * @param $id
     * @param $nome
     * @param $marca
     * @param $descricao
     * @param $estoque
     * @param $dataCadastro
     * @param $preco
     */
    public function __construct($id, $nome, $marca, $descricao, $estoque, $dataCadastro, $preco)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->marca = $marca;
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->dataCadastro = $dataCadastro;
        $this->preco = $preco;
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
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * @param mixed $estoque
     */
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }

    /**
     * @return mixed
     */
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /**
     * @param mixed $dataCadastro
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }


}

