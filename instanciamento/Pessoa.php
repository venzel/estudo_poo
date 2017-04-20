<?php

    abstract class Pessoa
    {

        private $nome;
        private $sexo;
        private $idade;

        //

        public function __construct($nome, $sexo, $idade)
        {
            $this->nome = $nome;
            $this->sexo = $sexo;
            $this->idade = $idade;
        }

        //

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getSexo()
        {
            return $this->sexo;
        }

        public function setSexo($sexo)
        {
            $this->sexo = $sexo;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

    }