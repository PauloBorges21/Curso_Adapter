<?php


class Pessoa
{
    private $nome;
    private $idade;
    public function __construct($nome,$idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
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
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }




}

