<?php

    class Esporte
    {

        private $esporte;

        //

        public function __construct($esporte)
        {
            $this->esporte = $esporte;
        }

        //

        public function getEsporte()
        {
            return $this->esporte;
        }

        public function setEsporte($esporte)
        {
            $this->esporte = $esporte;
        }


    }