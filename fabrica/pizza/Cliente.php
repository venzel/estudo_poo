<?php

    require_once 'FabricaPizza.php';
    require_once 'PizzaQueijo.php';

    class Cliente {

        public $fabrica;

        //

        public function __construct()
        {
            $this->fabrica = new FabricaPizza();
        }

        //

        public function ordemPizza($nomePizza)
        {

            $pizza = null;

            $pizza = $this->fabrica->criarPizza($nomePizza);

            return $pizza;

        }

    }