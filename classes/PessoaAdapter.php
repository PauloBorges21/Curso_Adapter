<?php


class PessoaAdapter
{
private $sexo;
private $pessoa;

public function __construct(Pessoa $pessoa)
{
    $this->pessoa = $pessoa;
}

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @return Pessoa
     */
    public function getNome()
    {
        return $this->pessoa->getNome();
    }

    public function getIdade()
    {
        return $this->pessoa->getIdade();
    }
}