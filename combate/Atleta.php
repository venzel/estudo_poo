<?php

    class Atleta
    {

        private $apelido;
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        //

        public function __construct($ap, $no, $na, $id, $al, $pe, $vi, $de, $em)
        {
            $this->apelido = $ap;
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }

        public function getApelido()
        {
            return $this->apelido;
        }

        public function setApelido($apelido)
        {
            $this->apelido = $apelido;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getNacionalidade()
        {
            return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade)
        {
            $this->nacionalidade = $nacionalidade;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

        public function getAltura()
        {
            return $this->altura;
        }

        public function setAltura($altura)
        {
            $this->altura = $altura;
        }

        public function getPeso()
        {
            return $this->peso;
        }

        public function setPeso($peso)
        {

            $this->peso = $peso;

            $this->setCategoria();

        }

        public function getCategoria()
        {
            return $this->categoria;
        }

        private function setCategoria()
        {

            $p = $this->getPeso();

            switch ($p) {
                case $p <= 75 : $this->categoria = 'Pena'; break;
                case $p <= 85 : $this->categoria = 'Médios'; break;
                case $p <= 90 : $this->categoria = 'Pesados'; break;
                default : $this->categoria = 'Livre';
            }

        }

        public function getVitorias()
        {
            return $this->vitorias;
        }

        public function setVitorias($vitorias)
        {
            $this->vitorias = $vitorias;
        }

        public function getDerrotas()
        {
            return $this->derrotas;
        }

        public function setDerrotas($derrotas)
        {
            $this->derrotas = $derrotas;
        }

        public function getEmpates()
        {
            return $this->empates;
        }

        public function setEmpates($empates)
        {
            $this->empates = $empates;
        }

        //

        public static function campeonato() {
            echo "<h1>UCT COMBAT</h1>";
        }

        public function apresentar() {
            echo "Senhoras e senhores, chegou a hora de <b>{$this->getNome()} {$this->getApelido()}</b>, ele que é do <b>{$this->getNacionalidade()}</b>, pesando <b>{$this->getPeso()} kilos</b> e medindo <b>{$this->getAltura()} metros</b> de altura. ";
            echo "Possui <b>{$this->getVitorias()}</b> vitória(s), <b>{$this->getDerrotas()}</b> derrota(s) e <b>{$this->getEmpates()}</b> empate(s).<br><br>";
        }

        public function status() {
            echo "</br><h2>{$this->getApelido()}</h2>";
            echo "Nome: <b>{$this->getNome()}</b><br>";
            echo "Categoria: <b>{$this->getCategoria()}</b><br>";
            echo "Peso: <b>{$this->getPeso()} kilos</b><br>";
            echo "Altura: <b>{$this->getAltura()} metros</b><br>";
            echo "Vitória(s): <b>{$this->getVitorias()}</b><br>";
            echo "Derrota(s): <b>{$this->getDerrotas()}</b><br>";
            echo "Empate(s): <b>{$this->getEmpates()}</b><br><br>";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

    }