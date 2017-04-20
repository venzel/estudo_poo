<?php

    require_once 'Pessoa.php';

    class Atleta extends Pessoa
    {

        private $esportes;

        //

        public function __construct($p, $e)
        {

            parent::__construct($p['nome'], $p['sexo'], $p['idade']);

            $this->esportes = $e;

        }


    }