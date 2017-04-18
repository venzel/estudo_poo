<?php

abstract class Animais
{
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome = 'Costelinha', $idade = 13, $sexo = 'M')
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    //

    public function somEmitido() {
        echo 'Som padrao dos animais';
    }

}