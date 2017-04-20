<?php

    class Ingredientes
    {

        private $ingredientes;

        //

        public function __construct()
        {
            $this->setIngredientes('Farinha, Calabresa, Queijo');
        }

        //

        public function getIngredientes()
        {
            return $this->ingredientes;
        }

        public function setIngredientes($ingredientes)
        {
            $this->ingredientes = $ingredientes;
        }

    }